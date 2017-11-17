<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\AppsCountriesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Apps Countries';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="apps-countries-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Apps Countries', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'country_code',
            'country_name',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
