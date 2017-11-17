<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "project_category".
 *
 * @property integer $id
 * @property string $name
 * @property integer $lang_id
 */
class ProjectCategory extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'project_category';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['lang_id'], 'integer'],
            [['name'], 'string', 'max' => 255]
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
            'lang_id' => 'Lang ID',
        ];
    }
}
