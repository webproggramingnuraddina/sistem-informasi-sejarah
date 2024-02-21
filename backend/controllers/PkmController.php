<?php

namespace backend\controllers;

use Yii;
use backend\models\Pkm;
use yii\web\Controller;
use yii\filters\VerbFilter;
use backend\models\PkmSearch;
use yii\filters\AccessControl;
use yii\web\NotFoundHttpException;
use PhpOffice\PhpSpreadsheet\IOFactory;

/**
 * PkmController implements the CRUD actions for Pkm model.
 */
class PkmController extends Controller
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
    //                     //'delete' => ['POST'],
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
     * Lists all Pkm models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new PkmSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);
        $pkm = Pkm::find()->all();

        return $this->render('index', [
            'searchModel' => $searchModel,
            'pkm' => $pkm,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Pkm model.
     * @param int $id_pkm Id Pkm
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_pkm)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_pkm),
        ]);
    }

    /**
     * Creates a new Pkm model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Pkm();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id_pkm' => $model->id_pkm]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Pkm model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id_pkm Id Pkm
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_pkm)
    {
        $model = $this->findModel($id_pkm);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_pkm' => $model->id_pkm]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Pkm model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id_pkm Id Pkm
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_pkm)
    {
        $this->findModel($id_pkm)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Pkm model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id_pkm Id Pkm
     * @return Pkm the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_pkm)
    {
        if (($model = Pkm::findOne(['id_pkm' => $id_pkm])) !== null) {
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
                    $model = new Pkm();
                    $model->judul_pkm = (string)$sheetData[$baseRow]['B'];
                    $model->nama_ketua = (string)$sheetData[$baseRow]['C'];
                    $model->kepakaran = (string)$sheetData[$baseRow]['D'];
                    $model->anggota = (string)$sheetData[$baseRow]['E'];
                    $model->ang_mhs = (string)$sheetData[$baseRow]['F'];
                    $model->tahun = (string)$sheetData[$baseRow]['G'];
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
