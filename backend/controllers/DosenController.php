<?php

namespace backend\controllers;

use Yii;
use yii\web\Controller;
use backend\models\Dosen;
use yii\web\UploadedFile;
use yii\filters\VerbFilter;
use backend\models\Kriteria;
use yii\filters\AccessControl;
use backend\models\DosenSearch;
use yii\web\NotFoundHttpException;
use PhpOffice\PhpSpreadsheet\IOFactory;

/**
 * DosenController implements the CRUD actions for Dosen model.
 */
class DosenController extends Controller
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
     * Lists all Dosen models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new DosenSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);
        $dosen = Dosen::find()->all();
        $kriteria0 = Kriteria::find()->all();

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dosen' => $dosen,
            'dataProvider' => $dataProvider,
            'kriteria0' => $kriteria0,
        ]);
    }

    /**
     * Displays a single Dosen model.
     * @param int $id_dosen Id Dosen
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_dosen)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_dosen),
        ]);
    }

    /**
     * Creates a new Dosen model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Dosen();
        $model->imageFile = UploadedFile::getInstance($model, 'image');

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id_dosen' => $model->id_dosen]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Dosen model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id_dosen Id Dosen
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_dosen)
    {
        $model = $this->findModel($id_dosen);
        $model->imageFile = UploadedFile::getInstance($model, 'image');

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_dosen' => $model->id_dosen]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Dosen model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id_dosen Id Dosen
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_dosen)
    {
        $this->findModel($id_dosen)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Dosen model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id_dosen Id Dosen
     * @return Dosen the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_dosen)
    {
        if (($model = Dosen::findOne(['id_dosen' => $id_dosen])) !== null) {
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
                    $model = new Dosen();
                    $model->nama = (string)$sheetData[$baseRow]['B'];
                    $model->nip = (string)$sheetData[$baseRow]['C'];
                    $model->kriteria = (string)$sheetData[$baseRow]['D'];
                    $model->tmp_tgl_lahir = (string)$sheetData[$baseRow]['E'];
                    $model->email = (string)$sheetData[$baseRow]['F'];
                    $model->riwayat_pen = (string)$sheetData[$baseRow]['G'];
                    $model->kepakaran = (string)$sheetData[$baseRow]['H'];
                    $model->pendidikan_sarjana = (string)$sheetData[$baseRow]['I'];
                    $model->pendidikan_magister = (string)$sheetData[$baseRow]['J'];
                    $model->pendidikan_doktoral = (string)$sheetData[$baseRow]['K'];
                    $model->mata_kuliah = (string)$sheetData[$baseRow]['L'];
                    $model->detail = (string)$sheetData[$baseRow]['M'];
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
