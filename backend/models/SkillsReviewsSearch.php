<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\SkillsReviews;

/**
 * SkillsReviewsSearch represents the model behind the search form about `backend\models\SkillsReviews`.
 */
class SkillsReviewsSearch extends SkillsReviews
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'lang_id'], 'integer'],
            [['skill_name', 'skill_title', 'review_name', 'review_title'], 'safe'],
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
        $query = SkillsReviews::find();

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
            'lang_id' => $this->lang_id,
        ]);

        $query->andFilterWhere(['like', 'skill_name', $this->skill_name])
            ->andFilterWhere(['like', 'skill_title', $this->skill_title])
            ->andFilterWhere(['like', 'review_name', $this->review_name])
            ->andFilterWhere(['like', 'review_title', $this->review_title]);

        return $dataProvider;
    }
}
