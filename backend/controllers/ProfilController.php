<?php

namespace backend\controllers;

use backend\models\Profil;
use frontend\models\ProfilSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ProfilController implements the CRUD actions for Profil model.
 */
class ProfilController extends Controller
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
                        // 'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all Profil models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new ProfilSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);
        $profil = Profil::find()->all();

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'profil' => $profil,
        ]);
    }

    /**
     * Displays a single Profil model.
     * @param int $id_profil Id Profil
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_profil)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_profil),
        ]);
    }

    /**
     * Creates a new Profil model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Profil();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id_profil' => $model->id_profil]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Profil model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id_profil Id Profil
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_profil)
    {
        $model = $this->findModel($id_profil);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_profil' => $model->id_profil]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Profil model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id_profil Id Profil
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_profil)
    {
        $this->findModel($id_profil)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Profil model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id_profil Id Profil
     * @return Profil the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_profil)
    {
        if (($model = Profil::findOne(['id_profil' => $id_profil])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
