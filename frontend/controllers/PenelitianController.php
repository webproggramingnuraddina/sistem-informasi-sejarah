<?php

namespace frontend\controllers;

use frontend\models\ResendVerificationEmailForm;
use frontend\models\VerifyEmailForm;
use Yii;
use yii\base\InvalidArgumentException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;
use backend\models\Kerjasama;
use backend\models\Peneltian;
use backend\models\Pkm;
use backend\models\Kelompokriset;
use yii\data\Pagination;

/**
 * Site controller
 */
class PenelitianController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::class,
                'actions' => [
                    'logout' => ['post'],
                ],
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
            'captcha' => [
                'class' => \yii\captcha\CaptchaAction::class,
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * Logs in a user.
     *
     * @return mixed
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

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
     * Logs out the current user.
     *
     * @return mixed
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return mixed
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail(Yii::$app->params['adminEmail'])) {
                Yii::$app->session->setFlash('success', 'Thank you for contacting us. We will respond to you as soon as possible.');
            } else {
                Yii::$app->session->setFlash('error', 'There was an error sending your message.');
            }

            return $this->refresh();
        }

        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionAbout()
    {
        return $this->render('about');
    }

    /**
     * Signs user up.
     *
     * @return mixed
     */
    public function actionSignup()
    {
        $model = new SignupForm();
        if ($model->load(Yii::$app->request->post()) && $model->signup()) {
            Yii::$app->session->setFlash('success', 'Thank you for registration. Please check your inbox for verification email.');
            return $this->goHome();
        }

        return $this->render('signup', [
            'model' => $model,
        ]);
    }

    /**
     * Requests password reset.
     *
     * @return mixed
     */
    public function actionRequestPasswordReset()
    {
        $model = new PasswordResetRequestForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', 'Check your email for further instructions.');

                return $this->goHome();
            }

            Yii::$app->session->setFlash('error', 'Sorry, we are unable to reset password for the provided email address.');
        }

        return $this->render('requestPasswordResetToken', [
            'model' => $model,
        ]);
    }

    /**
     * Resets password.
     *
     * @param string $token
     * @return mixed
     * @throws BadRequestHttpException
     */
    public function actionResetPassword($token)
    {
        try {
            $model = new ResetPasswordForm($token);
        } catch (InvalidArgumentException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }

        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->resetPassword()) {
            Yii::$app->session->setFlash('success', 'New password saved.');

            return $this->goHome();
        }

        return $this->render('resetPassword', [
            'model' => $model,
        ]);
    }

    /**
     * Verify email address
     *
     * @param string $token
     * @throws BadRequestHttpException
     * @return yii\web\Response
     */
    public function actionVerifyEmail($token)
    {
        try {
            $model = new VerifyEmailForm($token);
        } catch (InvalidArgumentException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }
        if (($user = $model->verifyEmail()) && Yii::$app->user->login($user)) {
            Yii::$app->session->setFlash('success', 'Your email has been confirmed!');
            return $this->goHome();
        }

        Yii::$app->session->setFlash('error', 'Sorry, we are unable to verify your account with provided token.');
        return $this->goHome();
    }

    /**
     * Resend verification email
     *
     * @return mixed
     */
    public function actionResendVerificationEmail()
    {
        $model = new ResendVerificationEmailForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', 'Check your email for further instructions.');
                return $this->goHome();
            }
            Yii::$app->session->setFlash('error', 'Sorry, we are unable to resend verification email for the provided email address.');
        }

        return $this->render('resendVerificationEmail', [
            'model' => $model
        ]);
    }

    public function actionKelompokriset()
    {
        $modelKelompokriset = Kelompokriset::find()->all();

        return $this->render('kelompokriset', [
            'modelKelompokriset' => $modelKelompokriset
        ]);
    }

    public function actionPublikasiriset()
    {
        // $modelPublikasiriset = Peneltian::find()->all();
        $modelPublikasiriset = Peneltian::find();
        $pagination = new Pagination([
            'defaultPageSize' => 10, // Jumlah item per halaman
            'totalCount' => $modelPublikasiriset->count(),
        ]);

        // Terapkan paginasi ke kueri
        $modelPublikasiriset = $modelPublikasiriset->offset($pagination->offset)
        ->limit($pagination->limit)
        ->all();

        return $this->render('publikasiriset', [
            'modelPublikasiriset' => $modelPublikasiriset,
            'pagination' => $pagination,
        ]);
    }

    public function actionPublikasipengabdian()
    {
        $modelPublikasipengabdian = Pkm::find()->all();

        $modelPublikasipengabdian = Pkm::find();
        $pagination = new Pagination([
            'defaultPageSize' => 10, // Jumlah item per halaman
            'totalCount' => $modelPublikasipengabdian->count(),
        ]);

        // Terapkan paginasi ke kueri
        $modelPublikasipengabdian = $modelPublikasipengabdian->offset($pagination->offset)
        ->limit($pagination->limit)
        ->all();

        return $this->render('publikasipengabdian', [
            'modelPublikasipengabdian' => $modelPublikasipengabdian,
            'pagination' => $pagination,
        ]);
    
    }

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionKerjasama()
    {
        $modelKerjasama = Kerjasama::find()->all();

        return $this->render('kerjasama', [
            'modelKerjasama' => $modelKerjasama
        ]);

    }
    
    public function actionKelompokriseteng()
    {
        $modelKelompokriset = Kelompokriset::find()->all();

        return $this->render('kelompokriseteng', [
            'modelKelompokriset' => $modelKelompokriset
        ]);
    }

    public function actionPublikasiriseteng()
    {
        // $modelPublikasiriset = Peneltian::find()->all();
        $modelPublikasiriset = Peneltian::find();
        $pagination = new Pagination([
            'defaultPageSize' => 10, // Jumlah item per halaman
            'totalCount' => $modelPublikasiriset->count(),
        ]);

        // Terapkan paginasi ke kueri
        $modelPublikasiriset = $modelPublikasiriset->offset($pagination->offset)
        ->limit($pagination->limit)
        ->all();

        return $this->render('publikasiriseteng', [
            'modelPublikasiriset' => $modelPublikasiriset,
            'pagination' => $pagination,
        ]);
    }

    public function actionPublikasipengabdianeng()
    {
        $modelPublikasipengabdian = Pkm::find()->all();

        $modelPublikasipengabdian = Pkm::find();
        $pagination = new Pagination([
            'defaultPageSize' => 10, // Jumlah item per halaman
            'totalCount' => $modelPublikasipengabdian->count(),
        ]);

        // Terapkan paginasi ke kueri
        $modelPublikasipengabdian = $modelPublikasipengabdian->offset($pagination->offset)
        ->limit($pagination->limit)
        ->all();

        return $this->render('publikasipengabdianeng', [
            'modelPublikasipengabdian' => $modelPublikasipengabdian,
            'pagination' => $pagination,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionKerjasamaeng()
    {
        $modelKerjasama = Kerjasama::find()->all();

        return $this->render('kerjasamaeng', [
            'modelKerjasama' => $modelKerjasama
        ]);

    }
}
