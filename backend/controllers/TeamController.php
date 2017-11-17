<?php

namespace backend\controllers;

use Yii;
use backend\models\Team;
use backend\models\TeamSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\models\UploadForm;
use yii\web\UploadedFile;
use yii\imagine\Image;
use Imagine\Image\Box;
use Imagine\Image\Point;


/**
 * TeamController implements the CRUD actions for Team model.
 */
class TeamController extends Controller {

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
     * Lists all Team models.
     * @return mixed
     */
    public function actionIndex() {
        $searchModel = new TeamSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
                    'searchModel' => $searchModel,
                    'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Team model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id) {
        return $this->render('view', [
                    'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Team model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate() {
        $model = new Team();

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
                $model->path = $model->path->saveAs( $full_path =  dirname(__FILE__) . '/../../' . "/frontend/web/images/team/" . $path1 = Yii::$app->security->generateRandomString() . '.' . $model->path->extension);
                Image::frame($full_path)
                        ->resize(new Box(236, 240))
                        ->save(dirname(__FILE__) . '/../../' . "/frontend/web/images/team_236x240/" . $path1, ['quality' => 80]);
                $model->path = $path1;
            } else {
                $model->path = NULL;
            }



            if ($model->save()) {
                Yii::$app->session->setFlash('success', 'Team member successfully created ');
            } else {
                if (isset($path)) {
                    unlink(dirname(__FILE__) . '/../../' . "/frontend/web/images/team/" . $path);
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
     * Updates an existing Team model.
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
                $model->path = $model->path->saveAs( $full_path = dirname(__FILE__) . '/../../' . "/frontend/web/images/team/" . $image1 = Yii::$app->security->generateRandomString() . '.' . $model->path->extension);
                Image::frame($full_path)
                        ->resize(new Box(236, 240))
                        ->save(dirname(__FILE__) . '/../../' . "/frontend/web/images/team_236x240/" . $image1, ['quality' => 80]);
                $model->path = $image1;
            }

            if ($model->save()) {
                Yii::$app->session->setFlash('success', 'Team member successfully Edited ');
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
     * Deletes an existing Team model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id) {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Team model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Team the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id) {
        if (($model = Team::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

}
