<?php

namespace backend\controllers;

use yii\web\Controller;
use yii\filters\VerbFilter;
use backend\models\Download;
use yii\filters\AccessControl;
use backend\models\DownloadSearch;
use yii\web\NotFoundHttpException;

/**
 * DownloadController implements the CRUD actions for Download model.
 */
class DownloadController extends Controller
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
    //                     'delete' => ['POST'],
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
     * Lists all Download models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new DownloadSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);
        $download = Download::find()->all();

        return $this->render('index', [
            'download' => $download,
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Download model.
     * @param int $id_download Id Download
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_download)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_download),
        ]);
    }

    /**
     * Creates a new Download model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Download();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id_download' => $model->id_download]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Download model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id_download Id Download
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_download)
    {
        $model = $this->findModel($id_download);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_download' => $model->id_download]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Download model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id_download Id Download
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_download)
    {
        $this->findModel($id_download)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Download model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id_download Id Download
     * @return Download the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_download)
    {
        if (($model = Download::findOne(['id_download' => $id_download])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
