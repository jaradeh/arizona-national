<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use backend\models\ProjectImages;

$find_images = ProjectImages::find()->where(['project_id' => $model->id])->all();
$i = 0;
/* @var $this yii\web\View */
/* @var $model backend\models\Projects */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Projects', 'url' => ['index']];
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
                <div id="first-slider">
                    <div id="carousel-example-generic" class="carousel slide carousel-fade">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                        </ol>
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                            <!-- Item 1 -->
                            <?php foreach ($find_images as $image_info => $image) { ?>
                                <?php
                                $i++;
                                if ($i == 1) {
                                    $active = "active";
                                } else {
                                    $active = "";
                                }
                                ?>
                                <div class="item <?php echo $active ?> slide1">
                                    <div class="row">
                                        <div class="container">
                                            <div class="col-md-12 ">
                                                <img style="width:100%;"  data-animation="animated zoomInLeft" src="/images/projects/<?php echo $image->image ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                            <?php } ?>
                        </div>
                        <!-- End Wrapper for slides-->
                        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                            <i class="fa fa-angle-left"></i><span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                            <i class="fa fa-angle-right"></i><span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
            <!-- Project Images -->


            <!-- Statistics Facts -->
            <section class="statistics-facts theme-padding">
                <div class="container p-relative">
                    <ul class="facts-acounter" id="theme-counters">
                        <li>
                            <h3><?php echo $model->banner_name_1 ?> <span><?php echo $model->banner_title_1 ?></span></h3>
                            <img class="fact-icon" src="/images/projects/<?php echo $model->banner_icon_1 ?>" alt="<?php echo $model->name ?>">
                            <h2 class="timer" id="chapters-1" data-to="<?php echo $model->banner_number_1 ?>" data-speed="3000"><?php echo $model->banner_number_1 ?></h2>
                        </li>
                        <li>
                            <h3><?php echo $model->banner_name_2 ?> <span><?php echo $model->banner_title_2 ?></span></h3>
                            <img class="fact-icon" src="/images/projects/<?php echo $model->banner_icon_2 ?>" alt="<?php echo $model->name ?>">
                            <h2 class="timer" id="chapters-2" data-to="<?php echo $model->banner_number_2 ?>" data-speed="4000"><?php echo $model->banner_number_2 ?></h2>
                        </li>
                        <li>
                            <h3><?php echo $model->banner_name_3 ?> <span><?php echo $model->banner_title_3 ?></span></h3>
                            <img class="fact-icon" src="/images/projects/<?php echo $model->banner_icon_3 ?>" alt="<?php echo $model->name ?>">
                            <h2 class="timer" data-to="<?php echo $model->banner_number_3 ?>" data-speed="5000"><?php echo $model->banner_number_3 ?></h2><span>+</span>
                        </li>
                        <li>
                            <h3><?php echo $model->banner_name_4 ?> <span><?php echo $model->banner_title_4 ?></span></h3>
                            <img class="fact-icon" src="/images/projects/<?php echo $model->banner_icon_4 ?>" alt="<?php echo $model->name ?>">
                            <h2 class="timer" data-to="<?php echo $model->banner_number_4 ?>" data-speed="6000"><?php echo $model->banner_number_4 ?></h2>
                        </li>
                    </ul>
                </div>
            </section>
            <br /><br /><br />
            <!-- Statistics Facts -->


            <!-- Detail -->
            <div class="project-detail">
                <div  class="row">
                    <div class="col-sm-8">
                        <div class="project-info">
                            <div class="detail-info-widget">
                                <h3>PROJECT DESCRIPTION</h3>
                                <p><?php echo $model->description ?></p>
                            </div>
                            <div class="detail-info-widget">
                                <h3><?php echo $model->project_challenge_title ?></h3>
                                <p><?php echo $model->project_challenge ?></p>
                            </div>
                            <div class="detail-info-widget">
                                <h3><?php echo $model->what_we_did_title ?></h3>
                                <p><?php echo $model->what_we_did ?></p>
                            </div>
                            <div class="detail-info-widget">
                                <h3><?php echo $model->result_title ?></h3>
                                <p><?php echo $model->result ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="project-info">
                            <div class="detail-info-widget">
                                <h3><?php echo $model->project_info_title ?></h3>
                                <p><?php echo $model->project_info ?></p>
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
                                        <h4>DURATION</h4>
                                        <p><?php echo $model->duration ?></p>
                                    </li>
                                    <li>
                                        <h4>TYPE</h4>
                                        <p><?php echo $model->type ?></p>
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