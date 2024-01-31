<?php

namespace backend\controllers;

use backend\models\Fasilitas;
use backend\models\FasilitasSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * FasilitaslController implements the CRUD actions for Fasilitas model.
 */
class FasilitaslController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all Fasilitas models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new FasilitasSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Fasilitas model.
     * @param int $id_fasilitas Id Fasilitas
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_fasilitas)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_fasilitas),
        ]);
    }

    /**
     * Creates a new Fasilitas model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Fasilitas();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id_fasilitas' => $model->id_fasilitas]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Fasilitas model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id_fasilitas Id Fasilitas
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_fasilitas)
    {
        $model = $this->findModel($id_fasilitas);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_fasilitas' => $model->id_fasilitas]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Fasilitas model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id_fasilitas Id Fasilitas
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_fasilitas)
    {
        $this->findModel($id_fasilitas)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Fasilitas model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id_fasilitas Id Fasilitas
     * @return Fasilitas the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_fasilitas)
    {
        if (($model = Fasilitas::findOne(['id_fasilitas' => $id_fasilitas])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
