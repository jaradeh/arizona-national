<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "skills".
 *
 * @property integer $id
 * @property integer $lang_id
 * @property string $name
 * @property integer $percentage
 */
class Skills extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'skills';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['lang_id', 'name', 'percentage'], 'required'],
            [['lang_id', 'percentage'], 'integer'],
            [['name'], 'string', 'max' => 25],
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
            'name' => 'Name',
            'percentage' => 'Percentage',
        ];
    }
}
