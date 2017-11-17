<?php

namespace backend\controllers;

use Yii;
use backend\models\Projects;
use backend\models\ProjectsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use backend\models\ProjectImages;
use app\models\UploadForm;
use yii\web\UploadedFile;
use yii\imagine\Image;
use Imagine\Image\Box;
use Imagine\Image\Point;

/**
 * ProjectsController implements the CRUD actions for Projects model.
 */
class ProjectsController extends Controller {

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
     * Lists all Projects models.
     * @return mixed
     */
    public function actionIndex() {
        $searchModel = new ProjectsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
                    'searchModel' => $searchModel,
                    'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Projects model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id) {
        return $this->render('view', [
                    'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Projects model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate() {
        $model = new Projects();
        $model2 = new ProjectImages();
        $old_model_id = Projects::find()->one();
        if (sizeof($old_model_id) < 1) {
            $project_id_for_images = 1;
        } else {
            $project_id_for_images = (int) $old_model_id->id + 1;
        }
        if ($model->load(Yii::$app->request->post())) {
            $post = Yii::$app->request->post();

//            if (!$model->validate()) {
//                Yii::$app->session->setFlash('error', 'Cannot add more item, Please make sure you fill all the form and upload the featured image!');
//                return $this->redirect(['create']);
//            }

            function manageImage($image) {
                $image_extention = $image->extension;
                if ($image_extention == "jpg" || $image_extention == "jpeg" || $image_extention == "png") {
                    if ($image->saveAs($full_path = dirname(__FILE__) . '/../../' . "/frontend/web/images/projects/" . $path = time() . "_" . Yii::$app->security->generateRandomString() . '.' . $image->extension)) {

                        Image::frame($full_path)
                                ->resize(new Box(145, 105))
                                ->save(dirname(__FILE__) . '/../../' . "/frontend/web/images/projects_145x105/" . $path, ['quality' => 80]);

                        Image::frame($full_path)
                                ->resize(new Box(200, 155))
                                ->save(dirname(__FILE__) . '/../../' . "/frontend/web/images/projects_200x155/" . $path, ['quality' => 80]);

                        Image::frame($full_path)
                                ->resize(new Box(224, 114))
                                ->save(dirname(__FILE__) . '/../../' . "/frontend/web/images/projects_224x114/" . $path, ['quality' => 80]);

                        Image::frame($full_path)
                                ->resize(new Box(224, 116))
                                ->save(dirname(__FILE__) . '/../../' . "/frontend/web/images/projects_224x116/" . $path, ['quality' => 80]);

                        return $path;
                    } else {
                        return "error";
                    }
                } else {
                    return "not image";
                }
            }

            $path = $model->path = UploadedFile::getInstance($model, "path");
            $path_icon_1 = $model->banner_icon_1 = UploadedFile::getInstance($model, "banner_icon_1");
            $path_icon_2 = $model->banner_icon_2 = UploadedFile::getInstance($model, "banner_icon_2");
            $path_icon_3 = $model->banner_icon_3 = UploadedFile::getInstance($model, "banner_icon_3");
            $path_icon_4 = $model->banner_icon_4 = UploadedFile::getInstance($model, "banner_icon_4");



            $image = $model2->image = UploadedFile::getInstances($model2, 'image');
//            die(sizeof($image) . "lol");
            $array = "";
            $error_1 = "";
            $size_of_images = sizeof($image);
            for ($i = 0; $i < $size_of_images; $i++) {
                $upload_image = $image[$i];
                $manage_image = manageImage($upload_image);
                if ($manage_image == "not image") {
                    Yii::$app->session->setFlash('error', $image[$i] . ' Not Image');
                } else if ($manage_image == "error") {
                    Yii::$app->session->setFlash('error', $image[$i] . ' Error');
                } else {
                    $model2->project_id = $project_id_for_images;
                    $new_image = $model2->image = $manage_image;
                    $save_into_images = Yii::$app->db->createCommand('INSERT INTO project_images (project_id,image)
				VALUES (
				"' . $project_id_for_images . '",
				"' . $new_image . '")')
                            ->execute();
                }
            }











            if (($model->path)) {
                $manage_image = manageImage($model->path);
                if ($manage_image == "not image") {
                    Yii::$app->session->setFlash('error', 'images must be image (jpg or jpeg or png');
                    return $this->redirect(['projects/create']);
                } else if ($manage_image == "error") {
                    Yii::$app->session->setFlash('error', 'Something went wrong, could not upload images');
                    return $this->redirect(['projects/create']);
                } else {
                    $model->path = $manage_image;
                    Yii::$app->session->setFlash('success', 'image successfully uploaded!');
                }
            } else {
                Yii::$app->session->setFlash('error', 'image cannot be empty!');
                return $this->redirect(['projects/create']);
            }


            if (($model->banner_icon_1)) {
                $manage_image = manageImage($model->banner_icon_1);
                if ($manage_image == "not image") {
                    Yii::$app->session->setFlash('error', 'images must be image (jpg or jpeg or png');
                    return $this->redirect(['projects/create']);
                } else if ($manage_image == "error") {
                    Yii::$app->session->setFlash('error', 'Something went wrong, could not upload images');
                    return $this->redirect(['projects/create']);
                } else {
                    $model->banner_icon_1 = $manage_image;
                    Yii::$app->session->setFlash('success', 'image successfully uploaded!');
                }
            } else {
                Yii::$app->session->setFlash('error', 'image cannot be empty!');
                return $this->redirect(['projects/create']);
            }

            if (($model->banner_icon_2)) {
                $manage_image = manageImage($model->banner_icon_2);
                if ($manage_image == "not image") {
                    Yii::$app->session->setFlash('error', 'images must be image (jpg or jpeg or png');
                    return $this->redirect(['projects/create']);
                } else if ($manage_image == "error") {
                    Yii::$app->session->setFlash('error', 'Something went wrong, could not upload images');
                    return $this->redirect(['projects/create']);
                } else {
                    $model->banner_icon_2 = $manage_image;
                    Yii::$app->session->setFlash('success', 'image successfully uploaded!');
                }
            } else {
                Yii::$app->session->setFlash('error', 'image cannot be empty!');
                return $this->redirect(['projects/create']);
            }


            if (($model->banner_icon_3)) {
                $manage_image = manageImage($model->banner_icon_3);
                if ($manage_image == "not image") {
                    Yii::$app->session->setFlash('error', 'images must be image (jpg or jpeg or png');
                    return $this->redirect(['projects/create']);
                } else if ($manage_image == "error") {
                    Yii::$app->session->setFlash('error', 'Something went wrong, could not upload images');
                    return $this->redirect(['projects/create']);
                } else {
                    $model->banner_icon_3 = $manage_image;
                    Yii::$app->session->setFlash('success', 'image successfully uploaded!');
                }
            } else {
                Yii::$app->session->setFlash('error', 'image cannot be empty!');
                return $this->redirect(['projects/create']);
            }




            if (($model->banner_icon_4)) {
                $manage_image = manageImage($model->banner_icon_4);
                if ($manage_image == "not image") {
                    Yii::$app->session->setFlash('error', 'images must be image (jpg or jpeg or png');
                    return $this->redirect(['projects/create']);
                } else if ($manage_image == "error") {
                    Yii::$app->session->setFlash('error', 'Something went wrong, could not upload images');
                    return $this->redirect(['projects/create']);
                } else {
                    $model->banner_icon_4 = $manage_image;
                    Yii::$app->session->setFlash('success', 'image successfully uploaded!');
                }
            } else {
                Yii::$app->session->setFlash('error', 'image cannot be empty!');
                return $this->redirect(['projects/create']);
            }


            if ($model->save()) {
                Yii::$app->session->setFlash('success', 'You have successfully created a new project.');
                return $this->redirect(['projects/create']);
            } else {
                Yii::$app->session->setFlash('error', 'Something went wrong');
                return $this->redirect(['projects/create']);
            }
        } else {
            return $this->render('create', [
                        'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Projects model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id) {
        $model = $this->findModel($id);
        $old_image = $model->path;
        $old_image_1 = $model->banner_icon_1;
        $old_image_2 = $model->banner_icon_2;
        $old_image_3 = $model->banner_icon_3;
        $old_image_4 = $model->banner_icon_4;
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {

            function manageImage($image) {
                $image_extention = $image->extension;
                if ($image_extention == "jpg" || $image_extention == "jpeg" || $image_extention == "png") {
                    if ($image->saveAs($full_path = dirname(__FILE__) . '/../../' . "/frontend/web/images/projects/" . $path = $image->baseName . "_" . Yii::$app->security->generateRandomString() . '.' . $image->extension)) {

                        Image::frame($full_path)
                                ->resize(new Box(145, 105))
                                ->save(dirname(__FILE__) . '/../../' . "/frontend/web/images/projects_145x105/" . $path, ['quality' => 80]);

                        Image::frame($full_path)
                                ->resize(new Box(200, 155))
                                ->save(dirname(__FILE__) . '/../../' . "/frontend/web/images/projects_200x155/" . $path, ['quality' => 80]);

                        Image::frame($full_path)
                                ->resize(new Box(224, 114))
                                ->save(dirname(__FILE__) . '/../../' . "/frontend/web/images/projects_224x114/" . $path, ['quality' => 80]);

                        Image::frame($full_path)
                                ->resize(new Box(224, 116))
                                ->save(dirname(__FILE__) . '/../../' . "/frontend/web/images/projects_224x116/" . $path, ['quality' => 80]);

                        return $path;
                    } else {
                        return "error";
                    }
                } else {
                    return "not image";
                }
            }

            $model->path = UploadedFile::getInstance($model, 'path');
            $model->banner_icon_1 = UploadedFile::getInstance($model, 'banner_icon_1');
            $model->banner_icon_2 = UploadedFile::getInstance($model, 'banner_icon_2');
            $model->banner_icon_3 = UploadedFile::getInstance($model, 'banner_icon_3');
            $model->banner_icon_4 = UploadedFile::getInstance($model, 'banner_icon_4');

            if (isset($model->path)) {
                $manage_image = manageImage($model->path);
                if ($manage_image == "not image") {
                    Yii::$app->session->setFlash('error', 'image must be image (jpg or jpeg or png');
                    return $this->redirect(['projects/update/' . $model->id]);
                } else if ($manage_image == "error") {
                    Yii::$app->session->setFlash('error', 'Something went wrong, could not upload images');
                    return $this->redirect(['projects/update/' . $model->id]);
                } else {
                    $model->path = $manage_image;
                }
            } else {
                $model->path = $old_image;
            }

            if (isset($model->banner_icon_1)) {
                $manage_image = manageImage($model->banner_icon_1);
                if ($manage_image == "not image") {
                    Yii::$app->session->setFlash('error', 'image must be image (jpg or jpeg or png');
                    return $this->redirect(['projects/update/' . $model->id]);
                } else if ($manage_image == "error") {
                    Yii::$app->session->setFlash('error', 'Something went wrong, could not upload images');
                    return $this->redirect(['projects/update/' . $model->id]);
                } else {
                    $model->banner_icon_1 = $manage_image;
                }
            } else {
                $model->banner_icon_1 = $old_image_1;
            }

            if (isset($model->banner_icon_2)) {
                $manage_image = manageImage($model->banner_icon_2);
                if ($manage_image == "not image") {
                    Yii::$app->session->setFlash('error', 'image must be image (jpg or jpeg or png');
                    return $this->redirect(['projects/update/' . $model->id]);
                } else if ($manage_image == "error") {
                    Yii::$app->session->setFlash('error', 'Something went wrong, could not upload images');
                    return $this->redirect(['projects/update/' . $model->id]);
                } else {
                    $model->banner_icon_2 = $manage_image;
                }
            } else {
                $model->banner_icon_2 = $old_image_2;
            }

            if (isset($model->banner_icon_3)) {
                $manage_image = manageImage($model->banner_icon_3);
                if ($manage_image == "not image") {
                    Yii::$app->session->setFlash('error', 'image must be image (jpg or jpeg or png');
                    return $this->redirect(['projects/update/' . $model->id]);
                } else if ($manage_image == "error") {
                    Yii::$app->session->setFlash('error', 'Something went wrong, could not upload images');
                    return $this->redirect(['projects/update/' . $model->id]);
                } else {
                    $model->banner_icon_3 = $manage_image;
                }
            } else {
                $model->banner_icon_3 = $old_image_3;
            }

            if (isset($model->banner_icon_4)) {
                $manage_image = manageImage($model->banner_icon_4);
                if ($manage_image == "not image") {
                    Yii::$app->session->setFlash('error', 'image must be image (jpg or jpeg or png');
                    return $this->redirect(['projects/update/' . $model->id]);
                } else if ($manage_image == "error") {
                    Yii::$app->session->setFlash('error', 'Something went wrong, could not upload images');
                    return $this->redirect(['projects/update/' . $model->id]);
                } else {
                    $model->banner_icon_4 = $manage_image;
                }
            } else {
                $model->banner_icon_4 = $old_image_4;
            }


            if ($model->save()) {
                Yii::$app->session->setFlash('success', 'Project successfully Edited ');
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
     * Deletes an existing Projects model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id) {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Projects model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Projects the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id) {
        if (($model = Projects::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

}
