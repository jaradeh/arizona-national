<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\HomeDataBannerSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Home Data Banners';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <?php echo $this->title ?>
            <small>Version 2.0</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active"><?php echo $this->title ?></li>
        </ol>
        <br />
        <?= Html::a('Create Home Data Banner', ['create'], ['class' => 'btn btn-success']) ?>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Info boxes -->
        <div class="row">
            <div class="col-md-12 col-sm-8 col-xs-12">
                <?=
                GridView::widget([
                    'dataProvider' => $dataProvider,
                    'filterModel' => $searchModel,
                    'columns' => [
                        ['class' => 'yii\grid\SerialColumn'],
                        'id',
                        'name_1',
                        'title_1',
                        'icon_1',
                        'number_1',
                        // 'name_2',
                        // 'title_2',
                        // 'icon_2',
                        // 'number_2',
                        // 'name_3',
                        // 'title_3',
                        // 'icon_3',
                        // 'number_3',
                        // 'name_4',
                        // 'title_4',
                        // 'icon_4',
                        // 'number_4',
                        ['class' => 'yii\grid\ActionColumn'],
                    ],
                ]);
                ?>
            </div>
            <!-- /.col -->
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->