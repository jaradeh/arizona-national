<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\ResumeSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="resume-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'job_title') ?>

    <?= $form->field($model, 'referral') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'gender') ?>

    <?php // echo $form->field($model, 'marital_status') ?>

    <?php // echo $form->field($model, 'date_of_birth') ?>

    <?php // echo $form->field($model, 'nationality') ?>

    <?php // echo $form->field($model, 'address') ?>

    <?php // echo $form->field($model, 'phone') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'relatives') ?>

    <?php // echo $form->field($model, 'relatives_name') ?>

    <?php // echo $form->field($model, 'relatives_position') ?>

    <?php // echo $form->field($model, 'passport_country') ?>

    <?php // echo $form->field($model, 'passport_no') ?>

    <?php // echo $form->field($model, 'residency_permit_type') ?>

    <?php // echo $form->field($model, 'expiry_date') ?>

    <?php // echo $form->field($model, 'civil_id_card_no') ?>

    <?php // echo $form->field($model, 'sponsor_name') ?>

    <?php // echo $form->field($model, 'kuwait_driving_licences') ?>

    <?php // echo $form->field($model, 'kuwait_driving_licences_type') ?>

    <?php // echo $form->field($model, 'years_of_experience_in_kuwait') ?>

    <?php // echo $form->field($model, 'years_of_experience_in_GCC') ?>

    <?php // echo $form->field($model, 'years_of_experience_in_other') ?>

    <?php // echo $form->field($model, 'when_can_you_start') ?>

    <?php // echo $form->field($model, 'expected_salary') ?>

    <?php // echo $form->field($model, 'do_you_currently_work') ?>

    <?php // echo $form->field($model, 'contact_employer') ?>

    <?php // echo $form->field($model, 'apply_before') ?>

    <?php // echo $form->field($model, 'apply_before_date') ?>

    <?php // echo $form->field($model, 'certificate_1') ?>

    <?php // echo $form->field($model, 'start_date_1') ?>

    <?php // echo $form->field($model, 'end_date_1') ?>

    <?php // echo $form->field($model, 'educational_institution_1') ?>

    <?php // echo $form->field($model, 'certificate_2') ?>

    <?php // echo $form->field($model, 'start_date_2') ?>

    <?php // echo $form->field($model, 'end_date_2') ?>

    <?php // echo $form->field($model, 'educational_institution_2') ?>

    <?php // echo $form->field($model, 'certificate_3') ?>

    <?php // echo $form->field($model, 'start_date_3') ?>

    <?php // echo $form->field($model, 'end_date_3') ?>

    <?php // echo $form->field($model, 'educational_institution_3') ?>

    <?php // echo $form->field($model, 'certificate_4') ?>

    <?php // echo $form->field($model, 'start_date_4') ?>

    <?php // echo $form->field($model, 'end_date_4') ?>

    <?php // echo $form->field($model, 'educational_institution_4') ?>

    <?php // echo $form->field($model, 'company_1') ?>

    <?php // echo $form->field($model, 'address_1') ?>

    <?php // echo $form->field($model, 'company_field_1') ?>

    <?php // echo $form->field($model, 'salary_1') ?>

    <?php // echo $form->field($model, 'job_title_1') ?>

    <?php // echo $form->field($model, 'from_1') ?>

    <?php // echo $form->field($model, 'to_1') ?>

    <?php // echo $form->field($model, 'supervisor_name_1') ?>

    <?php // echo $form->field($model, 'supervisor_title_1') ?>

    <?php // echo $form->field($model, 'reason_of_leaving_1') ?>

    <?php // echo $form->field($model, 'company_2') ?>

    <?php // echo $form->field($model, 'address_2') ?>

    <?php // echo $form->field($model, 'company_field_2') ?>

    <?php // echo $form->field($model, 'salary_2') ?>

    <?php // echo $form->field($model, 'job_title_2') ?>

    <?php // echo $form->field($model, 'from_2') ?>

    <?php // echo $form->field($model, 'to_2') ?>

    <?php // echo $form->field($model, 'supervisor_name_2') ?>

    <?php // echo $form->field($model, 'supervisor_title_2') ?>

    <?php // echo $form->field($model, 'reason_of_leaving_2') ?>

    <?php // echo $form->field($model, 'company_3') ?>

    <?php // echo $form->field($model, 'address_3') ?>

    <?php // echo $form->field($model, 'company_field_3') ?>

    <?php // echo $form->field($model, 'salary_3') ?>

    <?php // echo $form->field($model, 'job_title_3') ?>

    <?php // echo $form->field($model, 'from_3') ?>

    <?php // echo $form->field($model, 'to_3') ?>

    <?php // echo $form->field($model, 'supervisor_name_3') ?>

    <?php // echo $form->field($model, 'supervisor_title_3') ?>

    <?php // echo $form->field($model, 'reason_of_leaving_3') ?>

    <?php // echo $form->field($model, 'company_4') ?>

    <?php // echo $form->field($model, 'address_4') ?>

    <?php // echo $form->field($model, 'company_field_4') ?>

    <?php // echo $form->field($model, 'salary_4') ?>

    <?php // echo $form->field($model, 'job_title_4') ?>

    <?php // echo $form->field($model, 'from_4') ?>

    <?php // echo $form->field($model, 'to_4') ?>

    <?php // echo $form->field($model, 'supervisor_name_4') ?>

    <?php // echo $form->field($model, 'supervisor_title_4') ?>

    <?php // echo $form->field($model, 'reason_of_leaving_4') ?>

    <?php // echo $form->field($model, 'arabic_reading') ?>

    <?php // echo $form->field($model, 'arabic_writing') ?>

    <?php // echo $form->field($model, 'arabic_speaking') ?>

    <?php // echo $form->field($model, 'english_reading') ?>

    <?php // echo $form->field($model, 'english_writing') ?>

    <?php // echo $form->field($model, 'english_speaking') ?>

    <?php // echo $form->field($model, 'other_language_name') ?>

    <?php // echo $form->field($model, 'other_language_reading') ?>

    <?php // echo $form->field($model, 'other_language_writing') ?>

    <?php // echo $form->field($model, 'other_language_speaking') ?>

    <?php // echo $form->field($model, 'computer_skills') ?>

    <?php // echo $form->field($model, 'emergency_name') ?>

    <?php // echo $form->field($model, 'emergency_phone') ?>

    <?php // echo $form->field($model, 'defects') ?>

    <?php // echo $form->field($model, 'hearing_1') ?>

    <?php // echo $form->field($model, 'vision_1') ?>

    <?php // echo $form->field($model, 'speech_1') ?>

    <?php // echo $form->field($model, 'other_1') ?>

    <?php // echo $form->field($model, 'hearing_2') ?>

    <?php // echo $form->field($model, 'vision_2') ?>

    <?php // echo $form->field($model, 'speech_2') ?>

    <?php // echo $form->field($model, 'other_2') ?>

    <?php // echo $form->field($model, 'path') ?>

    <?php // echo $form->field($model, 'date') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
