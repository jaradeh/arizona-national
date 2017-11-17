<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "team".
 *
 * @property integer $id
 * @property string $path
 * @property string $name
 * @property string $name_arabic
 * @property string $position
 * @property string $position_arabic
 * @property string $description
 * @property string $description_arabic
 * @property string $facebook
 * @property string $linkedin
 * @property string $twitter
 * @property string $instagram
 */
class Team extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'team';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'name_arabic', 'position', 'position_arabic', 'description', 'description_arabic'], 'required'],
            [['path', 'name', 'name_arabic', 'position', 'position_arabic', 'description', 'description_arabic', 'facebook', 'linkedin', 'twitter', 'instagram'], 'string', 'max' => 255],
            [['path'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png ,jpg ,jpeg', 'maxFiles' => 1],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'path' => 'Image ',
            'name' => 'Name',
            'name_arabic' => 'Arabic Name',
            'position' => 'Position',
            'position_arabic' => 'Arabic Position',
            'description' => 'Description',
            'description_arabic' => 'Arabic Description',
            'facebook' => 'Facebook',
            'linkedin' => 'Linkedin',
            'twitter' => 'Twitter',
            'instagram' => 'Instagram',
        ];
    }
}
