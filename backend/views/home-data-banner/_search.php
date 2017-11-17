<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\HomeDataBannerSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="home-data-banner-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'name_1') ?>

    <?= $form->field($model, 'title_1') ?>

    <?= $form->field($model, 'icon_1') ?>

    <?= $form->field($model, 'number_1') ?>

    <?php // echo $form->field($model, 'name_2') ?>

    <?php // echo $form->field($model, 'title_2') ?>

    <?php // echo $form->field($model, 'icon_2') ?>

    <?php // echo $form->field($model, 'number_2') ?>

    <?php // echo $form->field($model, 'name_3') ?>

    <?php // echo $form->field($model, 'title_3') ?>

    <?php // echo $form->field($model, 'icon_3') ?>

    <?php // echo $form->field($model, 'number_3') ?>

    <?php // echo $form->field($model, 'name_4') ?>

    <?php // echo $form->field($model, 'title_4') ?>

    <?php // echo $form->field($model, 'icon_4') ?>

    <?php // echo $form->field($model, 'number_4') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
