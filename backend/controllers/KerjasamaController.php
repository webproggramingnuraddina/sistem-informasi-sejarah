<?php

namespace backend\controllers;

use yii\web\Controller;
use yii\filters\VerbFilter;
use backend\models\Kerjasama;
use yii\filters\AccessControl;
use yii\web\NotFoundHttpException;
use backend\models\KerjasamaSearch;

/**
 * KerjasamaController implements the CRUD actions for Kerjasama model.
 */
class KerjasamaController extends Controller
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
     * Lists all Kerjasama models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new KerjasamaSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);
        $kerjasama = Kerjasama::find()->all();

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'kerjasama' => $kerjasama,
        ]);
    }

    /**
     * Displays a single Kerjasama model.
     * @param int $id_kerjasama Id Kerjasama
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_kerjasama)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_kerjasama),
        ]);
    }

    /**
     * Creates a new Kerjasama model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Kerjasama();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id_kerjasama' => $model->id_kerjasama]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Kerjasama model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id_kerjasama Id Kerjasama
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_kerjasama)
    {
        $model = $this->findModel($id_kerjasama);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_kerjasama' => $model->id_kerjasama]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Kerjasama model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id_kerjasama Id Kerjasama
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_kerjasama)
    {
        $this->findModel($id_kerjasama)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Kerjasama model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id_kerjasama Id Kerjasama
     * @return Kerjasama the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_kerjasama)
    {
        if (($model = Kerjasama::findOne(['id_kerjasama' => $id_kerjasama])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
