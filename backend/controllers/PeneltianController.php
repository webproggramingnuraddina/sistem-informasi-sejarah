<?php

namespace backend\controllers;

use backend\models\Peneltian;
use backend\models\PeneltianSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PeneltianController implements the CRUD actions for Peneltian model.
 */
class PeneltianController extends Controller
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
                        //'delete' => ['POST'],
                    ],
                ],
            ]
        );
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
        $penelitian = Peneltian::find()->all();

        return $this->render('index', [
            'searchModel' => $searchModel,
            'penelitian' => $penelitian,
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
}
