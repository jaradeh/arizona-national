<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "sister_company".
 *
 * @property integer $id
 * @property string $path
 * @property string $name
 * @property string $title
 * @property string $description
 * @property string $link
 * @property integer $lang_id
 */
class SisterCompany extends \yii\db\ActiveRecord {

    /**
     * @inheritdoc
     */
    public static function tableName() {
        return 'sister_company';
    }

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [['name', 'title', 'description', 'link'], 'required'],
            [['description'], 'string'],
            [['lang_id'], 'integer'],
            [['path', 'name', 'title', 'link'], 'string', 'max' => 255],
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
            'title' => 'Title',
            'description' => 'Description',
            'link' => 'Link',
            'lang_id' => 'Lang ID',
        ];
    }

}
