<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "company_profile".
 *
 * @property integer $id
 * @property integer $lang_id
 * @property string $path
 */
class CompanyProfile extends \yii\db\ActiveRecord {

    /**
     * @inheritdoc
     */
    public static function tableName() {
        return 'company_profile';
    }

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [['lang_id'], 'integer'],
            [['path'], 'string', 'max' => 255],
            [['path'], 'file', 'skipOnEmpty' => true, 'extensions' => 'pdf', 'maxFiles' => 1],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels() {
        return [
            'id' => 'ID',
            'lang_id' => 'Lang ID',
            'path' => 'Path',
        ];
    }

}
