<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "project_images".
 *
 * @property integer $id
 * @property integer $project_id
 * @property string $image
 */
class ProjectImages extends \yii\db\ActiveRecord {

    /**
     * @inheritdoc
     */
    public static function tableName() {
        return 'project_images';
    }

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [['image'], 'string', 'max' => 255],
            [['image'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png ,jpg ,jpeg', 'maxFiles' => 4],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels() {
        return [
            'id' => 'ID',
            'project_id' => 'Project ID',
            'path' => 'Image',
        ];
    }

}
