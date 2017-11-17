<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\HomeDataBanner */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="home-data-banner-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'lang_id')->textInput()->dropDownList([1 => 'English', 2 => 'Arabic']) ?>

    <?= $form->field($model, 'name_1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'title_1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'number_1')->textInput() ?>

    <small style="color:red;">Image size : 60px x 88px</small><?= $form->field($model, 'icon_1')->fileInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'name_2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'title_2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'number_2')->textInput() ?>

    <small style="color:red;">Image size : 60px x 88px</small><?= $form->field($model, 'icon_2')->fileInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'name_3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'title_3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'number_3')->textInput() ?>

    <small style="color:red;">Image size : 60px x 88px</small><?= $form->field($model, 'icon_3')->fileInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'name_4')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'title_4')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'number_4')->textInput() ?>

    <small style="color:red;">Image size : 60px x 88px</small><?= $form->field($model, 'icon_4')->fileInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
