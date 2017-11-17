<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use backend\models\AppsCountries;

/* @var $this yii\web\View */
/* @var $model backend\models\Resume */
/* @var $form yii\widgets\ActiveForm */
?>

<style>
    #resume-gender{
        margin:auto;
        width:50%;
    }
</style>

<div class="resume-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>


    <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3 col-lg-8 col-lg-offset-2">
        <table class="table table-bordered table-striped">
            <tr>
                <td colspan="2" class="resume_create_table_td_head_"><center><b><?= yii::t('app', 'Date and Referral'); ?></b></center></td>
            </tr>
            <tr>
                <td><?= yii::t('app', 'Job Title'); ?></td>
                <td><?= $form->field($model, 'job_title')->textInput(['maxlength' => true])->label(false) ?></td>
            </tr>
            <tr>
                <td><?= yii::t('app', 'Date'); ?></td>
                <td>
                    <?= $form->field($model, 'date', ['options' => ['tag' => 'div', 'style' => 'display:none']])->hiddenInput(['class' => 'readonly form-control', 'value' => time()])->label(false) ?>
                    <input type="text" class="form-control" readonly value="<?php echo date('d M Y') ?>">
                </td>
            </tr>
            <tr>
                <td><?= yii::t('app', 'Referral'); ?></td>
                <td><?= $form->field($model, 'referral')->textInput(['maxlength' => true])->label(false) ?></td>
            </tr>
        </table>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2 col-lg-10 col-lg-offset-1">
        <table class="table table-bordered table-striped">
            <tr>
                <td colspan="2" class="resume_create_table_td_head_"><center><b><?= yii::t('app', 'Personal Information'); ?></b></center></td>
            </tr>
            <tr>
                <td colspan="2"><?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?></td>
            </tr>
            <tr>
                <td>
                    <div class="form-group field-resume-gender required">
                        <label class="control-label"><?= yii::t('app', 'Gender'); ?></label>
                        <input type="hidden" name="Resume[gender]" value=""><div id="resume-gender" aria-required="true">
                            <label style="float:left;"><input type="radio" name="Resume[gender]" value="1" checked> <?= yii::t('app', 'Male'); ?></label>
                            <label style="float:right;"><input type="radio" name="Resume[gender]" value="2"> <?= yii::t('app', 'Female'); ?></label>
                        </div>
                        <div class="help-block"></div>
                    </div>
                </td>
                <td><?= $form->field($model, 'marital_status')->textInput()->dropDownList([1 => yii::t('app', 'Single'), 2 => yii::t('app', 'Married'), 3 => yii::t('app', 'Divorced'), 4 => yii::t('app', 'Widowed'), 5 => yii::t('app', 'Other')]) ?></td>
            </tr>
            <tr>
                <td><?= $form->field($model, 'date_of_birth')->textInput(['type' => 'date']) ?></td>


                <td style="width:50%;">
                    <?=
                    $form->field($model, 'nationality')->dropDownList(ArrayHelper::map(AppsCountries::find()->all(), 'id', 'country_name'), ['options' =>
                        [
                            118 => ['selected' => true]
                        ]
                    ])
                    ?>
                </td>

            </tr>
            <tr>
                <td colspan="2"><?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?></td>
            </tr>
            <tr>
                <td><?= $form->field($model, 'phone')->textInput(['type' => 'number']) ?></td>
                <td><?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?></td>
            </tr>
            <tr>
                <td colspan="2">
                    <div class="form-group field-resume-relatives required">
                        <label class="control-label"><?= yii::t('app', 'Does the firm employ any of your relatives? If yes, Specify Name and Designation'); ?></label>
                        <input type="hidden" name="Resume[relatives]" value="">
                        <div id="resume-relatives" aria-required="true">
                            <label class="resume_create_radio_one_span"><input type="radio" name="Resume[relatives]" value="1" id="resume_create_relatives_btn_no" checked> <?= yii::t('app', 'No'); ?></label>
                            <label><input type="radio" name="Resume[relatives]" value="2" id="resume_create_relatives_btn_yes"> <?= yii::t('app', 'Yes'); ?></label>
                        </div>
                        <div class="help-block"></div>
                    </div>
                </td>
            </tr>
            <tr id="resume_create_relatives_info" style="display: none;">
                <td><?= $form->field($model, 'relatives_name')->textInput(['maxlength' => true]) ?></td>
                <td><?= $form->field($model, 'relatives_position')->textInput(['maxlength' => true]) ?></td>
            </tr>
        </table>
    </div>


    <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2 col-lg-10 col-lg-offset-1">
        <table class="table table-bordered table-striped">
            <tr>
                <td colspan="2" class="resume_create_table_td_head_"><center><b><?= yii::t('app', 'STATUS INFORMATION (Passport/ Visa/ Licenses)'); ?></b></center></td>
            </tr>
            <tr>
                <td style="width:50%;"><?= $form->field($model, 'passport_country')->dropDownList(ArrayHelper::map(AppsCountries::find()->all(), 'id', 'country_name')) ?></td>

                <td><?= $form->field($model, 'passport_no')->textInput(['maxlength' => true, 'type' => 'number']) ?></td>
            </tr>
            <tr>
                <td><?= $form->field($model, 'residency_permit_type')->textInput()->dropDownList([1 => yii::t('app', 'Permanent'), 2 => yii::t('app', 'Temporary'), 3 => yii::t('app', 'Other')]) ?></td>
                <td><?= $form->field($model, 'expiry_date')->textInput(['type' => 'date']) ?></td>
            </tr>
            <tr>
                <td><?= $form->field($model, 'civil_id_card_no')->textInput(['type' => 'number']) ?></td>
                <td><?= $form->field($model, 'sponsor_name')->textInput(['maxlength' => true]) ?></td>
            </tr>
            <tr>
                <td colspan="2"><div class="form-group field-resume-kuwait_driving_licences required">
                        <label class="control-label"><?= yii::t('app', 'Do you have a Kuwaiti Driving License?'); ?></label>
                        <input type="hidden" name="Resume[kuwait_driving_licences]" value="">
                        <div id="resume-kuwait_driving_licences" aria-required="true">
                            <label class="resume_create_radio_one_span"><input type="radio" name="Resume[kuwait_driving_licences]" id="create_resume_driving_license_btn_no" value="1" checked> <?= yii::t('app', 'No'); ?></label>
                            <label><input type="radio" name="Resume[kuwait_driving_licences]" id="create_resume_driving_license_btn_yes" value="2" > <?= yii::t('app', 'Yes'); ?></label>
                        </div>
                        <div class="help-block"></div>
                    </div></td>
            </tr>
            <tr id="resume_create_driving_license_type" style="display: none;">
                <td colspan="2"><?= $form->field($model, 'kuwait_driving_licences_type')->textInput(['maxlength' => true]) ?></td>
            </tr>
        </table>
    </div>



    <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2 col-lg-10 col-lg-offset-1">
        <table class="table table-bordered table-striped">
            <tr>
                <td colspan="4" class="resume_create_table_td_head_"><center><b><?= yii::t('app', 'EMPLOYMENT INFORMATION'); ?></b></center></td>
            </tr>
            <tr>
                <td style="width:50%;"><label><?= yii::t('app', 'Total years of Experience'); ?></label></td>
                <td style="width:15%;"><center><?= $form->field($model, 'years_of_experience_in_kuwait')->textInput(['type' => 'number', 'value' => '0']) ?></center></td>
            <td style="width:15%;"><center><?= $form->field($model, 'years_of_experience_in_GCC')->textInput(['type' => 'number', 'value' => '0']) ?></center></td>
            <td style="width:15%;"><center><?= $form->field($model, 'years_of_experience_in_other')->textInput(['type' => 'number', 'value' => '0']) ?></center></td>
            </tr>
            <tr>
                <td colspan="1"><?= $form->field($model, 'when_can_you_start')->textInput(['type' => 'date']) ?></td>
                <td colspan="3"><?= $form->field($model, 'expected_salary')->textInput(['type' => 'number']) ?></td>
            </tr>
            <tr>
                <td colspan="1"><label><?= yii::t('app', 'Are you employed now?'); ?></label></td>
                <td colspan="3">
                    <div class="form-group field-resume-do_you_currently_work">
                        <input type="hidden" name="Resume[do_you_currently_work]" value=""><div id="resume-do_you_currently_work">
                            <center>
                                <label class="resume_create_radio_one_span"><input type="radio" name="Resume[do_you_currently_work]" id="reusme_create_contact_employer_btn_no" value="1" checked> <?= yii::t('app', 'No'); ?></label>
                                <label><input type="radio" name="Resume[do_you_currently_work]" id="reusme_create_contact_employer_btn_yes" value="2"> <?= yii::t('app', 'Yes'); ?></label>
                            </center>
                        </div>
                        <div class="help-block"></div>
                    </div>
                </td>
            </tr>
            <tr id="resume_create_contact_employer_tr" style="display: none;">
                <td colspan="1"><label><?= yii::t('app', 'May we contact your present Employer'); ?></label></td>
                <td colspan="3">
                    <div class="form-group field-resume-contact_employer">
                        <input type="hidden" name="Resume[contact_employer]" value=""><div id="resume-contact_employer">
                            <center>
                                <label class="resume_create_radio_one_span"><input type="radio" name="Resume[contact_employer]" value="1" checked> <?= yii::t('app', 'Yes'); ?></label>
                                <label><input type="radio" name="Resume[contact_employer]" value="2"> <?= yii::t('app', 'No'); ?></label></div>
                        </center>
                        <div class="help-block"></div>
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="1"><label><?= yii::t('app', 'Have you ever applied to this firm before?'); ?></label></td>
                <td colspan="3">
                    <div class="form-group field-resume-apply_before required">
                        <input type="hidden" name="Resume[apply_before]" value=""><div id="resume-apply_before" aria-required="true">
                            <center>
                                <label class="resume_create_radio_one_span"><input type="radio" name="Resume[apply_before]" id="reusme_create_apply_before_btn_no" value="1" checked> <?= yii::t('app', 'No'); ?></label>
                                <label><input type="radio" name="Resume[apply_before]" id="reusme_create_apply_before_btn_yes" value="2"> <?= yii::t('app', 'Yes'); ?></label>
                            </center>
                        </div>
                        <div class="help-block"></div>
                    </div>
                </td>
            </tr>
            <tr id="resume_create_apply_before_date" style="display: none;">
                <td colspan="1"><label><?= yii::t('app', 'If yes, state when'); ?></label></td>
                <td colspan="3">
                    <?= $form->field($model, 'apply_before_date')->textInput(['type' => 'date'])->label(false) ?>
                </td>
            </tr>
        </table>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2 col-lg-10 col-lg-offset-1">
        <table class="table table-bordered table-striped">
            <tr>
                <td colspan="3" class="resume_create_table_td_head_"><center><b><?= yii::t('app', 'EDUCATION'); ?></center></b></td>
            </tr>
            <tr>
                <td><center><b><?= yii::t('app', '(Educational Institution /City/Country)'); ?></b></center></td>
            <td><center><b><?= yii::t('app', 'Starting year/ Ending Year'); ?></b></center></td>
            <td><center><b><?= yii::t('app', 'Certificate'); ?></b></center></td>
            </tr>
            <tr>
                <td style="width:38%;"><?= $form->field($model, 'educational_institution_1')->textInput(['maxlength' => true])->label(false) ?></td>
                <td style="width:34%;">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6"><?= $form->field($model, 'start_date_1')->textInput(['maxlength' => 4, 'type' => 'number'])->label(false) ?></div>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6"><?= $form->field($model, 'end_date_1')->textInput(['maxlength' => 4, 'type' => 'number'])->label(false) ?></div>
                    </div>
                </td>
                <td style="width:28%;"><?= $form->field($model, 'certificate_1')->textInput(['maxlength' => true])->label(false) ?></td>
            </tr>
            <tr style="display: none;" id="resume_create_add_more_education_fields_1">
                <td style="width:38%;"><?= $form->field($model, 'educational_institution_2')->textInput(['maxlength' => true])->label(false) ?></td>
                <td style="width:34%;">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6"><?= $form->field($model, 'start_date_2')->textInput(['maxlength' => 4, 'type' => 'number'])->label(false) ?></div>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6"><?= $form->field($model, 'end_date_2')->textInput(['maxlength' => 4, 'type' => 'number'])->label(false) ?></div>
                    </div>
                </td>
                <td style="width:28%;"><?= $form->field($model, 'certificate_2')->textInput(['maxlength' => true])->label(false) ?></td>
            </tr>
            <tr style="display: none;" id="resume_create_add_more_education_fields_2">
                <td style="width:38%;"><?= $form->field($model, 'educational_institution_3')->textInput(['maxlength' => true])->label(false) ?></td>
                <td style="width:34%;">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6"><?= $form->field($model, 'start_date_3')->textInput(['maxlength' => 4, 'type' => 'number'])->label(false) ?></div>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6"><?= $form->field($model, 'end_date_3')->textInput(['maxlength' => 4, 'type' => 'number'])->label(false) ?></div>
                    </div>
                </td>
                <td style="width:28%;"><?= $form->field($model, 'certificate_3')->textInput(['maxlength' => true])->label(false) ?></td>
            </tr>
            <tr style="display: none;" id="resume_create_add_more_education_fields_3">
                <td style="width:38%;"><?= $form->field($model, 'educational_institution_4')->textInput(['maxlength' => true])->label(false) ?></td>
                <td style="width:34%;">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6"><?= $form->field($model, 'start_date_4')->textInput(['maxlength' => 4, 'type' => 'number'])->label(false) ?></div>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6"><?= $form->field($model, 'end_date_4')->textInput(['maxlength' => 4, 'type' => 'number'])->label(false) ?></div>
                    </div>
                </td>
                <td style="width:28%;"><?= $form->field($model, 'certificate_4')->textInput(['maxlength' => true])->label(false) ?></td>
            </tr>
            <tr id="resume_create_add_more_education_1_tr">
                <td colspan="10" id="resume_create_add_more_education_1_btn"><i class="glyphicon glyphicon-plus"></i><small class="" style="color:blue;font-size: 15px;cursor: pointer;"> <?= yii::t('app', 'Add More Certificate'); ?></small></td>
            </tr>
            <tr style="display: none;" id="resume_create_add_more_education_2_tr">
                <td colspan="10" id="resume_create_add_more_education_2_btn"><i class="glyphicon glyphicon-plus"></i><small class="" style="color:blue;font-size: 15px;cursor: pointer;"> <?= yii::t('app', 'Add More Certificate'); ?></small></td>
            </tr>
            <tr style="display: none;" id="resume_create_add_more_education_3_tr">
                <td colspan="10" id="resume_create_add_more_education_3_btn"><i class="glyphicon glyphicon-plus"></i><small class="" style="color:blue;font-size: 15px;cursor: pointer;"> <?= yii::t('app', 'Add More Certificate'); ?></small></td>
            </tr>
        </table>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2 col-lg-10 col-lg-offset-1">
        <br /><br />
        <p style="color:black;"><b><?= yii::t('app', 'EMPLOYMENT RECORDS:'); ?></b> <small><?= yii::t('app', 'KINDLY START WITH YOUR MOST RECENT JOB.'); ?></small></p>
    </div>
    <?php for ($i = 1; $i < 5; $i++) { ?>
        <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2 col-lg-10 col-lg-offset-1">
            <table class="table table-bordered table-striped" id="resume_create_job_record_table_<?php echo $i; ?>" style="display: none;">
                <tr>
                    <td colspan="2" class="resume_create_table_td_head_"><center><b><?= yii::t('app', 'EMPLOYMENT RECORD'); ?> -<?php echo $i ?></b></center></td>
                </tr>
                <tr>
                    <td><?= $form->field($model, 'company_' . $i)->textInput(['maxlength' => true]) ?></td>
                    <td><?= $form->field($model, 'address_' . $i)->textInput(['maxlength' => true]) ?></td>
                </tr>
                <tr>
                    <td><?= $form->field($model, 'company_field_' . $i)->textInput(['maxlength' => true]) ?></td>
                    <td><?= $form->field($model, 'salary_' . $i)->textInput(['type' => 'number']) ?></td>
                </tr>
                <tr>
                    <td style="width:50%;"><?= $form->field($model, 'job_title_' . $i)->textInput(['maxlength' => true]) ?></td>
                    <td style="width:50%;">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6"><?= $form->field($model, 'from_' . $i)->textInput(['type' => 'number']) ?></div>
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6"><?= $form->field($model, 'to_' . $i)->textInput(['type' => 'number']) ?></div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td><?= $form->field($model, 'supervisor_name_' . $i)->textInput(['maxlength' => true]) ?></td>
                    <td><?= $form->field($model, 'supervisor_title_' . $i)->textInput(['maxlength' => true]) ?></td>
                </tr>
                <tr>
                    <td colspan="2"><?= $form->field($model, 'reason_of_leaving_' . $i)->textarea(['maxlength' => true]) ?></td>
                </tr>
            </table>
            <div class="col-sm-12" id="resume_create_add_more_job_records_<?php echo $i; ?>" style="display: none;">
                <div id="resume_create_add_more_job_records_<?php echo $i; ?>_btn">
                    <i class="glyphicon glyphicon-plus"></i><small class="" style="color:blue;font-size: 15px;cursor: pointer;"> <?= yii::t('app', 'Add More Record'); ?></small>
                </div>
            </div>
        </div>

    <?php } ?>

    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="clear">
            <br /><br />
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2 col-lg-10 col-lg-offset-1">
        <table class="table table-bordered table-striped">
            <tr>
                <td colspan="10" class="resume_create_table_td_head_"><center><b><?= yii::t('app', 'LANGUAGE SKILLS'); ?></b></center></td>
            </tr>
            <tr>
                <td rowspan="2"></td>
            </tr>
            <tr>
                <td colspan="3"><center><b><?= yii::t('app', 'Reading'); ?></b></center></td>
            <td colspan="3"><center><b><?= yii::t('app', 'Writing'); ?></b></center></td>
            <td colspan="3"><center><b><?= yii::t('app', 'Speaking'); ?></b></center></td>
            </tr>
            <tr>
                <td style="width:19%;"></td>
                <td style="width:9%;"><?= yii::t('app', 'Excellent'); ?></td>
                <td style="width:9%;"><?= yii::t('app', 'Good'); ?></td>
                <td style="width:9%;"><?= yii::t('app', 'Fair'); ?></td>
                <td style="width:9%;"><?= yii::t('app', 'Excellent'); ?></td>
                <td style="width:9%;"><?= yii::t('app', 'Good'); ?></td>
                <td style="width:9%;"><?= yii::t('app', 'Fair'); ?></td>
                <td style="width:9%;"><?= yii::t('app', 'Excellent'); ?></td>
                <td style="width:9%;"><?= yii::t('app', 'Good'); ?></td>
                <td>Fair</td>
            </tr>
            <tr>
                <td><?= yii::t('app', 'Arabic'); ?></td>
                <td><center><input type="radio" name="Resume[arabic_reading]" value="1"></center></td>
            <td><center><input type="radio" name="Resume[arabic_reading]" value="2" checked></center></td>
            <td><center><input type="radio" name="Resume[arabic_reading]" value="3"></center></td>
            <td><center><input type="radio" name="Resume[arabic_writing]" value="1"></center></td>
            <td><center><input type="radio" name="Resume[arabic_writing]" value="2" checked></center></td>
            <td><center><input type="radio" name="Resume[arabic_writing]" value="3"></center></td>
            <td><center><input type="radio" name="Resume[arabic_speaking]" value="1"></center></td>
            <td><center><input type="radio" name="Resume[arabic_speaking]" value="2" checked></center></td>
            <td><center><input type="radio" name="Resume[arabic_speaking]" value="3"></center></td>
            </tr>

            <tr>
                <td><?= yii::t('app', 'English'); ?></td>
                <td><center><input type="radio" name="Resume[english_reading]" value="1"></center></td>
            <td><center><input type="radio" name="Resume[english_reading]" value="2" checked></center></td>
            <td><center><input type="radio" name="Resume[english_reading]" value="3"></center></td>
            <td><center><input type="radio" name="Resume[english_writing]" value="1"></center></td>
            <td><center><input type="radio" name="Resume[english_writing]" value="2" checked></center></td>
            <td><center><input type="radio" name="Resume[english_writing]" value="3"></center></td>
            <td><center><input type="radio" name="Resume[english_speaking]" value="1"></center></td>
            <td><center><input type="radio" name="Resume[english_speaking]" value="2" checked></center></td>
            <td><center><input type="radio" name="Resume[english_speaking]" value="3"></center></td>
            </tr>

            <tr id="resume_create_more_language_tr" style="display: none;">
                <td><?= $form->field($model, 'other_language_name')->textInput(['maxlength' => true, 'placeholder' => yii::t('app', 'Other Language')])->label(false) ?></td>
                <td><center><input type="radio" name="Resume[other_language_reading]" value="1"></center></td>
            <td><center><input type="radio" name="Resume[other_language_reading]" value="2" checked></center></td>
            <td><center><input type="radio" name="Resume[other_language_reading]" value="3"></center></td>
            <td><center><input type="radio" name="Resume[other_language_writing]" value="1"></center></td>
            <td><center><input type="radio" name="Resume[other_language_writing]" value="2" checked></center></td>
            <td><center><input type="radio" name="Resume[other_language_writing]" value="3"></center></td>
            <td><center><input type="radio" name="Resume[other_language_speaking]" value="1"></center></td>
            <td><center><input type="radio" name="Resume[other_language_speaking]" value="2" checked></center></td>
            <td><center><input type="radio" name="Resume[other_language_speaking]" value="3"></center></td>
            </tr>

            <tr id="resume_create_add_more_language_tr">
                <td colspan="10" id="resume_create_add_more_language_btn"><i class="glyphicon glyphicon-plus"></i><small class="" style="color:blue;font-size: 15px;cursor: pointer;"> <?= yii::t('app', 'Add More Language'); ?></small></td>
            </tr>

            <tr id="resume_create_hide_more_language_tr" style="display: none;">
                <td colspan="10" id="resume_create_hide_more_language_btn"><i class="glyphicon glyphicon-minus"></i><small class="" style="color:blue;font-size: 15px;cursor: pointer;"> <?= yii::t('app', 'Hide More Language'); ?></small></td>
            </tr>

        </table>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2 col-lg-10 col-lg-offset-1">
        <div class="clear"><br /></div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2 col-lg-10 col-lg-offset-1">
        <table class="table table-bordered table-striped">
            <tr>
                <td class="resume_create_table_td_head_"><center><b><?= yii::t('app', 'Computer Skills'); ?></b></center></td>
            </tr>
            <tr>
                <td><input type="text" id="resume-computer_skills" class="form-control" name="Resume[computer_skills]" maxlength="255" placeholder="<?= yii::t('app', 'Ex: Mircosoft Excel Word Power Point .. '); ?>"></td>
            </tr>
        </table>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2 col-lg-10 col-lg-offset-1">
        <div class="clear"><br /></div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2 col-lg-10 col-lg-offset-1">
        <table class="table table-bordered table-striped">
            <tr>
                <td colspan="4" class="resume_create_table_td_head_"><center><b><?= yii::t('app', 'EMERGENCY CONTACT'); ?></b></center></td>
            </tr>
            <tr>
                <td colspan="2"><?= yii::t('app', 'In case of Emergency, Kindly contact:'); ?></td>
            </tr>
            <tr>
                <td>
                    <?= $form->field($model, 'emergency_name')->textInput(['maxlength' => true]) ?>
                </td>
                <td><?= $form->field($model, 'emergency_phone')->textInput(['type' => 'number']) ?></td>
            </tr>
        </table>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2 col-lg-10 col-lg-offset-1">
        <table class="table table-bordered table-striped">
            <tr>
                <td colspan="4" class="resume_create_table_td_head_"><center><b><?= yii::t('app', 'PHYSICAL RECORD'); ?></b></center></td>
            </tr>
            <tr>
                <td style="width:50%;" colspan="2"><?= yii::t('app', 'Do you have any physical defects ?'); ?></td>
                <td style="width:50%;" colspan="2"><div class="form-group field-resume-defects required">
                        <input type="hidden" name="Resume[defects]" value="">
                        <div id="resume-defects" aria-required="true">
                            <label class="resume_create_radio_one_span"><input type="radio" id="resume_create_defects_btn_no" name="Resume[defects]" value="1" checked> <?= yii::t('app', 'No'); ?></label>
                            <label><input type="radio" name="Resume[defects]" id="resume_create_defects_btn_yes" value="2"> <?= yii::t('app', 'Yes'); ?></label></div>
                    </div>
                </td>
            </tr>
            <tr id="create_resume_defects_tr_1" style="display: none;">
                <td colspan="4">
                    <div style="padding:3%;" align="justify">
                        <?= yii::t('app', 'List any physical defects (Give details)'); ?>
                    </div>
                </td>
            </tr>
            <tr id="create_resume_defects_tr_2" style="display: none;">
                <td><?= $form->field($model, 'hearing_1')->textInput(['maxlength' => true]) ?></td>
                <td><?= $form->field($model, 'vision_1')->textInput(['maxlength' => true]) ?></td>
                <td><?= $form->field($model, 'speech_1')->textInput(['maxlength' => true]) ?></td>
                <td><?= $form->field($model, 'other_1')->textInput(['maxlength' => true]) ?></td>
            </tr>

            <tr id="create_resume_defects_tr_3" style="display: none;">
                <td><?= $form->field($model, 'hearing_2')->textInput(['maxlength' => true]) ?></td>
                <td><?= $form->field($model, 'vision_2')->textInput(['maxlength' => true]) ?></td>
                <td><?= $form->field($model, 'speech_2')->textInput(['maxlength' => true]) ?></td>
                <td><?= $form->field($model, 'other_2')->textInput(['maxlength' => true]) ?></td>
            </tr>


            <tr id="resume_create_add_more_defects_fields_tr" style="display: none;">
                <td colspan="10" id="resume_create_more_defects_fields_btn"><i class="glyphicon glyphicon-plus"></i><small class="" style="color:blue;font-size: 15px;cursor: pointer;"> <?= yii::t('app', 'Add More Fields'); ?></small></td>
            </tr>

            <tr id="resume_create_hide_more_defects_fields_tr" style="display: none;">
                <td colspan="10" id="resume_create_hide_more_defects_fields_btn"><i class="glyphicon glyphicon-minus"></i><small class="" style="color:blue;font-size: 15px;cursor: pointer;"> <?= yii::t('app', 'Hide More Fields'); ?></small></td>
            </tr>
        </table>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2 col-lg-10 col-lg-offset-1">
        <table class="table table-bordered table-striped">
            <tr>
                <td colspan="4" class="resume_create_table_td_head_"><center><b><?= yii::t('app', 'DISCLAIMER AND SIGNATURE'); ?></b></center></td>
            </tr>
            <tr>
                <td>
                    <div style="padding:3%;" align="justify">
                        <?= yii::t('app', 'I CERTIFY THAT THE STATEMENT MADE BY ME, IN ANSWER TO THE FOREGOING QUESTIONS ARE TRUE, COMPLETE AND CORRECT TO THE BEST OF MY KNOWLEDGE AND BELIEF. I AM HELD RESPONSIBLE FOR REPORTING ANY UPDATES, AND I AUTHORIZE INVESTIGATION OF ALL STATEMENTS CONTAINED THEREIN. I FURTHER UNDERSTAND THAT ANY MISREPRESENTATION OR MATERIAL OMISSION MADE ON THIS FORM MY PERSONAL HISTORY RENDERS ME LIABLE TO DISMISSAL.'); ?>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div><?= yii::t('app', 'By clicking "Save" you are agreeing on our terms and conditions'); ?></div>
                </td>
            </tr>
        </table>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2 col-lg-10 col-lg-offset-1">
        <table class="table table-bordered table-striped">
            <tr>
                <td class="resume_create_table_td_head_"><center><b><?= yii::t('app', 'Upload Resume'); ?></b></center></td>
            </tr>
            <tr>
                <td>
                    <?= $form->field($model, 'path')->fileInput(['maxlength' => true])->label(false) ?>
                </td>
            </tr>
        </table>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2 col-lg-10 col-lg-offset-1">
        <div class="form-group">
            <?= Html::submitButton($model->isNewRecord ? yii::t('app', 'Save') : 'Update', ['class' => $model->isNewRecord ? 'btn lg bold-color profile_btn' : 'btn btn-primary']) ?>
        </div>
    </div>







    <?php ActiveForm::end(); ?>

</div>
