<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "social_media".
 *
 * @property integer $id
 * @property string $facebook
 * @property string $twitter
 * @property string $instagram
 * @property string $youtube
 * @property string $linkedin
 */
class SocialMedia extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'social_media';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['facebook'], 'required'],
            [['facebook', 'twitter', 'instagram', 'youtube', 'linkedin'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'facebook' => 'Facebook',
            'twitter' => 'Twitter',
            'instagram' => 'Instagram',
            'youtube' => 'Youtube',
            'linkedin' => 'Linkedin',
        ];
    }
}
