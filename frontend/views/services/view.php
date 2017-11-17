<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use backend\models\Departments;

$department = Departments::find()->where(['id' => $model->department_id])->one();
/* @var $this yii\web\View */
/* @var $model backend\models\Services */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Services', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<!-- Inner Banner -->
<div class="inner-banner overlay-dark" data-enllax-ratio="-.3" style="background: url(/images/banner/banner_sector_construction.jpg) 50% 0% no-repeat fixed;">
    <div class="container">
        <div class="heading-breadcrumbs">
            <h2>Projects </h2>
            <ul class="theme-breadcrumb">
                <li><a href="#">Home</a></li>
                <li><?php echo $model->name ?></li>
            </ul>
        </div>
    </div>
</div>
<!-- Inner Banner -->

<!-- Main Content -->
<main id="main-content">

    <!-- Project Detail -->
    <div class="theme-padding project-detail-holder">
        <div class="container">

            <!-- Project Images -->
            <div class="project-images mb-40">
                <figure class="p-detail-img"><img src="/images/services/<?php echo $model->path ?>" alt=""></figure>
            </div>
            <!-- Project Images -->


            


            <!-- Detail -->
            <div class="project-detail">
                <div  class="row">
                    <div class="col-sm-8">
                        <div class="project-info">
                            <div class="detail-info-widget">
                                <h3>Service DESCRIPTION</h3>
                                <p><?php echo $model->description ?></p>
                            </div>
                            <div class="detail-info-widget">
                                <h3>PROJECT CHALLENGE</h3>
                                <p>It's time to put on makeup. It's time to dress up right. It's time to raise the curtain on the Muppet Show tonight. The mate was a mighty sailin' man the Skipper brave and sure.</p>
                                <ul class="check-list">
                                    <li>Five passengers set sail that day for a three hour</li>
                                    <li>Till the one day when the lady met this fellow</li>
                                    <li>Family that's the way we all became the brady</li>
                                    <li>Champion the cause of the innocent career</li>
                                    <li>The powerless in a world of criminals operate</li>
                                    <li>Now were up in the big leagues getting' turn</li>
                                </ul>
                            </div>
                            <div class="detail-info-widget">
                                <h3>WHAT WE DID</h3>
                                <p>Then along come two they got nothin' but their jeans. Texas tea. Knight Rider: A shadowy flight into the dangerous world of a man who does not exist. The first mate and his Skipper too will do their very best to make the others comfortable in their tropic island nest.</p>
                            </div>
                            <div class="detail-info-widget">
                                <h3>RESULT</h3>
                                <p>Then along come two they got nothin' but their jeans. Texas tea. Knight Rider: A shadowy flight into the dangerous world of a man who does not exist. The first mate and his Skipper too will do their very best to make the others comfortable in their tropic island nest.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="project-info">
                            <div class="detail-info-widget">
                                <h3>PROJECT INFO</h3>
                                <p>These men promptly escaped from a maximum security stockade to the Los Angeles underground. Love exciting and new. Come aboard were expecting you. Love life's sweetest reward Let it flow it floats back to you. Well the first thing you know ol' Jeds a mil lionaire infolk said Jed move away.</p>
                                <ul class="project-info-list">
                                    <li>
                                        <h4>CLIENTS</h4>
                                        <p><?php echo $model->client ?></p>
                                    </li>
                                    <li>
                                        <h4>SIZE</h4>
                                        <p><?php echo $model->size ?></p>
                                    </li>
                                    <li>
                                        <h4>suppliers</h4>
                                        <p><?php echo $model->suppliers ?></p>
                                    </li>
                                    <li>
                                        <h4>department</h4>
                                        <p><?php echo $department->name ?></p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Detail -->

        </div>
    </div>
    <!-- Project Detail -->

</main>
<!-- Main Content -->