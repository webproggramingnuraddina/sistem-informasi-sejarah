<?php

namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use backend\models\Kelompokriset;
use yii\web\NotFoundHttpException;
use backend\models\KelompokrisetSearch;
use PhpOffice\PhpSpreadsheet\IOFactory;

/**
 * KelompokrisetController implements the CRUD actions for Kelompokriset model.
 */
class KelompokrisetController extends Controller
{
    /**
     * @inheritDoc
     */
    // public function behaviors()
    // {
    //     return array_merge(
    //         parent::behaviors(),
    //         [
    //             'verbs' => [
    //                 'class' => VerbFilter::className(),
    //                 'actions' => [
    //                     // 'delete' => ['POST'],
    //                 ],
    //             ],
    //         ]
    //     );
    // }
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['index', 'create', 'delete', 'update', 'view'], // Tentukan aksi yang ingin Anda batasi aksesnya di sini
                'rules' => [
                    [
                        'allow' => true,
                        'actions' => ['index', 'create', 'delete', 'update', 'view'], // Aksi yang diizinkan
                        'roles' => ['@'], // Hanya pengguna yang sudah login ('@') yang diizinkan
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    //'delete' => ['POST'],
                ],
            ],
        ];
    }
    /**
     * Lists all Kelompokriset models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new KelompokrisetSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);
        $kelompokriset = Kelompokriset::find()->all();

        return $this->render('index', [
            'searchModel' => $searchModel,
            'kelompokriset' => $kelompokriset,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Kelompokriset model.
     * @param int $id_kelompokriset Id Kelompokriset
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_kelompokriset)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_kelompokriset),
        ]);
    }

    /**
     * Creates a new Kelompokriset model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Kelompokriset();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id_kelompokriset' => $model->id_kelompokriset]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Kelompokriset model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id_kelompokriset Id Kelompokriset
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_kelompokriset)
    {
        $model = $this->findModel($id_kelompokriset);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_kelompokriset' => $model->id_kelompokriset]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Kelompokriset model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id_kelompokriset Id Kelompokriset
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_kelompokriset)
    {
        $this->findModel($id_kelompokriset)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Kelompokriset model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id_kelompokriset Id Kelompokriset
     * @return Kelompokriset the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_kelompokriset)
    {
        if (($model = Kelompokriset::findOne(['id_kelompokriset' => $id_kelompokriset])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }


    public function actionImport()
    {
        $modelImport = new \yii\base\DynamicModel([
            'fileImport' => 'File Import',
        ]);
        $modelImport->addRule(['fileImport'], 'required');
        $modelImport->addRule(['fileImport'], 'file', ['extensions' => 'ods,xls,xlsx'], ['maxSize' => 1024 * 1024]);

        if (Yii::$app->request->post()) {
            $modelImport->fileImport = \yii\web\UploadedFile::getInstance($modelImport, 'fileImport');
            if ($modelImport->fileImport && $modelImport->validate()) {
                $inputFileType = IOFactory::identify($modelImport->fileImport->tempName);
                $objReader = IOFactory::createReader($inputFileType);
                $objPHPExcel = $objReader->load($modelImport->fileImport->tempName);
                $sheetData = $objPHPExcel->getActiveSheet()->toArray(null, true, true, true);
                $baseRow = 3;
                while (!empty($sheetData[$baseRow]['B'])) {
                    $model = new Kelompokriset();
                    $model->nama_riset = (string)$sheetData[$baseRow]['B'];
                    $model->nama_riset_eng = (string)$sheetData[$baseRow]['C'];
                    $model->anggota = (string)$sheetData[$baseRow]['D'];
                    $model->deskripsi = (string)$sheetData[$baseRow]['E'];
                    $model->deskripsi_eng = (string)$sheetData[$baseRow]['F'];
                    $model->save();
                    // die(print_r($model->errors));
                    $baseRow++;
                }
                Yii::$app->getSession()->setFlash('success', 'Success');
            } else {
                Yii::$app->getSession()->setFlash('error', 'Error');
            }
            return $this->redirect(['index']);
        }

        return $this->render('import', [
            'modelImport' => $modelImport,
        ]);
    }
}
