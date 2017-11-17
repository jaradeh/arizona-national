<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "resume".
 *
 * @property integer $id
 * @property string $job_title
 * @property string $referral
 * @property string $name
 * @property integer $gender
 * @property integer $marital_status
 * @property integer $date_of_birth
 * @property string $nationality
 * @property string $address
 * @property integer $phone
 * @property string $email
 * @property integer $relatives
 * @property string $relatives_name
 * @property string $relatives_position
 * @property string $passport_country
 * @property string $passport_no
 * @property integer $residency_permit_type
 * @property integer $expiry_date
 * @property integer $civil_id_card_no
 * @property string $sponsor_name
 * @property integer $kuwait_driving_licences
 * @property string $kuwait_driving_licences_type
 * @property integer $years_of_experience_in_kuwait
 * @property integer $years_of_experience_in_GCC
 * @property integer $years_of_experience_in_other
 * @property integer $when_can_you_start
 * @property integer $expected_salary
 * @property integer $do_you_currently_work
 * @property integer $contact_employer
 * @property integer $apply_before
 * @property integer $apply_before_date
 * @property string $certificate_1
 * @property integer $start_date_1
 * @property integer $end_date_1
 * @property string $educational_institution_1
 * @property string $certificate_2
 * @property integer $start_date_2
 * @property integer $end_date_2
 * @property string $educational_institution_2
 * @property string $certificate_3
 * @property integer $start_date_3
 * @property integer $end_date_3
 * @property string $educational_institution_3
 * @property string $certificate_4
 * @property integer $start_date_4
 * @property integer $end_date_4
 * @property string $educational_institution_4
 * @property string $company_1
 * @property string $address_1
 * @property string $company_field_1
 * @property integer $salary_1
 * @property string $job_title_1
 * @property integer $from_1
 * @property integer $to_1
 * @property string $supervisor_name_1
 * @property string $supervisor_title_1
 * @property string $reason_of_leaving_1
 * @property string $company_2
 * @property string $address_2
 * @property string $company_field_2
 * @property integer $salary_2
 * @property string $job_title_2
 * @property integer $from_2
 * @property integer $to_2
 * @property string $supervisor_name_2
 * @property string $supervisor_title_2
 * @property string $reason_of_leaving_2
 * @property string $company_3
 * @property string $address_3
 * @property string $company_field_3
 * @property integer $salary_3
 * @property string $job_title_3
 * @property integer $from_3
 * @property integer $to_3
 * @property string $supervisor_name_3
 * @property string $supervisor_title_3
 * @property string $reason_of_leaving_3
 * @property string $company_4
 * @property string $address_4
 * @property string $company_field_4
 * @property integer $salary_4
 * @property string $job_title_4
 * @property integer $from_4
 * @property integer $to_4
 * @property string $supervisor_name_4
 * @property string $supervisor_title_4
 * @property string $reason_of_leaving_4
 * @property integer $arabic_reading
 * @property integer $arabic_writing
 * @property integer $arabic_speaking
 * @property integer $english_reading
 * @property integer $english_writing
 * @property integer $english_speaking
 * @property string $other_language_name
 * @property integer $other_language_reading
 * @property integer $other_language_writing
 * @property integer $other_language_speaking
 * @property string $computer_skills
 * @property string $emergency_name
 * @property integer $emergency_phone
 * @property integer $defects
 * @property string $hearing_1
 * @property string $vision_1
 * @property string $speech_1
 * @property string $other_1
 * @property string $hearing_2
 * @property string $vision_2
 * @property string $speech_2
 * @property string $other_2
 * @property string $path
 * @property integer $date
 */
class Resume extends \yii\db\ActiveRecord {

