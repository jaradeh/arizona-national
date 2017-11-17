<?php

namespace backend\controllers;

use Yii;
use backend\models\SisterCompany;
use backend\models\SisterCompanySearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\models\UploadForm;
use yii\web\UploadedFile;

/**
 * SisterCompanyController implements the CRUD actions for SisterCompany model.
 */
class SisterCompanyController extends Controller {

    public function behaviors() {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all SisterCompany models.
     * @return mixed
     */
    public function actionIndex() {
        $searchModel = new SisterCompanySearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
                    'searchModel' => $searchModel,
                    'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single SisterCompany model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id) {
        return $this->render('view', [
                    'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new SisterCompany model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate() {
        $model = new SisterCompany();

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            $post = Yii::$app->request->post();

            $path = $model->path = UploadedFile::getInstance($model, "path");
            if (!empty($model->path)) {
                $path_extention = $model->path->extension;
                if ($path_extention == "jpg" || $path_extention == "jpeg" || $path_extention == "png") {
                    
                } else {
                    Yii::$app->session->setFlash('error', 'Images must be PNG, JPG or JPEG');
                    return $this->refresh();
                }
            }

            if ($model->path != "" || !empty($model->path)) {
                $model->path = $model->path->saveAs(dirname(__FILE__) . '/../../' . "/frontend/web/images/sister_company/" . $path1 = Yii::$app->security->generateRandomString() . '.' . $model->path->extension);
                $model->path = $path1;
            } else {
                $model->path = NULL;
            }



            if ($model->save()) {
                Yii::$app->session->setFlash('success', 'Sister Company Profile successfully created ');
            } else {
                if (isset($path)) {
                    unlink(dirname(__FILE__) . '/../../' . "/frontend/web/images/sister_company/" . $path);
                }

                Yii::$app->session->setFlash('error', 'Did not save, Please fill all the fields and make sure to upload correct images');
            }

            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                        'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing SisterCompany model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id) {
        $model = $this->findModel($id);
        $old_image = $model->path;
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {


            $model->path = UploadedFile::getInstance($model, 'path');
            if (empty($model->path)) {
                $model->path = $old_image;
            } else {
                $model->path = $model->path->saveAs(dirname(__FILE__) . '/../../' . "/frontend/web/images/sister_company/" . $image1 = Yii::$app->security->generateRandomString() . '.' . $model->path->extension);
                $model->path = $image1;
            }

            if ($model->save()) {
                Yii::$app->session->setFlash('success', 'Sister Company Profile successfully Edited ');
            } else {
                Yii::$app->session->setFlash('error', 'Did not save, Please fill all the fields and make sure to upload correct images');
            }

            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                        'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing SisterCompany model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id) {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the SisterCompany model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return SisterCompany the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id) {
        if (($model = SisterCompany::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

}
