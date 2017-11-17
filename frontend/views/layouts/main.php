<?php
/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use yii\bootstrap\ActiveForm;
use frontend\models\SignupForm;
use backend\models\StoreCategory;
use backend\models\Store;
use backend\models\SocialMedia;
use backend\models\Projects;

$social_media = SocialMedia::find()->one();

$session = Yii::$app->session;
$lang = $session['language_id'];

if ($lang == "2") {
    $lang_words = "AR";
    $font_family = "cairo_regular";
} else {
    $lang_words = "EN";
    $font_family = "poiret";
}

$projects_footer = Projects::find()->where(['lang_id' => $lang])->limit(2)->all();

$home = "";
$about = "";
$services = "";
$projects = "";
$careers = "";
$contact = "";
$resume = "";

$action = Yii::$app->controller->action->id;
if ($action == "index") {
    $home = "active";
} else if ($action == "about") {
    $about = "active";
} else if ($action == "services") {
    $services = "active";
} else if ($action == "projects") {
    $projects = "active";
} else if ($action == "careers") {
    $careers = "active";
} else if ($action == "contact") {
    $contact = "active";
} else if ($action == "create") {
    $action = "resume/create";
}


$this->title = "Arizona National";
AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" type="image/png" href="/images/fav.png"/>
        <?= Html::csrfMetaTags() ?>
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
    <body style="font-family: <?php echo $font_family; ?>">
        <?php $this->beginBody() ?>

        <!-- Header -->
        <header class="header">

            <!-- Top bar -->
            <div class="topbar">
                <div class="container">
                    <div class="social-icons">
                        <ul>
                            <?php if (isset($social_media->facebook) && $social_media->facebook != "") { ?>
                                <li><a href="<?php echo $social_media->facebook; ?>" target="_blank"><i class="icon-facebook"></i></a></li>
                            <?php } ?>
                            <?php if (isset($social_media->twitter) && $social_media->twitter != "") { ?>
                                <li><a href="<?php echo $social_media->twitter; ?>" target="_blank"><i class="icon-twitter"></i></a></li>
                            <?php } ?>
                            <?php if (isset($social_media->linkedin) && $social_media->linkedin != "") { ?>
                                <li><a href="<?php echo $social_media->linkedin; ?>" target="_blank"><i class="icon-linkedin2"></i></a></li>
                            <?php } ?>
                            <?php if (isset($social_media->instagram) && $social_media->instagram != "") { ?>
                                <li><a href="<?php echo $social_media->instagram; ?>" target="_blank"><i class="icon-instagram"></i></a></li>
                            <?php } ?>
                            <?php if (isset($social_media->youtube) && $social_media->youtube != "") { ?>
                                <li><a href="<?php echo $social_media->youtube; ?>" target="_blank"><i class="icon-youtube"></i></a></li>
                            <?php } ?>
                        </ul>
                    </div>
                    <div class="address-list">
                        <ul>
                            <li><i class="icon-location"></i>Ardhiya Industrial Area (6) – Block 1 – Building 98</li>
                            <li><i class="icon-closed-envelope"></i><a id="home_head_email_a" href="mailto:info@alghanim-group.com?Subject=Hello" target="_top">info@alghanim-group.com</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Top bar -->

            <!-- Nav HOlder -->
            <div class="nav-holder">
                <div class="container p-relative">

                    <!-- Logo -->
                    <div class="logo">
                        <a class="logo-1 " href="/"><img src="/images/logo-1.png" alt=""></a>
                        <a class="logo-2 " href="/"><img src="/images/logo-2.png" alt=""></a>
                    </div>
                    <!-- Logo -->

                    <!-- Responsive nav -->
                    <a class="toggleMenu" href="#"><i class="icon-navicon"></i></a>
                    <!-- Responsive nav -->

                    <!-- Search And Cart -->
                    <ul class="search-nd-cart">

                        <li class="cart-dropdown">
                            <a id="open-cart-modal" class="btn-cart"><?php echo $lang_words ?></a>
                            <div class="cart-items"> 
                                <ul class="cart-list">
                                    <li>
                                        <a class="flag" href="/lang?language=en-US&action=<?php echo $action; ?>"><img src="/images/flag/en.png" alt="image description"></a>
                                    </li>
                                    <li>
                                        <a class="flag" href="/lang?language=ar-AR&action=<?php echo $action; ?>"><img src="/images/flag/ar.png" alt="image description"></a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                    <!-- Search And Cart -->

                    <!-- Navigaton -->
                    <nav class="nav-list dropdowns">
                        <ul>
                            <?php if ($lang == 1) { ?>
                                <li class="<?php echo $home ?>"><a href="/"><?= yii::t('app', 'home'); ?></a></li>
                                <li class="<?php echo $about ?>"><a href="/about"><?= yii::t('app', 'about'); ?></a></li>
                                <li class="<?php echo $services ?>"><a href="/services"><?= yii::t('app', 'services'); ?></a></li>
                                <li class="<?php echo $projects ?>"><a href="/projects"><?= yii::t('app', 'projects'); ?></a></li>
                                <li class="<?php echo $contact ?>"><a href="/contact"><?= yii::t('app', 'contact us'); ?></a></li>
                                <li class="<?php echo $careers ?>"><a href="/careers"><?= yii::t('app', 'careers'); ?></a></li>
                            <?php } else { ?>
                                <li class="<?php echo $careers ?>"><a href="/careers"><?= yii::t('app', 'careers'); ?></a></li>
                                <li class="<?php echo $contact ?>"><a href="/contact"><?= yii::t('app', 'contact us'); ?></a></li>
                                <li class="<?php echo $projects ?>"><a href="/projects"><?= yii::t('app', 'projects'); ?></a></li>
                                <li class="<?php echo $services ?>"><a href="/services"><?= yii::t('app', 'services'); ?></a></li>
                                <li class="<?php echo $about ?>"><a href="/about"><?= yii::t('app', 'about'); ?></a></li>
                                <li class="<?php echo $home ?>"><a href="/"><?= yii::t('app', 'home'); ?></a></li>
                            <?php } ?>
                        </ul>
                    </nav>
                    <!-- Navigaton -->

                </div>
            </div>
            <!-- Nav HOlder -->

        </header>
        <!-- Header -->


        <?= $content ?>



        <!-- Footer -->
        <footer id="footer">

            <!-- Pruchase Theme -->
            <div class="pruchase-theme">
                <div class="container">
                    <h3><?= yii::t('app', 'Would you like to know more about'); ?> <Span><?= yii::t('app', 'Arizona National'); ?>.</Span></h3>
                    <a class="btn lg dark bold-color" href="/about"><?= yii::t('app', 'read more'); ?></a>
                </div>
            </div>
            <!-- Pruchase Theme -->

            <!-- Footer COlumns -->
            <div class="footer-colums">
                <div class="container">
                    <div class="row no-gutters">

                        <!-- About Widget -->
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 xs-full-width">
                            <div class="footer-widget about-widget">
                                <h3><?= yii::t('app', 'Arizona National'); ?> <span></span></h3>
                                <figure style="border:0px solid rgba(0,0,0,0.4) !important;"><img src="/images/footer_logo.png" alt=""></figure>
                                <p><a href="/about">In 2006, Our Co-Founders decided to enter the Kuwaiti market in a new pioneered</a></p>
                                <div class="social-icons">
                                    <ul>
                                        <?php if (isset($social_media->facebook) && $social_media->facebook != "") { ?>
                                            <li><a href="<?php echo $social_media->facebook; ?>" target="_blank"><i class="icon-facebook"></i></a></li>
                                        <?php } ?>
                                        <?php if (isset($social_media->twitter) && $social_media->twitter != "") { ?>
                                            <li><a href="<?php echo $social_media->twitter; ?>" target="_blank"><i class="icon-twitter"></i></a></li>
                                        <?php } ?>
                                        <?php if (isset($social_media->linkedin) && $social_media->linkedin != "") { ?>
                                            <li><a href="<?php echo $social_media->linkedin; ?>" target="_blank"><i class="icon-linkedin2"></i></a></li>
                                        <?php } ?>
                                        <?php if (isset($social_media->instagram) && $social_media->instagram != "") { ?>
                                            <li><a href="<?php echo $social_media->instagram; ?>" target="_blank"><i class="icon-instagram"></i></a></li>
                                        <?php } ?>
                                        <?php if (isset($social_media->youtube) && $social_media->youtube != "") { ?>
                                            <li><a href="<?php echo $social_media->youtube; ?>" target="_blank"><i class="icon-youtube"></i></a></li>
                                        <?php } ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- About Widget -->

                        <!-- News Widget -->
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 xs-full-width">
                            <div class="footer-widget latest-news">
                                <h3><?= yii::t('app', 'Latest'); ?> <span><?= yii::t('app', 'Projects'); ?></span></h3>
                                <ul class="latest-news-list">
                                    <?php foreach ($projects_footer as $project_footer => $project_footer_data) { ?>
                                        <li>
                                            <span><i><?php echo date('d', $project_footer_data->date) ?></i><?php echo date('M', $project_footer_data->date) ?></span>
                                            <div class="">
                                                <p><a href="/projects/<?php echo $project_footer_data->id ?>"><?php echo substr($project_footer_data->description, 0, 70) ?></a></p>
                                            </div>
                                        </li>
                                    <?php } ?>
                                </ul>
                                <a class="read-more" href="#">+ More News</a>
                            </div>
                        </div>
                        <!-- News Widget -->

                        <!-- About Widget -->
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            <div class="footer-widget address-figure">
                                <h3>About <span>Us</span></h3>
                                <ul class="address-list">
                                    <li>
                                        <span>Address:</span>
                                        <div>
                                            <p>Ardhiya Industrial Area (6) – Block 1 – Building 98</p>
                                        </div>
                                    </li>
                                    <li>
                                        <span>Phone:</span>
                                        <div>
                                            <p>+965 24 330 085 - Office</p>
                                        </div>
                                    </li>
                                    <li>
                                        <span>Email:</span>
                                        <div>
                                            <a href="mailto:info@alghanim-group.com?Subject=Hello" target="_top">info@alghanim-group.com</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- About Widget -->

                    </div>
                </div>
            </div>
            <!-- Footer COlumns -->

            <!-- Sub Footer -->
            <div class="sub-footer">
                <div class="container">
                    <p><?= yii::t('app', 'Copyright'); ?> © <?php echo date('Y') ?> <span class="theme-color"><?= yii::t('app', 'Arizona National'); ?></span> <?= yii::t('app', 'All Rights Reserved'); ?></p>
                    <nav class="footer-nav-list footer-nav-links">
                        <ul>
                            <li><a href="/"><?= yii::t('app', 'home'); ?></a></li>
                            <li><a href="/about"><?= yii::t('app', 'about'); ?></a></li>
                            <li><a href="/services"><?= yii::t('app', 'services'); ?></a></li>
                            <li><a href="/projects"><?= yii::t('app', 'projects'); ?></a></li>
                            <li><a href="/contact"><?= yii::t('app', 'contact us'); ?></a></li>
                            <li><a href="/careers"><?= yii::t('app', 'careers'); ?></a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <!-- Sub Footer -->

        </footer>
        <!-- Footer -->



    </div>
    <!-- Wrapper -->

    <!-- Search Modal -->
    <div class="search-modal">
        <form>
            <input class="form-control" type="search" placeholder="Type here">
            <button type="button">go</button>
        </form>
    </div>	
    <!-- Search Modal -->

    <!-- Scroll to top -->
    <span id="scrollup" class="scrollup"><i class="icon-angle-up"></i></span>
    <!-- Scroll to top -->
    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

