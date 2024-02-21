<?php

namespace backend\controllers;

use kcfinder\index;
use yii\web\Controller;
use yii\web\UploadedFile;
use backend\models\Jurnal;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use backend\models\JurnalSearch;
use yii\web\NotFoundHttpException;

/**
 * JurnalController implements the CRUD actions for Jurnal model.
 */
class JurnalController extends Controller
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
     * Lists all Jurnal models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new JurnalSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);
        $jurnal = Jurnal::find()->all();

        return $this->render('index', [
            'searchModel' => $searchModel,
            'jurnal' => $jurnal,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Jurnal model.
     * @param int $id_jurnal Id Jurnal
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_jurnal)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_jurnal),
        ]);
    }

    /**
     * Creates a new Jurnal model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Jurnal();
        $model->imageFile = UploadedFile::getInstance($model, 'foto');

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id_jurnal' => $model->id_jurnal]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Jurnal model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id_jurnal Id Jurnal
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_jurnal)
    {
        $model = $this->findModel($id_jurnal);
        $model->imageFile = UploadedFile::getInstance($model, 'foto');

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_jurnal' => $model->id_jurnal]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Jurnal model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id_jurnal Id Jurnal
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_jurnal)
    {
        $this->findModel($id_jurnal)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Jurnal model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id_jurnal Id Jurnal
     * @return Jurnal the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_jurnal)
    {
        if (($model = Jurnal::findOne(['id_jurnal' => $id_jurnal])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
