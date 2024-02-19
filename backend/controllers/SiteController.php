<?php

namespace backend\controllers;

use backend\models\Dosen;
use backend\models\Fasilitas;
use backend\models\Berita;
use backend\models\Jurnal;
use backend\models\Kelompokriset;
use backend\models\Kerjasama;
use backend\models\Organisasimhs;
use backend\models\Peneltian;
use backend\models\Pkm;
use backend\models\Prestasi;
use common\models\LoginForm;
use Yii;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;

/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                'rules' => [
                    [
                        'actions' => ['login', 'error'],
                        'allow' => true,
                    ],
                    [
                        'actions' => ['logout', 'index'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::class,
                // 'actions' => [
                //     'logout' => ['post'],
                // ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => \yii\web\ErrorAction::class,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        $countdosen = Dosen::find()->count();
        $countprestasi = Prestasi::find()->count();
        $countpeneltian = Peneltian::find()->count();
        $countjurnal = Jurnal::find()->count();
        $countberita = Berita::find()->count();
        $countkerjasama = Kerjasama::find()->count();
        $countkelompokriset = Kelompokriset::find()->count();
        $countorganisasimhs = Organisasimhs::find()->count();
        $countpkm = Pkm::find()->count();
        // $count = ::find()->count();

        return $this->render(
            'index',
            [
                'countdosen' => $countdosen,
                'countprestasi' => $countprestasi,
                'countpeneltian' => $countpeneltian,
                'countjurnal' => $countjurnal,
                'countberita' => $countberita,
                'countkerjasama' => $countkerjasama,
                'countkelompokriset' => $countkelompokriset,
                'countorganisasimhs' => $countorganisasimhs,
                'countpkm' => $countpkm,
                // '' => $ ,
                // '' => $ ,
            ]
        );
    }

    /**
     * Login action.
     *
     * @return string|Response
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $this->layout = 'blank';

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';

        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }
}
