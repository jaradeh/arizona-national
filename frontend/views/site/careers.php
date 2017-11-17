<?php
/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Careers';
$this->params['breadcrumbs'][] = $this->title;
?>

<!-- Inner Banner -->
<div class="inner-banner overlay-dark" data-enllax-ratio="-.3" style="background: url(/images/banner/caai-easa-aircraft-manufacturer-and-organisation-approval.jpg) no-repeat fixed;">
    <div class="container">
        <div class="heading-breadcrumbs">
            <h2><?= yii::t('app', 'Join Our Team'); ?></h2>
        </div>
    </div>
</div>
<!-- Inner Banner -->

<!-- Main Content -->
<main id="main-content">

    <!-- Contact -->
    <div class="theme-padding">
        <div class="container">
            <?php if (Yii::$app->session->hasFlash('success')): ?>
                <div class="alert alert-success alert-dismissable">
                    <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                    <h5><i class="icon fa fa-check"></i> Successfully Sent !</h5>
                    <?= Yii::$app->session->getFlash('success') ?>
                </div>
            <?php endif; ?>
            <?php if (Yii::$app->session->hasFlash('error')): ?>
                <div class="alert alert-danger alert-dismissable">
                    <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                    <h5><i class="icon fa fa-warning"></i> Fail !</h5>
                    <?= Yii::$app->session->getFlash('error') ?>
                </div>
            <?php endif; ?>
            <!-- Qutauion -->
            <div class="contact-qoutaion">
            </div>
            <!-- Qutauion -->

            <!-- Contact Detail -->
            <div class="contact-detail">
                <div class="row">

                    <!-- Form -->
                    <div class="col-lg-6 col-xs-12">
                        <div class="contact-form contact-widget">
                            <h3>To to join <span class="theme-color"><?= yii::t('app', 'Arizona National'); ?></span> team </h3>
                            <p>you even click on the career that suites you or click <span class="theme-color"> Apply</span> button</p>
                            <br />
                            <a href="/resume/create" class=" btn lg bold-color profile_btn">Apply</a>
                        </div>
                    </div>
                    <!-- Form -->

                    <!-- Address Figure -->
                    <div class="col-lg-6 col-xs-12">
                        <div class="contact-widget">
                            <h3><?= yii::t('app', 'Our Available'); ?> <span class="theme-color"><?= yii::t('app', 'Positions'); ?></span></h3>
                            <?php foreach ($careers as $career_data => $career) { ?>
                                <div class="reviews-figure">
                                    <div class="head">
                                        <h4><?php echo $career->name ?></h4>
                                        <span><?php echo date('d.m.Y', $career->date) ?></span>
                                    </div>
                                    <p><?php echo $career->description ?></p>
                                    <br />
                                    <small class="pull-left"><i class="icon icon-location"></i> <?php echo $career->location ?></small>
                                    <small class="pull-right"><i class="icon icon-magnifying-glass"></i> <?php echo $career->experience ?></small>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                    <!-- Address Figure -->

                </div>
            </div>
            <!-- Contact Detail -->

        </div>
    </div>
    <!-- Contact -->

</main>
<!-- Main Content -->