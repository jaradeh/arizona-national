<?php

namespace frontend\controllers;

use Yii;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use yii\data\ActiveDataProvider;
use yii\db\Query;
use backend\models\Contact;
use common\models\User;
use backend\models\Projects;
use backend\models\Resume;
use backend\models\Careers;
use backend\models\Departments;
use backend\models\Services;
use backend\models\SisterCompany;
use backend\models\CompanyProfile;
use backend\models\HomeDataBanner;
use backend\models\ProjectCategory;
use backend\models\SocialMedia;
use backend\models\DirectorsVision;
use backend\models\HappyClients;
use backend\models\Team;
use backend\models\SkillsReviews;
use backend\models\Skills;
use backend\models\Reviews;
use app\models\UploadForm;
use yii\web\UploadedFile;

/**
 * Site controller
 */
class SiteController extends Controller {

    public function init() {
        parent::init();
        $session = Yii::$app->session;
        if (isset($_GET['language'])) {
            $lang = $_GET['language'];
            $action = $_GET['action'];
            $session['language'] = $lang;
            if ($lang == "en-US") {
                $lang_id = "1";
            }
            if ($lang == "fr-FR") {
                $lang_id = "2";
            }
            if ($lang == "ar-AR") {
                $lang_id = "3";
            }
            $session['language_id'] = $lang_id;

            if ($action == "index") {
                $this->goHome();
            } else {
                $this->redirect($action);
            }
        }
        if ($session['language'] == "" || empty($session['language'])) {
            $session['language'] = "en-US";
            $session['language_id'] = "1";
        }
        Yii::$app->language = $session['language'];
    }

    public function actionLang() {

        $session = Yii::$app->session;
        if (isset($_GET['language'])) {
            $lang = $_GET['language'];
            $action = $_GET['action'];
            $session['language'] = $lang;
            if ($lang == "en-US") {
                $lang_id = "1";
            }
            if ($lang == "ar-AR") {
                $lang_id = "2";
            }
            $session['language_id'] = $lang_id;

            if ($action == "index") {
                $this->goHome();
            } else {
                $this->redirect($action);
            }
        }
        if ($session['language'] == "" || empty($session['language'])) {
            $session['language'] = "en-US";
            $session['language_id'] = "1";
        }
        Yii::$app->language = $session['language'];
    }

