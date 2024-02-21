<?php

namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use backend\models\Peneltian;
use yii\filters\AccessControl;
use yii\web\NotFoundHttpException;
use backend\models\PeneltianSearch;
use PhpOffice\PhpSpreadsheet\IOFactory;

/**
 * PeneltianController implements the CRUD actions for Peneltian model.
 */
class PeneltianController extends Controller
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
     * Lists all Peneltian models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new PeneltianSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);
        $peneltian = Peneltian::find()->all();

        return $this->render('index', [
            'searchModel' => $searchModel,
            'peneltian' => $peneltian,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Peneltian model.
     * @param int $id_penelitian Id Penelitian
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_penelitian)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_penelitian),
        ]);
    }

    /**
     * Creates a new Peneltian model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Peneltian();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id_penelitian' => $model->id_penelitian]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Peneltian model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id_penelitian Id Penelitian
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_penelitian)
    {
        $model = $this->findModel($id_penelitian);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_penelitian' => $model->id_penelitian]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Peneltian model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id_penelitian Id Penelitian
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_penelitian)
    {
        $this->findModel($id_penelitian)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Peneltian model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id_penelitian Id Penelitian
     * @return Peneltian the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_penelitian)
    {
        if (($model = Peneltian::findOne(['id_penelitian' => $id_penelitian])) !== null) {
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
                    $model = new Peneltian();
                    $model->judul_penelitian = (string)$sheetData[$baseRow]['B'];
                    $model->nama_ketua = (string)$sheetData[$baseRow]['C'];
                    $model->kepakaran_ketua = (string)$sheetData[$baseRow]['D'];
                    $model->anggota = (string)$sheetData[$baseRow]['E'];
                    $model->ang_mhs = (string)$sheetData[$baseRow]['F'];
                    $model->link_penelitian = (string)$sheetData[$baseRow]['G'];
                    $model->tahun = (string)$sheetData[$baseRow]['H'];
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
