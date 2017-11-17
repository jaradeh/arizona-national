<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\HomeDataBanner;

/**
 * HomeDataBannerSearch represents the model behind the search form about `backend\models\HomeDataBanner`.
 */
class HomeDataBannerSearch extends HomeDataBanner
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'number_1', 'number_2', 'number_3', 'number_4'], 'integer'],
            [['name_1', 'title_1', 'icon_1', 'name_2', 'title_2', 'icon_2', 'name_3', 'title_3', 'icon_3', 'name_4', 'title_4', 'icon_4'], 'safe'],
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
        $query = HomeDataBanner::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'number_1' => $this->number_1,
            'number_2' => $this->number_2,
            'number_3' => $this->number_3,
            'number_4' => $this->number_4,
        ]);

        $query->andFilterWhere(['like', 'name_1', $this->name_1])
            ->andFilterWhere(['like', 'title_1', $this->title_1])
            ->andFilterWhere(['like', 'icon_1', $this->icon_1])
            ->andFilterWhere(['like', 'name_2', $this->name_2])
            ->andFilterWhere(['like', 'title_2', $this->title_2])
            ->andFilterWhere(['like', 'icon_2', $this->icon_2])
            ->andFilterWhere(['like', 'name_3', $this->name_3])
            ->andFilterWhere(['like', 'title_3', $this->title_3])
            ->andFilterWhere(['like', 'icon_3', $this->icon_3])
            ->andFilterWhere(['like', 'name_4', $this->name_4])
            ->andFilterWhere(['like', 'title_4', $this->title_4])
            ->andFilterWhere(['like', 'icon_4', $this->icon_4]);

        return $dataProvider;
    }
}
