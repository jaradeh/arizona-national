<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use backend\models\AppsCountries;

/* @var $this yii\web\View */
/* @var $model backend\models\Resume */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Resumes', 'url' => ['index']];
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
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active"><?php echo $this->title ?></li>
        </ol>
        <br />
        <?=
        Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ])
        ?>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Info boxes -->
        <div class="row">
            <div class="col-md-12 col-sm-8 col-xs-12">
                <?=
                DetailView::widget([
                    'model' => $model,
                    'attributes' => [
                        'job_title',
                        'referral',
                        'name',
                        [
                            'attribute' => 'gender',
                            'format' => 'html',
                            'value' => function ($model) {
                                if ($model->gender == 2) {
                                    return "Female";
                                } else {
                                    return "Male";
                                }
                            },
                        ],
                        [
                            'attribute' => 'marital_status',
                            'format' => 'html',
                            'value' => function ($model) {
                                if ($model->marital_status == 1) {
                                    return "Single";
                                } else if ($model->marital_status == 2) {
                                    return "Married";
                                } else if ($model->marital_status == 3) {
                                    return "Divorced";
                                } else if ($model->marital_status == 4) {
                                    return "Windowed";
                                } else {
                                    return "Other";
                                }
                            },
                        ],
                        [
                            'attribute' => 'date_of_birth',
                            'format' => 'html',
                            'value' => function ($model) {
                                return date('d M Y', $model->date_of_birth);
                            },
                        ],
                        [
                            'attribute' => 'nationality',
                            'format' => 'html',
                            'value' => function ($model) {
                                $find_nationality = AppsCountries::find()->where(['id' => $model->nationality])->one();
                                return $find_nationality->country_name;
                            },
                                ],
                                'address',
                                'phone',
                                'email:email',
                                [
                                    'attribute' => 'relatives',
                                    'format' => 'html',
                                    'value' => function ($model) {
                                        if ($model->relatives == 1) {
                                            return "No relatives in company";
                                        } else {
                                            return "There are relatives in company";
                                        }
                                    },
                                ],
                                'relatives_name',
                                'relatives_position',
                                [
                                    'attribute' => 'passport_country',
                                    'format' => 'html',
                                    'value' => function ($model) {
                                        $find_nationality = AppsCountries::find()->where(['id' => $model->passport_country])->one();
                                        return $find_nationality->country_name;
                                    },
                                        ],
                                        'passport_no',
                                        [
                                            'attribute' => 'residency_permit_type',
                                            'format' => 'html',
                                            'value' => function ($model) {
                                                if ($model->residency_permit_type == 1) {
                                                    return "Permanent";
                                                } else if ($model->residency_permit_type == 2) {
                                                    return "Temporary";
                                                } else {
                                                    return "Other";
                                                }
                                            },
                                        ],
                                        [
                                            'attribute' => 'expiry_date',
                                            'format' => 'html',
                                            'value' => function ($model) {
                                                if ($model->expiry_date == 0 || $model->expiry_date == "") {
                                                    return "No Time";
                                                } else {
                                                    return date("d M Y", $model->expiry_date);
                                                }
                                            },
                                        ],
                                        'civil_id_card_no',
                                        'sponsor_name',
                                        [
                                            'attribute' => 'kuwait_driving_licences',
                                            'format' => 'html',
                                            'value' => function ($model) {
                                                if ($model->kuwait_driving_licences == 1) {
                                                    return "No";
                                                } else {
                                                    return "Yes";
                                                }
                                            },
                                        ],
                                        'kuwait_driving_licences_type',
                                        'years_of_experience_in_kuwait',
                                        'years_of_experience_in_GCC',
                                        'years_of_experience_in_other',
                                        [
                                            'attribute' => 'when_can_you_start',
                                            'format' => 'html',
                                            'value' => function ($model) {
                                                if ($model->when_can_you_start == 0 || $model->when_can_you_start == "") {
                                                    return "No Time";
                                                } else {
                                                    return date("d M Y", $model->when_can_you_start);
                                                }
                                            },
                                        ],
                                        'expected_salary',
                                        [
                                            'attribute' => 'do_you_currently_work',
                                            'format' => 'html',
                                            'value' => function ($model) {
                                                if ($model->do_you_currently_work == 1) {
                                                    return "No";
                                                } else {
                                                    return "Yes";
                                                }
                                            },
                                        ],
                                        [
                                            'attribute' => 'contact_employer',
                                            'format' => 'html',
                                            'value' => function ($model) {
                                                if ($model->contact_employer == 1) {
                                                    return "Yes";
                                                } else {
                                                    return "No";
                                                }
                                            },
                                        ],
                                        [
                                            'attribute' => 'apply_before',
                                            'format' => 'html',
                                            'value' => function ($model) {
                                                if ($model->apply_before == 1) {
                                                    return "No";
                                                } else {
                                                    return "Yes";
                                                }
                                            },
                                        ],
                                        [
                                            'attribute' => 'apply_before_date',
                                            'format' => 'html',
                                            'value' => function ($model) {
                                                if ($model->apply_before_date == 0 || $model->when_can_you_start == "") {
                                                    return "No Time";
                                                } else {
                                                    return date("d M Y", $model->apply_before_date);
                                                }
                                            },
                                        ],
                                        'certificate_1',
                                        'start_date_1',
                                        'end_date_1',
                                        'educational_institution_1',
                                        'certificate_2',
                                        'start_date_2',
                                        'end_date_2',
                                        'educational_institution_2',
                                        'certificate_3',
                                        'start_date_3',
                                        'end_date_3',
                                        'educational_institution_3',
                                        'certificate_4',
                                        'start_date_4',
                                        'end_date_4',
                                        'educational_institution_4',
                                        'company_1',
                                        'address_1',
                                        'company_field_1',
                                        'salary_1',
                                        'job_title_1',
                                        'from_1',
                                        'to_1',
                                        'supervisor_name_1',
                                        'supervisor_title_1',
                                        'reason_of_leaving_1',
                                        'company_2',
                                        'address_2',
                                        'company_field_2',
                                        'salary_2',
                                        'job_title_2',
                                        'from_2',
                                        'to_2',
                                        'supervisor_name_2',
                                        'supervisor_title_2',
                                        'reason_of_leaving_2',
                                        'company_3',
                                        'address_3',
                                        'company_field_3',
                                        'salary_3',
                                        'job_title_3',
                                        'from_3',
                                        'to_3',
                                        'supervisor_name_3',
                                        'supervisor_title_3',
                                        'reason_of_leaving_3',
                                        'company_4',
                                        'address_4',
                                        'company_field_4',
                                        'salary_4',
                                        'job_title_4',
                                        'from_4',
                                        'to_4',
                                        'supervisor_name_4',
                                        'supervisor_title_4',
                                        'reason_of_leaving_4',
                                        [
                                            'attribute' => 'arabic_reading',
                                            'format' => 'html',
                                            'value' => function ($model) {
                                                if ($model->arabic_reading == 1) {
                                                    return "Excellent";
                                                } else if ($model->arabic_reading == 2) {
                                                    return "Good";
                                                } else {
                                                    return "Fair";
                                                }
                                            },
                                        ],
                                        [
                                            'attribute' => 'arabic_writing',
                                            'format' => 'html',
                                            'value' => function ($model) {
                                                if ($model->arabic_writing == 1) {
                                                    return "Excellent";
                                                } else if ($model->arabic_writing == 2) {
                                                    return "Good";
                                                } else {
                                                    return "Fair";
                                                }
                                            },
                                        ],
                                        [
                                            'attribute' => 'arabic_speaking',
                                            'format' => 'html',
                                            'value' => function ($model) {
                                                if ($model->arabic_speaking == 1) {
                                                    return "Excellent";
                                                } else if ($model->arabic_speaking == 2) {
                                                    return "Good";
                                                } else {
                                                    return "Fair";
                                                }
                                            },
                                        ],
                                        [
                                            'attribute' => 'english_reading',
                                            'format' => 'html',
                                            'value' => function ($model) {
                                                if ($model->english_reading == 1) {
                                                    return "Excellent";
                                                } else if ($model->english_reading == 2) {
                                                    return "Good";
                                                } else {
                                                    return "Fair";
                                                }
                                            },
                                        ],
                                        [
                                            'attribute' => 'english_writing',
                                            'format' => 'html',
                                            'value' => function ($model) {
                                                if ($model->english_writing == 1) {
                                                    return "Excellent";
                                                } else if ($model->english_writing == 2) {
                                                    return "Good";
                                                } else {
                                                    return "Fair";
                                                }
                                            },
                                        ],
                                        [
                                            'attribute' => 'english_speaking',
                                            'format' => 'html',
                                            'value' => function ($model) {
                                                if ($model->english_speaking == 1) {
                                                    return "Excellent";
                                                } else if ($model->english_speaking == 2) {
                                                    return "Good";
                                                } else {
                                                    return "Fair";
                                                }
                                            },
                                        ],
                                        [
                                            'attribute' => 'other_language_name',
                                            'format' => 'html',
                                            'value' => function ($model) {
                                                return $model->other_language_name;
                                            },
                                        ],
                                        [
                                            'attribute' => 'other_language_reading',
                                            'format' => 'html',
                                            'value' => function ($model) {
                                                if ($model->other_language_reading == 1) {
                                                    return "Excellent";
                                                } else if ($model->other_language_reading == 2) {
                                                    return "Good";
                                                } else {
                                                    return "Fair";
                                                }
                                            },
                                        ],
                                        [
                                            'attribute' => 'other_language_writing',
                                            'format' => 'html',
                                            'value' => function ($model) {
                                                if ($model->other_language_writing == 1) {
                                                    return "Excellent";
                                                } else if ($model->other_language_writing == 2) {
                                                    return "Good";
                                                } else {
                                                    return "Fair";
                                                }
                                            },
                                        ],
                                        [
                                            'attribute' => 'other_language_speaking',
                                            'format' => 'html',
                                            'value' => function ($model) {
                                                if ($model->other_language_speaking == 1) {
                                                    return "Excellent";
                                                } else if ($model->other_language_speaking == 2) {
                                                    return "Good";
                                                } else {
                                                    return "Fair";
                                                }
                                            },
                                        ],
                                        'computer_skills',
                                        [
                                            'attribute' => 'emergency_name',
                                            'format' => 'html',
                                            'value' => function ($model) {
                                                return "Eemergency Name : " . $model->emergency_name . " <Br />Eemergency Phone : " . $model->emergency_phone;
                                            },
                                        ],
                                        [
                                            'attribute' => 'defects',
                                            'format' => 'html',
                                            'value' => function ($model) {
                                                if ($model->defects == 1) {
                                                    return "No Defects";
                                                } else {
                                                    return "Yes";
                                                }
                                            },
                                        ],
                                        [
                                            'attribute' => 'hearing_1',
                                            'format' => 'html',
                                            'value' => function ($model) {
                                                return $model->hearing_1 . " " . $model->hearing_2;
                                            },
                                        ],
                                        [
                                            'attribute' => 'vision_1',
                                            'format' => 'html',
                                            'value' => function ($model) {
                                                return $model->vision_1 . " " . $model->vision_2;
                                            },
                                        ],
                                        [
                                            'attribute' => 'speech_1',
                                            'format' => 'html',
                                            'value' => function ($model) {
                                                return $model->speech_1 . " " . $model->speech_2;
                                            },
                                        ],
                                        [
                                            'attribute' => 'other_1',
                                            'format' => 'html',
                                            'value' => function ($model) {
                                                return $model->other_1 . " " . $model->other_1;
                                            },
                                        ],
                                        [
                                            'attribute' => 'path',
                                            'format' => 'html',
                                            'value' => function ($model) {
                                                if (isset($model->path) && $model->path != "empty") {
                                                    return "<a href='../../../images/resume/$model->path' target='_blank'>View Resume</a>";
                                                } else {
                                                    return "No Resume";
                                                }
                                            },
                                        ],
                                        [
                                            'attribute' => 'date',
                                            'format' => 'html',
                                            'value' => function ($model) {
                                                return date("d M Y", $model->date);
                                            },
                                        ],
                                    ],
                                ])
                                ?>
            </div>
            <!-- /.col -->
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
