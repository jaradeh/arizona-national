<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "careers".
 *
 * @property integer $id
 * @property string $name
 * @property string $description
 * @property string $location
 * @property string $experience
 * @property integer $date
 * @property integer $lang_id
 */
class Careers extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'careers';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'description', 'location', 'experience', 'date'], 'required'],
            [['date', 'lang_id'], 'integer'],
            [['name', 'description', 'location', 'experience'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'description' => 'Description',
            'location' => 'Location',
            'experience' => 'Experience',
            'date' => 'Date',
            'lang_id' => 'Lang ID',
        ];
    }
}
