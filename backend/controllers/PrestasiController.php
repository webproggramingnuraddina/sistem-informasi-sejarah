<?php

namespace backend\controllers;

use yii\web\Controller;
use yii\web\UploadedFile;
use yii\filters\VerbFilter;
use backend\models\Prestasi;
use yii\filters\AccessControl;
use backend\models\PrestasiSearch;
use yii\web\NotFoundHttpException;

/**
 * PrestasiController implements the CRUD actions for Prestasi model.
 */
class PrestasiController extends Controller
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
     * Lists all Prestasi models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new PrestasiSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);
        $prestasi = Prestasi::find()->all();

        return $this->render('index', [
            'searchModel' => $searchModel,
            'prestasi' => $prestasi,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Prestasi model.
     * @param int $id_prestasi Id Prestasi
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_prestasi)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_prestasi),
        ]);
    }

    /**
     * Creates a new Prestasi model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Prestasi();
        $model->imageFile = UploadedFile::getInstance($model, 'image');

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id_prestasi' => $model->id_prestasi]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Prestasi model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id_prestasi Id Prestasi
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_prestasi)
    {
        $model = $this->findModel($id_prestasi);
        $model->imageFile = UploadedFile::getInstance($model, 'image');

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_prestasi' => $model->id_prestasi]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Prestasi model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id_prestasi Id Prestasi
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_prestasi)
    {
        $this->findModel($id_prestasi)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Prestasi model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id_prestasi Id Prestasi
     * @return Prestasi the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_prestasi)
    {
        if (($model = Prestasi::findOne(['id_prestasi' => $id_prestasi])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
