<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Resume */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="resume-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'job_title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'referral')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'gender')->textInput() ?>

    <?= $form->field($model, 'marital_status')->textInput() ?>

    <?= $form->field($model, 'date_of_birth')->textInput() ?>

    <?= $form->field($model, 'nationality')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'phone')->textInput() ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'relatives')->textInput() ?>

    <?= $form->field($model, 'relatives_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'relatives_position')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'passport_country')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'passport_no')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'residency_permit_type')->textInput() ?>

    <?= $form->field($model, 'expiry_date')->textInput() ?>

    <?= $form->field($model, 'civil_id_card_no')->textInput() ?>

    <?= $form->field($model, 'sponsor_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kuwait_driving_licences')->textInput() ?>

    <?= $form->field($model, 'kuwait_driving_licences_type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'years_of_experience_in_kuwait')->textInput() ?>

    <?= $form->field($model, 'years_of_experience_in_GCC')->textInput() ?>

    <?= $form->field($model, 'years_of_experience_in_other')->textInput() ?>

    <?= $form->field($model, 'when_can_you_start')->textInput() ?>

    <?= $form->field($model, 'expected_salary')->textInput() ?>

    <?= $form->field($model, 'do_you_currently_work')->textInput() ?>

    <?= $form->field($model, 'contact_employer')->textInput() ?>

    <?= $form->field($model, 'apply_before')->textInput() ?>

    <?= $form->field($model, 'apply_before_date')->textInput() ?>

    <?= $form->field($model, 'certificate_1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'start_date_1')->textInput() ?>

    <?= $form->field($model, 'end_date_1')->textInput() ?>

    <?= $form->field($model, 'educational_institution_1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'certificate_2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'start_date_2')->textInput() ?>

    <?= $form->field($model, 'end_date_2')->textInput() ?>

    <?= $form->field($model, 'educational_institution_2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'certificate_3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'start_date_3')->textInput() ?>

    <?= $form->field($model, 'end_date_3')->textInput() ?>

    <?= $form->field($model, 'educational_institution_3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'certificate_4')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'start_date_4')->textInput() ?>

    <?= $form->field($model, 'end_date_4')->textInput() ?>

    <?= $form->field($model, 'educational_institution_4')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'company_1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'address_1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'company_field_1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'salary_1')->textInput() ?>

    <?= $form->field($model, 'job_title_1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'from_1')->textInput() ?>

    <?= $form->field($model, 'to_1')->textInput() ?>

    <?= $form->field($model, 'supervisor_name_1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'supervisor_title_1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'reason_of_leaving_1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'company_2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'address_2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'company_field_2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'salary_2')->textInput() ?>

    <?= $form->field($model, 'job_title_2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'from_2')->textInput() ?>

    <?= $form->field($model, 'to_2')->textInput() ?>

    <?= $form->field($model, 'supervisor_name_2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'supervisor_title_2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'reason_of_leaving_2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'company_3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'address_3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'company_field_3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'salary_3')->textInput() ?>

    <?= $form->field($model, 'job_title_3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'from_3')->textInput() ?>

    <?= $form->field($model, 'to_3')->textInput() ?>

    <?= $form->field($model, 'supervisor_name_3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'supervisor_title_3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'reason_of_leaving_3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'company_4')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'address_4')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'company_field_4')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'salary_4')->textInput() ?>

    <?= $form->field($model, 'job_title_4')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'from_4')->textInput() ?>

    <?= $form->field($model, 'to_4')->textInput() ?>

    <?= $form->field($model, 'supervisor_name_4')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'supervisor_title_4')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'reason_of_leaving_4')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'arabic_reading')->textInput() ?>

    <?= $form->field($model, 'arabic_writing')->textInput() ?>

    <?= $form->field($model, 'arabic_speaking')->textInput() ?>

    <?= $form->field($model, 'english_reading')->textInput() ?>

    <?= $form->field($model, 'english_writing')->textInput() ?>

    <?= $form->field($model, 'english_speaking')->textInput() ?>

    <?= $form->field($model, 'other_language_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'other_language_reading')->textInput() ?>

    <?= $form->field($model, 'other_language_writing')->textInput() ?>

    <?= $form->field($model, 'other_language_speaking')->textInput() ?>

    <?= $form->field($model, 'computer_skills')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'emergency_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'emergency_phone')->textInput() ?>

    <?= $form->field($model, 'defects')->textInput() ?>

    <?= $form->field($model, 'hearing_1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'vision_1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'speech_1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'other_1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hearing_2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'vision_2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'speech_2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'other_2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'path')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'date')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
