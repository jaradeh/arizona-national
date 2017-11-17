<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\ProjectImagesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Project Images';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="project-images-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Project Images', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'project_id',
            'path',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
