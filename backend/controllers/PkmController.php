<?php

namespace backend\controllers;

use backend\models\Pkm;
use backend\models\PkmSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PkmController implements the CRUD actions for Pkm model.
 */
class PkmController extends Controller
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
}
