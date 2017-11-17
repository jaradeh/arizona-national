<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "home_data_banner".
 *
 * @property integer $id
 * @property string $name_1
 * @property string $title_1
 * @property string $icon_1
 * @property integer $number_1
 * @property string $name_2
 * @property string $title_2
 * @property string $icon_2
 * @property integer $number_2
 * @property string $name_3
 * @property string $title_3
 * @property string $icon_3
 * @property integer $number_3
 * @property string $name_4
 * @property string $title_4
 * @property string $icon_4
 * @property integer $number_4
 * @property integer $lang_id
 */
class HomeDataBanner extends \yii\db\ActiveRecord {

    /**
     * @inheritdoc
     */
    public static function tableName() {
        return 'home_data_banner';
    }

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [['name_1', 'title_1', 'number_1', 'name_2', 'title_2', 'number_2', 'name_3', 'title_3', 'number_3', 'name_4', 'title_4', 'number_4', 'lang_id'], 'required'],
            [['number_1', 'number_2', 'number_3', 'number_4','lang_id'], 'integer'],
            [['name_1', 'title_1', 'icon_1', 'name_2', 'title_2', 'icon_2', 'name_3', 'title_3', 'icon_3', 'name_4', 'title_4', 'icon_4'], 'string', 'max' => 255],
            [['icon_1', 'icon_2', 'icon_3', 'icon_4'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png ,jpg ,jpeg', 'maxFiles' => 1],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels() {
        return [
            'id' => 'ID',
            'name_1' => 'Name 1',
            'title_1' => 'Title 1',
            'icon_1' => 'Icon 1',
            'number_1' => 'Number 1',
            'name_2' => 'Name 2',
            'title_2' => 'Title 2',
            'icon_2' => 'Icon 2',
            'number_2' => 'Number 2',
            'name_3' => 'Name 3',
            'title_3' => 'Title 3',
            'icon_3' => 'Icon 3',
            'number_3' => 'Number 3',
            'name_4' => 'Name 4',
            'title_4' => 'Title 4',
            'icon_4' => 'Icon 4',
            'number_4' => 'Number 4',
            'lang_id' => 'Language',
        ];
    }

}
