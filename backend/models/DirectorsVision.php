<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "directors_vision".
 *
 * @property integer $id
 * @property string $path
 * @property string $name
 * @property string $message
 * @property integer $lang_id
 */
class DirectorsVision extends \yii\db\ActiveRecord {

    /**
     * @inheritdoc
     */
    public static function tableName() {
        return 'directors_vision';
    }

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [['name', 'message'], 'required'],
            [['lang_id'], 'integer'],
            [['path', 'name', 'message'], 'string', 'max' => 255],
            [['path'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png ,jpg ,jpeg', 'maxFiles' => 1],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels() {
        return [
            'id' => 'ID',
            'path' => 'Path',
            'name' => 'Name',
            'message' => 'Message',
            'lang_id' => 'Language',
        ];
    }

}
