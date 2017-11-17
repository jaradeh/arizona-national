<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\ResumeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Resumes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <?php echo $this->title ?>
            <small>Version 2.0</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active"><?php echo $this->title ?></li>
        </ol>
        <br />
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Info boxes -->
        <div class="row">
            <div class="col-md-12 col-sm-8 col-xs-12">
                <?=
                GridView::widget([
                    'dataProvider' => $dataProvider,
                    'filterModel' => $searchModel,
                    'columns' => [
                        ['class' => 'yii\grid\SerialColumn'],
                        //'id',
                        'job_title',
                        //'referral',
                        'name',
                        //'gender',
                        // 'marital_status',
                        // 'date_of_birth',
                        //'nationality',
                        // 'address',
                        'phone',
                        'email:email',
                        // 'relatives',
                        // 'relatives_name',
                        // 'relatives_position',
                        // 'passport_country',
                        // 'passport_no',
                        // 'residency_permit_type',
                        // 'expiry_date',
                        // 'civil_id_card_no',
                        // 'sponsor_name',
                        // 'kuwait_driving_licences',
                        // 'kuwait_driving_licences_type',
                        // 'years_of_experience_in_kuwait',
                        // 'years_of_experience_in_GCC',
                        // 'years_of_experience_in_other',
                        // 'when_can_you_start',
                        // 'expected_salary',
                        // 'do_you_currently_work',
                        // 'contact_employer',
                        // 'apply_before',
                        // 'apply_before_date',
                        // 'certificate_1',
                        // 'start_date_1',
                        // 'end_date_1',
                        // 'educational_institution_1',
                        // 'certificate_2',
                        // 'start_date_2',
                        // 'end_date_2',
                        // 'educational_institution_2',
                        // 'certificate_3',
                        // 'start_date_3',
                        // 'end_date_3',
                        // 'educational_institution_3',
                        // 'certificate_4',
                        // 'start_date_4',
                        // 'end_date_4',
                        // 'educational_institution_4',
                        // 'company_1',
                        // 'address_1',
                        // 'company_field_1',
                        // 'salary_1',
                        // 'job_title_1',
                        // 'from_1',
                        // 'to_1',
                        // 'supervisor_name_1',
                        // 'supervisor_title_1',
                        // 'reason_of_leaving_1',
                        // 'company_2',
                        // 'address_2',
                        // 'company_field_2',
                        // 'salary_2',
                        // 'job_title_2',
                        // 'from_2',
                        // 'to_2',
                        // 'supervisor_name_2',
                        // 'supervisor_title_2',
                        // 'reason_of_leaving_2',
                        // 'company_3',
                        // 'address_3',
                        // 'company_field_3',
                        // 'salary_3',
                        // 'job_title_3',
                        // 'from_3',
                        // 'to_3',
                        // 'supervisor_name_3',
                        // 'supervisor_title_3',
                        // 'reason_of_leaving_3',
                        // 'company_4',
                        // 'address_4',
                        // 'company_field_4',
                        // 'salary_4',
                        // 'job_title_4',
                        // 'from_4',
                        // 'to_4',
                        // 'supervisor_name_4',
                        // 'supervisor_title_4',
                        // 'reason_of_leaving_4',
                        // 'arabic_reading',
                        // 'arabic_writing',
                        // 'arabic_speaking',
                        // 'english_reading',
                        // 'english_writing',
                        // 'english_speaking',
                        // 'other_language_name',
                        // 'other_language_reading',
                        // 'other_language_writing',
                        // 'other_language_speaking',
                        // 'computer_skills',
                        // 'emergency_name',
                        // 'emergency_phone',
                        // 'defects',
                        // 'hearing_1',
                        // 'vision_1',
                        // 'speech_1',
                        // 'other_1',
                        // 'hearing_2',
                        // 'vision_2',
                        // 'speech_2',
                        // 'other_2',
                        // 'path',
                        // 'date',
                        ['class' => 'yii\grid\ActionColumn'],
                    ],
                ]);
                ?>
            </div>
            <!-- /.col -->
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->