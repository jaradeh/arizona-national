<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "reviews".
 *
 * @property integer $id
 * @property integer $lang_id
 * @property integer $name
 * @property string $path
 * @property string $title
 * @property string $description
 */
class Reviews extends \yii\db\ActiveRecord {

    /**
     * @inheritdoc
     */
    public static function tableName() {
        return 'reviews';
    }

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [['lang_id', 'name', 'title', 'description'], 'required'],
            [['lang_id'], 'integer'],
            [['path', 'title', 'description','name'], 'string', 'max' => 255],
            [['path'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png ,jpg ,jpeg', 'maxFiles' => 1],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels() {
        return [
            'id' => 'ID',
            'lang_id' => 'Language',
            'name' => 'Name',
            'path' => 'Image',
            'title' => 'Title',
            'description' => 'Description',
        ];
    }

}
