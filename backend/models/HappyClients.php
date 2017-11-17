<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "happy_clients".
 *
 * @property integer $id
 * @property string $link
 * @property string $path
 */
class HappyClients extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'happy_clients';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [[], 'required'],
            [['link', 'path'], 'string', 'max' => 255],
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
            'link' => 'Website',
            'path' => 'Logo',
        ];
    }
}
