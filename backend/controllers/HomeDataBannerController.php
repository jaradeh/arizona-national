<?php

namespace backend\controllers;

use Yii;
use backend\models\HomeDataBanner;
use backend\models\HomeDataBannerSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\models\UploadForm;
use yii\web\UploadedFile;

/**
 * HomeDataBannerController implements the CRUD actions for HomeDataBanner model.
 */
class HomeDataBannerController extends Controller {

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
     * Lists all HomeDataBanner models.
     * @return mixed
     */
    public function actionIndex() {
        $searchModel = new HomeDataBannerSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
                    'searchModel' => $searchModel,
                    'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single HomeDataBanner model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id) {
        return $this->render('view', [
                    'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new HomeDataBanner model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate() {
        $model = new HomeDataBanner();

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            $post = Yii::$app->request->post();

            function manageImage($image) {
                $image_extention = $image->extension;
                if ($image_extention == "jpg" || $image_extention == "jpeg" || $image_extention == "png") {
                    if ($image->saveAs($full_path = dirname(__FILE__) . '/../../' . "/frontend/web/images/home_data_banner_images/" . $path = $image->baseName . "_" . Yii::$app->security->generateRandomString() . '.' . $image->extension)) {
                        return $path;
                    } else {
                        return "error";
                    }
                } else {
                    return "not image";
                }
            }

            $path = $model->icon_1 = UploadedFile::getInstance($model, "icon_1");
            $path_1 = $model->icon_2 = UploadedFile::getInstance($model, "icon_2");
            $path_2 = $model->icon_3 = UploadedFile::getInstance($model, "icon_3");
            $path_3 = $model->icon_4 = UploadedFile::getInstance($model, "icon_4");

            if (($model->icon_1)) {
                $manage_image = manageImage($model->icon_1);
                if ($manage_image == "not image") {
                    Yii::$app->session->setFlash('error', 'Icon 1 must be image (jpg or jpeg or png');
                    return $this->redirect(['home-data-banner/create']);
                } else if ($manage_image == "error") {
                    Yii::$app->session->setFlash('error', 'Something went wrong, could not upload icon 1 ');
                    return $this->redirect(['home-data-banner/create']);
                } else {
                    $model->icon_1 = $manage_image;
                    Yii::$app->session->setFlash('success', 'icon 1 successfully uploaded!');
                }
            } else {
                Yii::$app->session->setFlash('error', 'icon 1 cannot be empty!');
                return $this->redirect(['home-data-banner/create']);
            }

            if (($model->icon_2)) {
                $manage_image = manageImage($model->icon_2);
                if ($manage_image == "not image") {
                    Yii::$app->session->setFlash('error', 'Icon 2 must be image (jpg or jpeg or png');
                    return $this->redirect(['home-data-banner/create']);
                } else if ($manage_image == "error") {
                    Yii::$app->session->setFlash('error', 'Something went wrong, could not upload icon 2 ');
                    return $this->redirect(['home-data-banner/create']);
                } else {
                    $model->icon_2 = $manage_image;
                    Yii::$app->session->setFlash('success', 'icon 2 successfully uploaded!');
                }
            } else {
                Yii::$app->session->setFlash('error', 'icon 2 cannot be empty!');
                return $this->redirect(['home-data-banner/create']);
            }

            if (($model->icon_3)) {
                $manage_image = manageImage($model->icon_3);
                if ($manage_image == "not image") {
                    Yii::$app->session->setFlash('error', 'Icon 3 must be image (jpg or jpeg or png');
                    return $this->redirect(['home-data-banner/create']);
                } else if ($manage_image == "error") {
                    Yii::$app->session->setFlash('error', 'Something went wrong, could not upload icon 3 ');
                    return $this->redirect(['home-data-banner/create']);
                } else {
                    $model->icon_3 = $manage_image;
                    Yii::$app->session->setFlash('success', 'icon 2 successfully uploaded!');
                }
            } else {
                Yii::$app->session->setFlash('error', 'icon 2 cannot be empty!');
                return $this->redirect(['home-data-banner/create']);
            }

            if (($model->icon_4)) {
                $manage_image = manageImage($model->icon_4);
                if ($manage_image == "not image") {
                    Yii::$app->session->setFlash('error', 'Icon 4 must be image (jpg or jpeg or png');
                    return $this->redirect(['home-data-banner/create']);
                } else if ($manage_image == "error") {
                    Yii::$app->session->setFlash('error', 'Something went wrong, could not upload icon 4 ');
                    return $this->redirect(['home-data-banner/create']);
                } else {
                    $model->icon_4 = $manage_image;
                    Yii::$app->session->setFlash('success', 'icon 4 successfully uploaded!');
                }
            } else {
                Yii::$app->session->setFlash('error', 'icon 2 cannot be empty!');
                return $this->redirect(['home-data-banner/create']);
            }



            if ($model->save()) {
                Yii::$app->session->setFlash('success', 'You have successfully created a new home info banner.');
                return $this->redirect(['home-data-banner/create']);
            } else {
                Yii::$app->session->setFlash('error', 'Something went wrong');
                return $this->redirect(['home-data-banner/create']);
            }
        } else {
            return $this->render('create', [
                        'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing HomeDataBanner model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id) {
        $model = $this->findModel($id);

        $old_image_1 = $model->icon_1;
        $old_image_2 = $model->icon_2;
        $old_image_3 = $model->icon_3;
        $old_image_4 = $model->icon_4;

        if ($model->load(Yii::$app->request->post())) {
            $post = Yii::$app->request->post();

            function manageImage($image) {
                $image_extention = $image->extension;
                if ($image_extention == "jpg" || $image_extention == "jpeg" || $image_extention == "png") {
                    if ($image->saveAs($full_path = dirname(__FILE__) . '/../../' . "/frontend/web/images/home_data_banner_images/" . $path = $image->baseName . "_" . Yii::$app->security->generateRandomString() . '.' . $image->extension)) {
                        return $path;
                    } else {
                        return "error";
                    }
                } else {
                    return "not image";
                }
            }

            $model->icon_1 = UploadedFile::getInstance($model, "icon_1");
            $model->icon_2 = UploadedFile::getInstance($model, "icon_2");
            $model->icon_3 = UploadedFile::getInstance($model, "icon_3");
            $model->icon_4 = UploadedFile::getInstance($model, "icon_4");


            if (isset($model->icon_1)) {
                $manage_image = manageImage($model->icon_1);
                if ($manage_image == "not image") {
                    Yii::$app->session->setFlash('error', 'icon 1 must be image (jpg or jpeg or png');
                    return $this->redirect(['home-data-banner/update?id=' . $model->id]);
                } else if ($manage_image == "error") {
                    Yii::$app->session->setFlash('error', 'Something went wrong, could not upload images');
                    return $this->redirect(['home-data-banner/update?id=' . $model->id]);
                } else {
                    $model->icon_1 = $manage_image;
                }
            } else {
                $model->icon_1 = $old_image_1;
            }


            if (isset($model->icon_2)) {
                $manage_image = manageImage($model->icon_2);
                if ($manage_image == "not image") {
                    Yii::$app->session->setFlash('error', 'icon 2 must be image (jpg or jpeg or png');
                    return $this->redirect(['home-data-banner/update?id=' . $model->id]);
                } else if ($manage_image == "error") {
                    Yii::$app->session->setFlash('error', 'Something went wrong, could not upload images');
                    return $this->redirect(['home-data-banner/update?id=' . $model->id]);
                } else {
                    $model->icon_2 = $manage_image;
                }
            } else {
                $model->icon_2 = $old_image_2;
            }



            if (isset($model->icon_3)) {
                $manage_image = manageImage($model->icon_3);
                if ($manage_image == "not image") {
                    Yii::$app->session->setFlash('error', 'icon 3 must be image (jpg or jpeg or png');
                    return $this->redirect(['home-data-banner/update?id=' . $model->id]);
                } else if ($manage_image == "error") {
                    Yii::$app->session->setFlash('error', 'Something went wrong, could not upload images');
                    return $this->redirect(['home-data-banner/update?id=' . $model->id]);
                } else {
                    $model->icon_3 = $manage_image;
                }
            } else {
                $model->icon_3 = $old_image_3;
            }


            if (isset($model->icon_4)) {
                $manage_image = manageImage($model->icon_4);
                if ($manage_image == "not image") {
                    Yii::$app->session->setFlash('error', 'icon 4 must be image (jpg or jpeg or png');
                    return $this->redirect(['home-data-banner/update?id=' . $model->id]);
                } else if ($manage_image == "error") {
                    Yii::$app->session->setFlash('error', 'Something went wrong, could not upload images');
                    return $this->redirect(['home-data-banner/update?id=' . $model->id]);
                } else {
                    $model->icon_4 = $manage_image;
                }
            } else {
                $model->icon_4 = $old_image_4;
            }


            if ($model->save()) {
                Yii::$app->session->setFlash('success', 'Item information updated');
            } else {
                Yii::$app->session->setFlash('error', 'Something went wrong');
            }
            return $this->redirect(['home-data-banner/update?id=' . $model->id]);
        } else {
            return $this->render('update', [
                        'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing HomeDataBanner model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id) {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the HomeDataBanner model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return HomeDataBanner the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id) {
        if (($model = HomeDataBanner::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

}
