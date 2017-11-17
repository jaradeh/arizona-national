<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use backend\models\ProjectCategory;
use backend\models\ProjectImages;

$counter = 1;
$model2 = new ProjectImages;

/* @var $this yii\web\View */
/* @var $model backend\models\Projects */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="projects-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>



    <small style="color:red;">Images size : 768px x 408px</small><?= $form->field($model, 'path')->fileInput(['maxlength' => true]) ?>

    <small style="color:red;">Multi files, Images size : 768px x 408px</small><?= $form->field($model2, 'image[]')->fileInput(['multiple' => true, 'accept' => 'image/*']) ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textarea(['maxlength' => true]) ?>

    <?= $form->field($model, 'project_info_title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'project_info')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'project_challenge_title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'project_challenge')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'what_we_did_title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'what_we_did')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'result_title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'result')->textInput(['maxlength' => true]) ?>

    <small style="color:red;">Image size : 60px x 88px</small><?= $form->field($model, 'banner_icon_1')->fileInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'banner_name_1')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'banner_title_1')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'banner_number_1')->textInput(['maxlength' => true]) ?>

    <small style="color:red;">Image size : 60px x 88px</small><?= $form->field($model, 'banner_icon_2')->fileInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'banner_name_2')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'banner_title_2')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'banner_number_2')->textInput(['maxlength' => true]) ?>

    <small style="color:red;">Image size : 60px x 88px</small><?= $form->field($model, 'banner_icon_3')->fileInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'banner_name_3')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'banner_title_3')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'banner_number_3')->textInput(['maxlength' => true]) ?>

    <small style="color:red;">Image size : 60px x 88px</small><?= $form->field($model, 'banner_icon_4')->fileInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'banner_name_4')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'banner_title_4')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'banner_number_4')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'location')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'duration')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'size')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'client')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'date')->hiddenInput(['value' => time()])->label(false) ?>

    <?= $form->field($model, 'project_category_id')->dropDownList(ArrayHelper::map(ProjectCategory::find()->all(), 'id', 'name')) ?>

    <?= $form->field($model, 'lang_id')->textInput()->dropDownList([1 => 'English', 2 => 'Arabic']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