    /**
     * @inheritdoc
     */
    public function behaviors() {
        return [
            'access' => [
                'class' => AccessControl::className(),
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
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions() {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex() {
        $session = Yii::$app->session;
        $lang_id = $session['language_id'];
        $directors_vision = DirectorsVision::find()->where(['lang_id' => $lang_id])->all();
        $team = Team::find()->all();
        $happy_clients = HappyClients::find()->all();
        $info_banner = HomeDataBanner::find()->where(['lang_id' => $lang_id])->one();
        $company_profile = CompanyProfile::find(['lang_id' => $lang_id])->one();
        $services = Services::find()->Where(['lang_id' => $lang_id])->all();
        $projects = Projects::find()->Where(['lang_id' => $lang_id])->limit(6)->orderBy(['id' => SORT_DESC])->all();
        $projects_categories = ProjectCategory::find()->where(['lang_id' => $lang_id])->all();
        return $this->render('index', [
                    'projects' => $projects,
                    'services' => $services,
                    'company_profile' => $company_profile,
                    'info_banner' => $info_banner,
                    'directors_vision' => $directors_vision,
                    'happy_clients' => $happy_clients,
                    'projects_categories' => $projects_categories,
                    'team' => $team,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionAbout() {
        $session = Yii::$app->session;
        $lang_id = $session['language_id'];
        $projects = Projects::find()->Where(['lang_id' => $lang_id])->limit(6)->orderBy(['id' => SORT_DESC])->all();
        $company_profile = CompanyProfile::find(['lang_id' => $lang_id])->one();
        $sister_company = SisterCompany::find()->Where(['lang_id' => $lang_id])->all();
        $skill_reviews = SkillsReviews::find()->Where(['lang_id' => $lang_id])->one();
        $skill = Skills::find()->Where(['lang_id' => $lang_id])->all();
        $reviews = Reviews::find()->Where(['lang_id' => $lang_id])->all();
        return $this->render('about', [
                    'sister_company' => $sister_company,
                    'company_profile' => $company_profile,
                    'projects' => $projects,
                    'skill_reviews' => $skill_reviews,
                    'skill' => $skill,
                    'reviews' => $reviews,
        ]);
    }

    /**
     * Displays services page.
     *
     * @return mixed
     */
    public function actionServices() {
        $session = Yii::$app->session;
        $lang_id = $session['language_id'];
        $departments = Departments::find()->Where(['lang_id' => $lang_id])->all();
        $model = Services::find()->Where(['lang_id' => $lang_id])->all();
        return $this->render('services', [
                    'services' => $model,
                    'departments' => $departments,
        ]);
    }

    /**
     * Displays projects page.
     *
     * @return mixed
     */
    public function actionProjects() {
        $session = Yii::$app->session;
        $lang_id = $session['language_id'];
        $categories = ProjectCategory::find()->where(['lang_id' => $lang_id])->all();
        $projects = Projects::find()->Where(['lang_id' => $lang_id])->all();
        return $this->render('projects', [
                    'projects' => $projects,
                    'categories' => $categories,
        ]);
    }

    /**
     * Displays careers page.
     *
     * @return mixed
     */
    public function actionCareers() {
        $session = Yii::$app->session;
        $lang_id = $session['language_id'];
        $model = new Resume();
        $careers = Careers::find()->Where(['lang_id' => $lang_id])->all();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {

            $post = Yii::$app->request->post();
            $path = $model->path = UploadedFile::getInstance($model, "path");
            if (!empty($model->path)) {
                $path_extention = $model->path->extension;
                if ($path_extention == "pdf" || $path_extention == "doc" || $path_extention == "docx") {
                    
                } else {
                    Yii::$app->session->setFlash('error', 'CV must be in PDF or Word format !');
                    return $this->refresh();
                }
            } else {
                Yii::$app->session->setFlash('error', 'Please upload your RUSME !');
                return $this->refresh();
            }

            if ($model->path != "" || !empty($model->path)) {
                $model->path = $model->path->saveAs(dirname(__FILE__) . '/../../' . "/frontend/web/cv/" . $path1 = $model->path->baseName . "_" . Yii::$app->security->generateRandomString() . '.' . $model->path->extension);
                $model->path = $path1;
            } else {
                $model->image = NULL;
            }

            if ($model->save()) {
                Yii::$app->session->setFlash('success', 'You have successfully applied your rusme, we will contact you as soon as possible !');
                return $this->refresh();
            } else {
                if (isset($path1)) {
                    unlink(dirname(__FILE__) . '/../../' . "/frontend/web/cv/" . $path1);
                }
                Yii::$app->session->setFlash('error', 'Something went wrong, Could not create your resume !');
                return $this->refresh();
            }
            return $this->redirect('careers');
        } else {
            return $this->render('careers', [
                        'model' => $model,
                        'careers' => $careers,
            ]);
        }
    }

    /**
     * Displays summary view page.
     *
     * @return mixed
     */
    public function actionSummary() {
        $session = Yii::$app->session;
        $lang_id = $session['language_id'];
        $categories = ProjectCategory::find()->where(['lang_id' => $lang_id])->all();
        $projects = Projects::find()->Where(['lang_id' => $lang_id])->all();
        return $this->renderPartial('summary', [
                    'projects' => $projects,
                    'categories' => $categories,
        ]);
    }

    /**
     * Displays contact page.
     *
     * @return mixed
     */
    public function actionContact() {
        $model = new Contact();
        $social_media = SocialMedia::find()->all();
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            Yii::$app->session->setFlash('success', 'Thank you for contacting us. We will respond to you as soon as possible.');
            return $this->redirect(['/contact']);
        } else {
            return $this->render('contact', [
                        'model' => $model,
                        'social_media' => $social_media[0],
            ]);
        }
    }

    /**
     * Logs in a user.
     *
     * @return mixed
     */
    public function actionLogin() {
        if (!\Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            return $this->render('login', [
                        'model' => $model,
            ]);
        }
    }

    /**
     * Logs out the current user.
     *
     * @return mixed
     */
    public function actionLogout() {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Signs user up.
     *
     * @return mixed
     */
    public function actionSignup() {
        $model = new SignupForm();

        if ($model->load(Yii::$app->request->post())) {
            $post = Yii::$app->request->post();

            if (isset($mode->username)) {
                $model->username = $model->username;
            } else {
                $email = $model->email;
                $username = explode("@", $model->email);
                $model->username = $username[0];
            }

            if (isset($model->password)) {
                $model->password = $model->password;
            } else {
                $email = $model->email;
                $password = explode("@", $model->email);
                $model->password = $password[0];
            }

            if ($user = $model->signup()) {
                if (Yii::$app->getUser()->login($user)) {
                    return $this->redirect('/profile');
                }
            }
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
    public function actionRequestPasswordReset() {
        $model = new PasswordResetRequestForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', 'Check your email for further instructions.');

                return $this->goHome();
            } else {
                Yii::$app->session->setFlash('error', 'Sorry, we are unable to reset password for email provided.');
            }
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
    public function actionResetPassword($token) {
        try {
            $model = new ResetPasswordForm($token);
        } catch (InvalidParamException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }

        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->resetPassword()) {
            Yii::$app->session->setFlash('success', 'New password was saved.');

            return $this->goHome();
        }

        return $this->render('resetPassword', [
                    'model' => $model,
        ]);
    }

}