    /**
     * @inheritdoc
     */
    public static function tableName() {
        return 'resume';
    }

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [['job_title', 'email', 'name', 'gender', 'marital_status', 'date_of_birth', 'nationality', 'phone', 'relatives', 'passport_country', 'passport_no', 'residency_permit_type', 'expiry_date', 'civil_id_card_no', 'sponsor_name', 'kuwait_driving_licences', 'years_of_experience_in_kuwait', 'when_can_you_start', 'expected_salary', 'apply_before', 'defects', 'arabic_reading', 'arabic_writing', 'arabic_speaking', 'english_reading', 'english_writing', 'english_speaking'], 'required'],
            [[], 'integer'],
            [['email'], 'email'],
            [[], 'string', 'max' => 255],
            [['other_language_name'], 'string', 'max' => 25],
            [['path'], 'file', 'skipOnEmpty' => true, 'extensions' => 'pdf', 'maxFiles' => 1],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels() {
        return [
            'id' => 'ID',
            'job_title' => yii::t('app', 'Job Title'),
            'referral' => 'Referral',
            'name' => yii::t('app', 'Name'),
            'gender' => 'Gender',
            'marital_status' => yii::t('app', 'Marital Status'),
            'date_of_birth' => yii::t('app', 'Date Of Birth'),
            'nationality' => yii::t('app', 'Nationality'),
            'address' => yii::t('app', 'Address'),
            'phone' => yii::t('app', 'Phone'),
            'email' => yii::t('app', 'Email'),
            'relatives' => 'Relatives',
            'relatives_name' => yii::t('app', 'Relatives Name'),
            'relatives_position' => yii::t('app', 'Relatives Position'),
            'passport_country' => yii::t('app', 'Passport Issued Country'),
            'passport_no' => yii::t('app', 'Passport No'),
            'residency_permit_type' => yii::t('app', 'Residency Permit Type'),
            'expiry_date' => yii::t('app', 'Expiry Date'),
            'civil_id_card_no' => yii::t('app', 'Civil Id Card No'),
            'sponsor_name' => yii::t('app', 'Sponsor Name'),
            'kuwait_driving_licences' => 'Kuwait Driving Licences',
            'kuwait_driving_licences_type' => yii::t('app', 'Kuwait Driving Licences Type'),
            'years_of_experience_in_kuwait' => yii::t('app', 'In Kuwait'),
            'years_of_experience_in_GCC' => yii::t('app', 'In  Gcc'),
            'years_of_experience_in_other' => yii::t('app', 'In Other'),
            'when_can_you_start' => yii::t('app', 'When Can You Start'),
            'expected_salary' => yii::t('app', 'Expected Salary'),
            'do_you_currently_work' => 'Do You Currently Work',
            'contact_employer' => 'Contact Employer',
            'apply_before' => 'Apply Before',
            'apply_before_date' => 'Apply Before Date',
            'certificate_1' => 'Certificate 1',
            'start_date_1' => 'Start Date 1',
            'end_date_1' => 'End Date 1',
            'educational_institution_1' => yii::t('app', '(Educational Institution /City/Country)'),
            'certificate_2' => 'Certificate 2',
            'start_date_2' => 'Start Date 2',
            'end_date_2' => 'End Date 2',
            'educational_institution_2' => yii::t('app', '(Educational Institution /City/Country)'),
            'certificate_3' => 'Certificate 3',
            'start_date_3' => 'Start Date 3',
            'end_date_3' => 'End Date 3',
            'educational_institution_3' => yii::t('app', '(Educational Institution /City/Country)'),
            'certificate_4' => 'Certificate 4',
            'start_date_4' => 'Start Date 4',
            'end_date_4' => 'End Date 4',
            'educational_institution_4' => yii::t('app', '(Educational Institution /City/Country)'),
            'company_1' => yii::t('app', 'Company Name'),
            'address_1' => yii::t('app', 'Address'),
            'company_field_1' => yii::t('app', 'Company Field'),
            'salary_1' => yii::t('app', 'Salary'),
            'job_title_1' => yii::t('app', 'Job Title'),
            'from_1' => yii::t('app', 'From'),
            'to_1' => yii::t('app', 'To'),
            'supervisor_name_1' => yii::t('app', 'Supervisor Name'),
            'supervisor_title_1' => yii::t('app', 'Supervisor Title'),
            'reason_of_leaving_1' => yii::t('app', 'Reason Of Leaving'),
            'company_2' => yii::t('app', 'Company Name'),
            'address_2' => yii::t('app', 'Address'),
            'company_field_2' => yii::t('app', 'Company Field'),
            'salary_2' => yii::t('app', 'Salary'),
            'job_title_2' => yii::t('app', 'Job Title'),
            'from_2' => yii::t('app', 'From'),
            'to_2' => yii::t('app', 'To'),
            'supervisor_name_2' => yii::t('app', 'Supervisor Name'),
            'supervisor_title_2' => yii::t('app', 'Supervisor Title'),
            'reason_of_leaving_2' => yii::t('app', 'Reason Of Leaving'),
            'company_3' => yii::t('app', 'Company Name'),
            'address_3' => yii::t('app', 'Address'),
            'company_field_3' => yii::t('app', 'Company Field'),
            'salary_3' => yii::t('app', 'Salary'),
            'job_title_3' => yii::t('app', 'Job Title'),
            'from_3' => yii::t('app', 'From'),
            'to_3' => yii::t('app', 'To'),
            'supervisor_name_3' => yii::t('app', 'Supervisor Name'),
            'supervisor_title_3' => yii::t('app', 'Supervisor Title'),
            'reason_of_leaving_3' => yii::t('app', 'Reason Of Leaving'),
            'company_4' => yii::t('app', 'Company Name'),
            'address_4' => yii::t('app', 'Address'),
            'company_field_4' => yii::t('app', 'Company Field'),
            'salary_4' => yii::t('app', 'Salary'),
            'job_title_4' => yii::t('app', 'Job Title'),
            'from_4' => yii::t('app', 'From'),
            'to_4' => yii::t('app', 'To'),
            'supervisor_name_4' => yii::t('app', 'Supervisor Name'),
            'supervisor_title_4' => yii::t('app', 'Supervisor Title'),
            'reason_of_leaving_4' => yii::t('app', 'Reason Of Leaving'),
            'arabic_reading' => 'Arabic Reading',
            'arabic_writing' => 'Arabic Writing',
            'arabic_speaking' => 'Arabic Speaking',
            'english_reading' => 'English Reading',
            'english_writing' => 'English Writing',
            'english_speaking' => 'English Speaking',
            'other_language_name' => 'Other Language Name',
            'other_language_reading' => 'Other Language Reading',
            'other_language_writing' => 'Other Language Writing',
            'other_language_speaking' => 'Other Language Speaking',
            'computer_skills' => 'Computer Skills',
            'emergency_name' => yii::t('app', 'Name'),
            'emergency_phone' => yii::t('app', 'Phone'),
            'defects' => 'Defects',
            'hearing_1' => yii::t('app', 'Hearing'),
            'vision_1' => yii::t('app', 'Vision'),
            'speech_1' => yii::t('app', 'Speech'),
            'other_1' => yii::t('app', 'Other'),
            'hearing_2' => yii::t('app', 'Hearing'),
            'vision_2' => yii::t('app', 'Vision'),
            'speech_2' => yii::t('app', 'Speech'),
            'other_2' => yii::t('app', 'Other'),
            'path' => 'Path',
            'date' => 'Date',
        ];
    }

}
