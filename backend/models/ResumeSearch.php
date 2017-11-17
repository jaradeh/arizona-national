<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Resume;

/**
 * ResumeSearch represents the model behind the search form about `backend\models\Resume`.
 */
class ResumeSearch extends Resume
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'gender', 'marital_status', 'date_of_birth', 'phone', 'relatives', 'residency_permit_type', 'expiry_date', 'civil_id_card_no', 'kuwait_driving_licences', 'years_of_experience_in_kuwait', 'years_of_experience_in_GCC', 'years_of_experience_in_other', 'when_can_you_start', 'expected_salary', 'do_you_currently_work', 'contact_employer', 'apply_before', 'apply_before_date', 'start_date_1', 'end_date_1', 'start_date_2', 'end_date_2', 'start_date_3', 'end_date_3', 'start_date_4', 'end_date_4', 'salary_1', 'from_1', 'to_1', 'salary_2', 'from_2', 'to_2', 'salary_3', 'from_3', 'to_3', 'salary_4', 'from_4', 'to_4', 'arabic_reading', 'arabic_writing', 'arabic_speaking', 'english_reading', 'english_writing', 'english_speaking', 'other_language_reading', 'other_language_writing', 'other_language_speaking', 'emergency_phone', 'defects', 'date'], 'integer'],
            [['job_title', 'referral', 'name', 'nationality', 'address', 'email', 'relatives_name', 'relatives_position', 'passport_country', 'passport_no', 'sponsor_name', 'kuwait_driving_licences_type', 'certificate_1', 'educational_institution_1', 'certificate_2', 'educational_institution_2', 'certificate_3', 'educational_institution_3', 'certificate_4', 'educational_institution_4', 'company_1', 'address_1', 'company_field_1', 'job_title_1', 'supervisor_name_1', 'supervisor_title_1', 'reason_of_leaving_1', 'company_2', 'address_2', 'company_field_2', 'job_title_2', 'supervisor_name_2', 'supervisor_title_2', 'reason_of_leaving_2', 'company_3', 'address_3', 'company_field_3', 'job_title_3', 'supervisor_name_3', 'supervisor_title_3', 'reason_of_leaving_3', 'company_4', 'address_4', 'company_field_4', 'job_title_4', 'supervisor_name_4', 'supervisor_title_4', 'reason_of_leaving_4', 'other_language_name', 'computer_skills', 'emergency_name', 'hearing_1', 'vision_1', 'speech_1', 'other_1', 'hearing_2', 'vision_2', 'speech_2', 'other_2', 'path'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Resume::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'gender' => $this->gender,
            'marital_status' => $this->marital_status,
            'date_of_birth' => $this->date_of_birth,
            'phone' => $this->phone,
            'relatives' => $this->relatives,
            'residency_permit_type' => $this->residency_permit_type,
            'expiry_date' => $this->expiry_date,
            'civil_id_card_no' => $this->civil_id_card_no,
            'kuwait_driving_licences' => $this->kuwait_driving_licences,
            'years_of_experience_in_kuwait' => $this->years_of_experience_in_kuwait,
            'years_of_experience_in_GCC' => $this->years_of_experience_in_GCC,
            'years_of_experience_in_other' => $this->years_of_experience_in_other,
            'when_can_you_start' => $this->when_can_you_start,
            'expected_salary' => $this->expected_salary,
            'do_you_currently_work' => $this->do_you_currently_work,
            'contact_employer' => $this->contact_employer,
            'apply_before' => $this->apply_before,
            'apply_before_date' => $this->apply_before_date,
            'start_date_1' => $this->start_date_1,
            'end_date_1' => $this->end_date_1,
            'start_date_2' => $this->start_date_2,
            'end_date_2' => $this->end_date_2,
            'start_date_3' => $this->start_date_3,
            'end_date_3' => $this->end_date_3,
            'start_date_4' => $this->start_date_4,
            'end_date_4' => $this->end_date_4,
            'salary_1' => $this->salary_1,
            'from_1' => $this->from_1,
            'to_1' => $this->to_1,
            'salary_2' => $this->salary_2,
            'from_2' => $this->from_2,
            'to_2' => $this->to_2,
            'salary_3' => $this->salary_3,
            'from_3' => $this->from_3,
            'to_3' => $this->to_3,
            'salary_4' => $this->salary_4,
            'from_4' => $this->from_4,
            'to_4' => $this->to_4,
            'arabic_reading' => $this->arabic_reading,
            'arabic_writing' => $this->arabic_writing,
            'arabic_speaking' => $this->arabic_speaking,
            'english_reading' => $this->english_reading,
            'english_writing' => $this->english_writing,
            'english_speaking' => $this->english_speaking,
            'other_language_reading' => $this->other_language_reading,
            'other_language_writing' => $this->other_language_writing,
            'other_language_speaking' => $this->other_language_speaking,
            'emergency_phone' => $this->emergency_phone,
            'defects' => $this->defects,
            'date' => $this->date,
        ]);

        $query->andFilterWhere(['like', 'job_title', $this->job_title])
            ->andFilterWhere(['like', 'referral', $this->referral])
            ->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'nationality', $this->nationality])
            ->andFilterWhere(['like', 'address', $this->address])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'relatives_name', $this->relatives_name])
            ->andFilterWhere(['like', 'relatives_position', $this->relatives_position])
            ->andFilterWhere(['like', 'passport_country', $this->passport_country])
            ->andFilterWhere(['like', 'passport_no', $this->passport_no])
            ->andFilterWhere(['like', 'sponsor_name', $this->sponsor_name])
            ->andFilterWhere(['like', 'kuwait_driving_licences_type', $this->kuwait_driving_licences_type])
            ->andFilterWhere(['like', 'certificate_1', $this->certificate_1])
            ->andFilterWhere(['like', 'educational_institution_1', $this->educational_institution_1])
            ->andFilterWhere(['like', 'certificate_2', $this->certificate_2])
            ->andFilterWhere(['like', 'educational_institution_2', $this->educational_institution_2])
            ->andFilterWhere(['like', 'certificate_3', $this->certificate_3])
            ->andFilterWhere(['like', 'educational_institution_3', $this->educational_institution_3])
            ->andFilterWhere(['like', 'certificate_4', $this->certificate_4])
            ->andFilterWhere(['like', 'educational_institution_4', $this->educational_institution_4])
            ->andFilterWhere(['like', 'company_1', $this->company_1])
            ->andFilterWhere(['like', 'address_1', $this->address_1])
            ->andFilterWhere(['like', 'company_field_1', $this->company_field_1])
            ->andFilterWhere(['like', 'job_title_1', $this->job_title_1])
            ->andFilterWhere(['like', 'supervisor_name_1', $this->supervisor_name_1])
            ->andFilterWhere(['like', 'supervisor_title_1', $this->supervisor_title_1])
            ->andFilterWhere(['like', 'reason_of_leaving_1', $this->reason_of_leaving_1])
            ->andFilterWhere(['like', 'company_2', $this->company_2])
            ->andFilterWhere(['like', 'address_2', $this->address_2])
            ->andFilterWhere(['like', 'company_field_2', $this->company_field_2])
            ->andFilterWhere(['like', 'job_title_2', $this->job_title_2])
            ->andFilterWhere(['like', 'supervisor_name_2', $this->supervisor_name_2])
            ->andFilterWhere(['like', 'supervisor_title_2', $this->supervisor_title_2])
            ->andFilterWhere(['like', 'reason_of_leaving_2', $this->reason_of_leaving_2])
            ->andFilterWhere(['like', 'company_3', $this->company_3])
            ->andFilterWhere(['like', 'address_3', $this->address_3])
            ->andFilterWhere(['like', 'company_field_3', $this->company_field_3])
            ->andFilterWhere(['like', 'job_title_3', $this->job_title_3])
            ->andFilterWhere(['like', 'supervisor_name_3', $this->supervisor_name_3])
            ->andFilterWhere(['like', 'supervisor_title_3', $this->supervisor_title_3])
            ->andFilterWhere(['like', 'reason_of_leaving_3', $this->reason_of_leaving_3])
            ->andFilterWhere(['like', 'company_4', $this->company_4])
            ->andFilterWhere(['like', 'address_4', $this->address_4])
            ->andFilterWhere(['like', 'company_field_4', $this->company_field_4])
            ->andFilterWhere(['like', 'job_title_4', $this->job_title_4])
            ->andFilterWhere(['like', 'supervisor_name_4', $this->supervisor_name_4])
            ->andFilterWhere(['like', 'supervisor_title_4', $this->supervisor_title_4])
            ->andFilterWhere(['like', 'reason_of_leaving_4', $this->reason_of_leaving_4])
            ->andFilterWhere(['like', 'other_language_name', $this->other_language_name])
            ->andFilterWhere(['like', 'computer_skills', $this->computer_skills])
            ->andFilterWhere(['like', 'emergency_name', $this->emergency_name])
            ->andFilterWhere(['like', 'hearing_1', $this->hearing_1])
            ->andFilterWhere(['like', 'vision_1', $this->vision_1])
            ->andFilterWhere(['like', 'speech_1', $this->speech_1])
            ->andFilterWhere(['like', 'other_1', $this->other_1])
            ->andFilterWhere(['like', 'hearing_2', $this->hearing_2])
            ->andFilterWhere(['like', 'vision_2', $this->vision_2])
            ->andFilterWhere(['like', 'speech_2', $this->speech_2])
            ->andFilterWhere(['like', 'other_2', $this->other_2])
            ->andFilterWhere(['like', 'path', $this->path]);

        return $dataProvider;
    }
}
