<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\ProjectImages */

$this->title = 'Create Project Images';
$this->params['breadcrumbs'][] = ['label' => 'Project Images', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="project-images-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
