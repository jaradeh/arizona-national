<?php
/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use yii\helpers\Html;

$this->title = 'Resume';
$this->params['breadcrumbs'][] = $this->title;



$session = Yii::$app->session;
$lang = $session->get('language');
$lang_id = $session['language_id'];

if ($lang_id == 1) {
    $text_direction = "left";
} else {
    $text_direction = "right";
}
?>
<style>
    body{
        font-family: "Helvetica Neue", Helvetica, Arial, sans-serif !important;
        text-align: <?php echo $text_direction; ?>;
    }
</style>
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
            <div class="col-lg-12 col-xs-12">
                <div class="contact-form contact-widget">
                    <h3><?= yii::t('app', 'Be Part Of The Community'); ?> <span class="theme-color"><?= yii::t('app', 'Join Arizona Team'); ?></span> </h3>
                    <p><?= yii::t('app', 'Fill up the bellow form and we will get back to you as soon as possible !'); ?></p>
                </div>
            </div>
            <!-- Qutauion -->

            <!-- Contact Detail -->
            <div class="contact-detail">
                <div class="row">
                    <!-- Form -->
                    <div class="col-lg-12 col-xs-12">
                        <?=
                        $this->render('_form', [
                            'model' => $model,
                        ])
                        ?>
                    </div>
                    <!-- Form -->
                </div>
            </div>
            <!-- Contact Detail -->

        </div>
    </div>
    <!-- Contact -->

</main>
<!-- Main Content -->