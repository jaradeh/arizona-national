<?php

namespace frontend\controllers;

use Yii;
use backend\models\Resume;
use backend\models\ResumeSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use backend\models\Careers;
use app\models\UploadForm;
use yii\web\UploadedFile;

/**
 * ResumeController implements the CRUD actions for Resume model.
 */
class ResumeController extends Controller {

    /**
     * @inheritdoc
     */
    public function behaviors() {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    public function init() {
        parent::init();
        $session = Yii::$app->session;
        if ($session['language'] == "" || empty($session['language'])) {
            $session['language'] = "en-US";
            $session['language_id'] = "1";
        }
        Yii::$app->language = $session['language'];
    }

    /**
     * Lists all Resume models.
     * @return mixed
     */
    public function actionIndex() {
        $searchModel = new ResumeSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
                    'searchModel' => $searchModel,
                    'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Resume model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id) {
        return $this->render('view', [
                    'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Resume model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate() {
        $model = new Resume();

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            $post = Yii::$app->request->post();

            function manageImage($image) {
                $image_extention = $image->extension;
                if ($image_extention == "pdf" || $image_extention == "PDF") {
                    if ($image->saveAs($full_path = dirname(__FILE__) . '/../../' . "/frontend/web/images/resume/" . $path = $image->baseName . "_" . Yii::$app->security->generateRandomString() . '.' . $image->extension)) {
                        return $path;
                    } else {
                        return "error";
                    }
                } else {
                    return "not pdf";
                }
            }

            $path = $model->path = UploadedFile::getInstance($model, "path");

            if (($model->path)) {
                $manage_image = manageImage($model->path);
                if ($manage_image == "not pdf") {
                    Yii::$app->session->setFlash('error', yii::t('app', 'Resume must be image (PDF) file'));
                    return $this->redirect(['/resume/create']);
                } else if ($manage_image == "error") {
                    Yii::$app->session->setFlash('error', yii::t('app', 'Something went wrong, could not upload Resume'));
                    return $this->redirect(['/resume/create']);
                } else {
                    $model->path = $manage_image;
                    Yii::$app->session->setFlash('success', yii::t('app', 'Resume successfully uploaded!'));
                }
            } else {
                $model->path = "empty";
            }



            if ($model->date_of_birth == "" || empty($model->date_of_birth)) {
                $model->date_of_birth = NULL;
            } else {
                $date_of_birth = $model->date_of_birth;
                $date = explode("-", $date_of_birth);
                $year = $date[0];
                $month = $date[1];
                $day = $date[2];
                $end_date_stamp = strtotime($month . "/" . $day . "/" . $year);
                $model->date_of_birth = $end_date_stamp . "";
            }

            if ($model->when_can_you_start == "" || empty($model->when_can_you_start)) {
                $model->when_can_you_start = NULL;
            } else {
                $when_can_you_start = $model->when_can_you_start;
                $date = explode("-", $when_can_you_start);
                $year = $date[0];
                $month = $date[1];
                $day = $date[2];
                $end_date_stamp = strtotime($month . "/" . $day . "/" . $year);
                $model->when_can_you_start = $end_date_stamp . "";
            }

            if ($model->apply_before_date == "" || empty($model->apply_before_date)) {
                $model->apply_before_date = NULL;
            } else {
                $apply_before_date = $model->apply_before_date;
                $date = explode("-", $apply_before_date);
                $year = $date[0];
                $month = $date[1];
                $day = $date[2];
                $end_date_stamp = strtotime($month . "/" . $day . "/" . $year);
                $model->apply_before_date = $end_date_stamp . "";
            }

            if ($model->expiry_date == "" || empty($model->expiry_date)) {
                $model->expiry_date = NULL;
            } else {
                $expiry_date = $model->expiry_date;
                $date = explode("-", $expiry_date);
                $year = $date[0];
                $month = $date[1];
                $day = $date[2];
                $end_date_stamp = strtotime($month . "/" . $day . "/" . $year);
                $model->expiry_date = $end_date_stamp . "";
            }

            if (!empty($model->apply_before_date) && $model->apply_before_date != "") {
                $model->apply_before_date = $model->apply_before_date;
            } else {
                $model->apply_before_date = "empty";
            }

            if ($model->validate() && $model->save()) {
                Yii::$app->session->setFlash('success', yii::t('app', 'You have successfully sent your resume, we will get back to you asap!'));
                return $this->redirect(['/resume/create']);
            } else {
                Yii::$app->session->setFlash('error', yii::t('app', 'Something went wrong!'));
                return $this->redirect(['/resume/create']);
            }
        } else {
            return $this->render('create', [
                        'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Resume model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id) {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                        'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Resume model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id) {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Resume model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Resume the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id) {
        if (($model = Resume::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

}
