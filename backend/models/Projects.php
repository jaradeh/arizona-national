<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "projects".
 *
 * @property integer $id
 * @property string $name
 * @property string $description
 * @property string $location
 * @property string $type
 * @property string $duration
 * @property string $size
 * @property string $client
 * @property string $path
 * @property integer $date
 * @property integer $lang_id
 * @property integer $project_info_title
 * @property integer $project_challenge_title
 * @property integer $what_we_did_title
 * @property integer $result_title
 * @property integer $project_info
 * @property integer $project_challenge
 * @property integer $what_we_did
 * @property integer $result
 * @property integer $banner_name_1
 * @property integer $banner_title_1
 * @property integer $banner_icon_1
 * @property integer $banner_number_1
 * @property integer $banner_name_2
 * @property integer $banner_title_2
 * @property integer $banner_icon_2
 * @property integer $banner_number_2
 * @property integer $banner_name_3
 * @property integer $banner_title_3
 * @property integer $banner_icon_3
 * @property integer $banner_number_3
 * @property integer $banner_name_4
 * @property integer $banner_title_4
 * @property integer $banner_icon_4
 * @property integer $banner_number_4
 * @property integer $project_category_id
 */
class Projects extends \yii\db\ActiveRecord {

    /**
     * @inheritdoc
     */
    public static function tableName() {
        return 'projects';
    }

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [['name', 'description', 'location', 'type', 'duration', 'size', 'client', 'date'], 'required'],
            [['banner_name_1','banner_title_1','banner_name_2','banner_title_2','banner_name_3','banner_title_3','banner_name_4','banner_title_4','description','project_info_title','project_challenge_title','what_we_did_title','result_title','project_info','project_challenge','what_we_did','result'], 'string'],
            [['date', 'lang_id', 'banner_number_1', 'banner_number_2', 'banner_number_3', 'banner_number_4','project_category_id'], 'integer'],
            [['name', 'location', 'type', 'duration', 'size', 'client', 'path'], 'string', 'max' => 255],
            [['path','banner_icon_1','banner_icon_2','banner_icon_3','banner_icon_4'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png ,jpg ,jpeg', 'maxFiles' => 1],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels() {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'description' => 'Description',
            'location' => 'Location',
            'type' => 'Type',
            'duration' => 'Duration',
            'size' => 'Size',
            'client' => 'Client',
            'path' => 'Project Image',
            'date' => 'Date',
            'lang_id' => 'Language',
            'project_category_id' => 'Project Category',
        ];
    }

}
