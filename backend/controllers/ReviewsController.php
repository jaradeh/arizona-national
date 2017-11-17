<?php

namespace backend\controllers;

use Yii;
use backend\models\Reviews;
use backend\models\ReviewsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\models\UploadForm;
use yii\web\UploadedFile;
use yii\imagine\Image;
use Imagine\Image\Box;
use Imagine\Image\Point;

/**
 * ReviewsController implements the CRUD actions for Reviews model.
 */
class ReviewsController extends Controller {

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

    /**
     * Lists all Reviews models.
     * @return mixed
     */
    public function actionIndex() {
        $searchModel = new ReviewsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
                    'searchModel' => $searchModel,
                    'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Reviews model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id) {
        return $this->render('view', [
                    'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Reviews model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate() {
        $model = new Reviews();

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            $post = Yii::$app->request->post();

            if (!$model->validate()) {
                Yii::$app->session->setFlash('error', 'Cannot add more item, Please make sure you fill all the form and upload the featured image!');
                return $this->redirect(['create']);
            }

            function manageImage($image) {
                $image_extention = $image->extension;
                if ($image_extention == "jpg" || $image_extention == "jpeg" || $image_extention == "png") {
                    if ($image->saveAs($full_path = dirname(__FILE__) . '/../../' . "/frontend/web/images/review/" . $path = $image->baseName . "_" . Yii::$app->security->generateRandomString() . '.' . $image->extension)) {

                        Image::frame($full_path)
                                ->resize(new Box(80, 80))
                                ->save(dirname(__FILE__) . '/../../' . "/frontend/web/images/review_80x80/" . $path, ['quality' => 80]);


                        return $path;
                    } else {
                        return "error";
                    }
                } else {
                    return "not image";
                }
            }

            $path = $model->path = UploadedFile::getInstance($model, "path");


            if (($model->path)) {
                $manage_image = manageImage($model->path);
                if ($manage_image == "not image") {
                    Yii::$app->session->setFlash('error', 'images must be image (jpg or jpeg or png');
                    return $this->redirect(['reviews/create']);
                } else if ($manage_image == "error") {
                    Yii::$app->session->setFlash('error', 'Something went wrong, could not upload images');
                    return $this->redirect(['reviews/create']);
                } else {
                    $model->path = $manage_image;
                    Yii::$app->session->setFlash('success', 'image successfully uploaded!');
                }
            } else {
                Yii::$app->session->setFlash('error', 'image cannot be empty!');
                return $this->redirect(['reviews/create']);
            }




            if ($model->save()) {
                Yii::$app->session->setFlash('success', 'You have successfully created a new review.');
                return $this->redirect(['reviews/create']);
            } else {
                Yii::$app->session->setFlash('error', 'Something went wrong');
                return $this->redirect(['reviews/create']);
            }
        } else {
            return $this->render('create', [
                        'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Reviews model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id) {
        $model = $this->findModel($id);
        $old_image = $model->path;
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {

            function manageImage($image) {
                $image_extention = $image->extension;
                if ($image_extention == "jpg" || $image_extention == "jpeg" || $image_extention == "png") {
                    if ($image->saveAs($full_path = dirname(__FILE__) . '/../../' . "/frontend/web/images/review/" . $path = $image->baseName . "_" . Yii::$app->security->generateRandomString() . '.' . $image->extension)) {

                        Image::frame($full_path)
                                ->resize(new Box(80, 80))
                                ->save(dirname(__FILE__) . '/../../' . "/frontend/web/images/review_80x80/" . $path, ['quality' => 80]);

                        return $path;
                    } else {
                        return "error";
                    }
                } else {
                    return "not image";
                }
            }

            $model->path = UploadedFile::getInstance($model, 'path');

            if (isset($model->path)) {
                $manage_image = manageImage($model->path);
                if ($manage_image == "not image") {
                    Yii::$app->session->setFlash('error', 'image must be image (jpg or jpeg or png');
                    return $this->redirect(['reviews/update/' . $model->id]);
                } else if ($manage_image == "error") {
                    Yii::$app->session->setFlash('error', 'Something went wrong, could not upload images');
                    return $this->redirect(['reviews/update/' . $model->id]);
                } else {
                    $model->path = $manage_image;
                }
            } else {
                $model->path = $old_image;
            }


            if ($model->save()) {
                Yii::$app->session->setFlash('success', 'Review successfully Edited ');
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
     * Deletes an existing Reviews model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id) {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Reviews model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Reviews the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id) {
        if (($model = Reviews::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

}
