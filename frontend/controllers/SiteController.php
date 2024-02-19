<?php

namespace frontend\controllers;

use Yii;
use yii\web\Cookie;
use yii\web\Response;
use yii\web\Controller;
use backend\models\Dosen;
use backend\models\Kadep;
use backend\models\Berita;
use backend\models\Jurnal;
use backend\models\Home;
use yii\filters\VerbFilter;
use backend\models\Download;
use common\models\LoginForm;
use yii\filters\AccessControl;
use frontend\models\SignupForm;
use frontend\models\ContactForm;
use frontend\models\VerifyEmailForm;
use yii\web\BadRequestHttpException;
use backend\models\Strukturorganisasi;
use frontend\models\ResetPasswordForm;
use yii\base\InvalidArgumentException;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResendVerificationEmailForm;

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
    // Contoh aksi pada kontroler


    // public function actionSetLanguage($lang)
    // {
    //     // List of supported languages
    //     $supportedLanguages = ['id', 'en'];

    //     // Check if the selected language is supported
    //     if (in_array($lang, $supportedLanguages)) {
    //         // Set the application language
    //         Yii::$app->language = $lang;

    //         // Save the selected language in session
    //         Yii::$app->session->set('language', $lang);

    //         // Redirect back to the same page with the selected language
    //         return $this->redirect(Yii::$app->request->referrer ?: Yii::$app->homeUrl);
    //     }

    //     // Return error response if language is not supported
    //     // Yii::$app->session->setFlash('error', 'Invalid language selection.');
    //     // return $this->redirect(Yii::$app->request->referrer ?: Yii::$app->homeUrl);
    // }

    public function actionSetLanguage($lang)
    {
        $supportedLanguages = ['id', 'en'];

        if (in_array($lang, $supportedLanguages)) {
            Yii::$app->session->set('language', $lang);
            Yii::$app->language = $lang;

            return $this->redirect(Yii::$app->request->referrer ?: Yii::$app->homeUrl);
        }
    }

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {
        $lang = Yii::$app->session->get('language', 'id');
        Yii::$app->language = $lang;
        $modelBerita = Berita::find()->all();
        $modelKadep = Kadep::find()->all();
        $modelHome = Home::find()->all();
        $countdosen = Dosen::find()->where(['kriteria' => '1'])->count();
        $countdosen_praktisi = Dosen::find()->where(['kriteria' => '2'])->count();
        $countasisten_dosen = Dosen::find()->where(['kriteria' => '3'])->count();
        $counttenaga_kependidikan = Dosen::find()->where(['kriteria' => '4'])->count();


        return $this->render('index', [
            'modelBerita' => $modelBerita,
            'modelHome' => $modelHome,
            'modelKadep' => $modelKadep,
            'countdosen' => $countdosen,
            'countdosen_praktisi' => $countdosen_praktisi,
            'countasisten_dosen' => $countasisten_dosen,
            'counttenaga_kependidikan' => $counttenaga_kependidikan,
        ]);
    }

    public function actionIndexeng()
    {
        $modelBerita = Berita::find()->all();
        $modelKadep = Kadep::find()->all();
        return $this->render('indexeng', [
            'modelBerita' => $modelBerita,
            'modelKadep' => $modelKadep,
        ]);
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
        $lang = Yii::$app->session->get('language', 'id');
        Yii::$app->language = $lang;
        return $this->render('about');
    }

    public function actionDownload()
    {
        $lang = Yii::$app->session->get('language', 'id');
        Yii::$app->language = $lang;
        $modelDownload = Download::find()->all();
        return $this->render('download', [
            'modelDownload' => $modelDownload
        ]);
    }
    public function actionDosen()
    {

        $lang = Yii::$app->session->get('language', 'id');
        Yii::$app->language = $lang;
        $modelDosen = Dosen::find()->all();
        return $this->render('dosen', [
            'modelDosen' => $modelDosen
        ]);
    }
    public function actionDosenPraktisi()
    {
        $lang = Yii::$app->session->get('language', 'id');
        Yii::$app->language = $lang;
        $modelDosenPraktisi = Dosen::find()->all();
        return $this->render('dosen-praktisi', [
            'modelDosenPraktisi' => $modelDosenPraktisi
        ]);
    }
    public function actionTendik()
    {
        $lang = Yii::$app->session->get('language', 'id');
        Yii::$app->language = $lang;
        $modelTendik = Dosen::find()->all();
        return $this->render('tendik', [
            'modelTendik' => $modelTendik
        ]);
    }
    public function actionAsdos()
    {
        $lang = Yii::$app->session->get('language', 'id');
        Yii::$app->language = $lang;
        $modelAsdos = Dosen::find()->all();
        return $this->render('asdos', [
            'modelAsdos' => $modelAsdos
        ]);
    }

    public function actionJurnal()
    {
        $lang = Yii::$app->session->get('language', 'id');
        Yii::$app->language = $lang;
        $modelJurnal = Jurnal::find()->all();
        return $this->render('jurnal', [
            'modelJurnal' => $modelJurnal,
        ]);
    }

    public function actionJurnaleng()
    {
        $modelJurnal = Jurnal::find()->all();
        return $this->render('jurnaleng', [
            'modelJurnal' => $modelJurnal,
        ]);
    }

    public function actionBerita()
    {
        $modelBerita = Berita::find()->all();
        return $this->render('berita', [
            'modelBerita' => $modelBerita,
        ]);
    }

    public function actionKurikulum()
    {
        return $this->render('kurikulum');
    }

    public function actionKalender()
    {
        return $this->render('kalender');
    }

    public function actionMutu()
    {
        return $this->render('mutu');
    }

    public function actionCpl()
    {
        return $this->render('cpl');
    }

    public function actionLulusan()
    {
        return $this->render('lulusan');
    }

    public function actionMaba()
    {
        return $this->render('maba');
    }
    public function actionDetaildosen($id)
    {
        $lang = Yii::$app->session->get('language', 'id');
        Yii::$app->language = $lang;
        // Cari dosen berdasarkan ID
        $dosen = Dosen::findOne($id);

        if ($dosen === null) {
            throw new \yii\web\NotFoundHttpException('Dosen tidak ditemukan.');
        }

        // Tampilkan halaman detail dosen
        return $this->render('detaildosen', [
            'dosen' => $dosen,
        ]);
    }
    public function actionStruktur()
    {
        $lang = Yii::$app->session->get('language', 'id');
        Yii::$app->language = $lang;
        // Cari dosen berdasarkan ID
        $struktur = Strukturorganisasi::find()->all();

        if ($struktur === null) {
            throw new \yii\web\NotFoundHttpException('Dosen tidak ditemukan.');
        }

        // Tampilkan halaman detail struktur
        return $this->render('struktur', [
            'struktur' => $struktur,
        ]);
    }

    public function actionSkripsi()
    {
        return $this->render('skripsi');
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
}
