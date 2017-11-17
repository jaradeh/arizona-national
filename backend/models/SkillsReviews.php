<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "skills_reviews".
 *
 * @property integer $id
 * @property integer $lang_id
 * @property string $skill_name
 * @property string $skill_title
 * @property string $review_name
 * @property string $review_title
 */
class SkillsReviews extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'skills_reviews';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['lang_id', 'skill_name', 'skill_title', 'review_name', 'review_title'], 'required'],
            [['lang_id'], 'integer'],
            [['skill_name', 'skill_title', 'review_name', 'review_title'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'lang_id' => 'Lang ID',
            'skill_name' => 'Skill Name',
            'skill_title' => 'Skill Title',
            'review_name' => 'Review Name',
            'review_title' => 'Review Title',
        ];
    }
}
