<?php

use backend\models\Departments;

$session = Yii::$app->session;
$lang = $session->get('language');
$lang_id = $session['language_id'];

if ($lang_id == 1) {
    $heading_font_family = "fjalla";
    $font_family = "poiret";
} else {
    $heading_font_family = "cairo_bold";
    $font_family = "cairo_regular";
}
?>

<!-- Banner -->
<div id="banner-slider" class="banner-slider">
    <div class="banner-slide fullscreen" data-enllax-ratio="-.1" style="background: url(/images/banner/background_2.jpg) no-repeat fixed;">
        <div class="caption-holder">
            <div class="container full-height p-relative">
                <div class="caption position-center-x">
                    <div class="col-xs-9 col-sm-8 col-lg-8 xs-full-width">

                        <!-- Caption Text -->
                        <div class="caption-text">
                            <h2 data-animation="fadeInDown" data-delay="0.4s">WE ARE MAKERS</h2>
                            <h3 data-animation="fadeInDown" data-delay="0.6s">We have more then <strong>25 </strong><span>YEAR EXPERIENCE</span> in this field. We know what you want.</h3>
                            <p data-animation="fadeInDown" data-delay="0.8s">Lorem Ipsum is simply dummy text of the printing and typesetting industry. remaining essentially unchanged.</p>
                        </div>
                        <!-- Caption Text -->

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="banner-slide fullscreen" data-enllax-ratio="-.1" style="background: url(/images/banner/background_banner.jpg) no-repeat fixed;">
        <div class="caption-holder">
            <div class="container full-height p-relative">
                <div class="caption position-center-x">
                    <div class="col-xs-9 col-sm-8 col-lg-8 xs-full-width">

                        <!-- Caption Text -->
                        <div class="caption-text">
                            <h2 data-animation="fadeInDown" data-delay="0.4s">WE ARE MAKERS</h2>
                            <h3 data-animation="fadeInDown" data-delay="0.6s">We have more then <strong>25 </strong><span>YEAR EXPERIENCE</span> in this field. We know what you want.</h3>
                            <p data-animation="fadeInDown" data-delay="0.8s">Lorem Ipsum is simply dummy text of the printing and typesetting industry. remaining essentially unchanged.</p>
                        </div>
                        <!-- Caption Text -->

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="banner-slide fullscreen" data-enllax-ratio="-.1" style="background: url(/images/banner/background_2.jpg) no-repeat fixed;">
        <div class="caption-holder">
            <div class="container full-height p-relative">
                <div class="caption position-center-x">
                    <div class="col-xs-9 col-sm-8 col-lg-8 xs-full-width">

                        <!-- Caption Text -->
                        <div class="caption-text">
                            <h2 data-animation="fadeInDown" data-delay="0.4s">WE ARE MAKERS</h2>
                            <h3 data-animation="fadeInDown" data-delay="0.6s">We have more then <strong>25 </strong><span>YEAR EXPERIENCE</span> in this field. We know what you want.</h3>
                            <p data-animation="fadeInDown" data-delay="0.8s">Lorem Ipsum is simply dummy text of the printing and typesetting industry. remaining essentially unchanged.</p>
                        </div>
                        <!-- Caption Text -->

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Banner -->

<!-- Main Content -->
<main id="main-content">

    <!-- About Us -->
    <section class="about-us">

        <!--Big Headin--> 
        <div class="big-heading">
            <div class="container">
                <strong>#1</strong>
                <div class="main-heading">
                    <?php if ($lang_id == 1) { ?>
                        <h2 style="font-family: <?php echo $heading_font_family ?> !important;"><?= yii::t('app', 'About'); ?> <span><?= yii::t('app', 'Arizona National'); ?></span></h2>
                    <?php } else { ?>
                        <h2><span><?= yii::t('app', 'Arizona National'); ?></span> <?= yii::t('app', 'About'); ?> </h2>
                    <?php } ?>
                </div>
            </div>
        </div>
        <!--Big Headin--> 

        <!-- About -->
        <div class="theme-padding mb-80">

            <div class="container">
                <div class="row">

                    <!-- About Text -->
                    <div class="col-lg-6 col-md-6 col-xs-12">
                        <div class="about-text">
                            <h3 class="b-line" style="font-family: <?php echo $heading_font_family ?> !important;"> <Span><?= yii::t('app', 'Arizona National'); ?></Span></h3>
                            <h4>“We are a contracting company that specializes in commercial construction services. We are continuously developing and always striving for the better, higher quality in everything we do.”</h4>
                            <p style="font-family: <?php echo $font_family ?> !important;">
                                In 2006, Our Co-Founders decided to enter the Kuwaiti market in a new pioneered method that would allow them to apply the years of experience they managed to conquer. Creating divisions that serve the needs for the ever-expanding market of the Kuwait businesses and commercial sectors, ...
                            </p>
                            <a class="btn bold-color" href="/about"><?= yii::t('app', 'read more'); ?></a>
                        </div>
                    </div>
                    <!-- About Text -->

                    <!-- About Imgs -->
                    <div class="col-lg-6 col-md-6">
                        <div class="about-imgs-list">
                            <?php if (isset($projects[0]->path) && $projects[0]->path != "") { ?>
                                <figure class="about-img img-1"><img src="/images/projects_224x114/<?php echo $projects[0]->path ?>" alt="<?php echo $projects[0]->name ?>"></figure>
                            <?php } else { ?>
                                <figure class="about-img img-1"><img src="/images/about-imgs/img-02.jpg" alt=""></figure>
                            <?php } ?>
                            <?php if (isset($projects[1]->path) && $projects[1]->path != "") { ?>
                                <figure class="about-img img-2"><img src="/images/projects_200x155/<?php echo $projects[1]->path ?>" alt="<?php echo $projects[1]->name ?>"></figure>
                            <?php } else { ?>
                                <figure class="about-img img-2"><img src="/images/about-imgs/img-01.jpg" alt=""></figure>
                            <?php } ?>
                            <?php if (isset($projects[2]->path) && $projects[2]->path != "") { ?>
                                <figure class="about-img img-3"><img src="/images/projects_224x116/<?php echo $projects[2]->path ?>" alt="<?php echo $projects[2]->name ?>"></figure>
                            <?php } else { ?>
                                <figure class="about-img img-3"><img src="/images/about-imgs/img-04.jpg" alt=""></figure>
                            <?php } ?>
                            <figure class="about-img img-4"><img src="/images/about-mid-logo.jpg" alt=""></figure>
                            <?php if (isset($projects[3]->path) && $projects[3]->path != "") { ?>
                                <figure class="about-img img-5"><img src="/images/projects_145x105/<?php echo $projects[3]->path ?>" alt="<?php echo $projects[3]->name ?>"></figure>
                            <?php } else { ?>
                                <figure class="about-img img-5"><img src="/images/about-imgs/img-03.jpg" alt=""></figure>
                            <?php } ?>
                            <?php if (isset($projects[4]->path) && $projects[4]->path != "") { ?>
                                <figure class="about-img img-6"><img src="/images/projects_224x116/<?php echo $projects[4]->path ?>" alt="<?php echo $projects[4]->name ?>"></figure>
                            <?php } else { ?>
                                <figure class="about-img img-6"><img src="/images/about-imgs/img-05.jpg" alt=""></figure>
                            <?php } ?>
                        </div>
                    </div>
                    <!-- About Imgs -->

                </div>
                <div class="row">
                    <div class="col-sm-12"><br /><br /></div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <center><a href="/company_profile/<?php echo $company_profile->path ?>" class=" btn lg bold-color profile_btn" target="_blank"><?= yii::t('app', 'View Profile'); ?></a></center>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <center><a href="#" class=" btn lg bold-color download_btn profile_btn" download="/company_profile/<?php echo $company_profile->path ?>"><?= yii::t('app', 'Download Profile'); ?></a></center>
                    </div>
                </div>
            </div>
        </div>
        <!-- About -->

    </section>
    <!-- About Us -->


    <!-- Statistics Facts -->
    <section class="statistics-facts theme-padding">
        <div class="container p-relative">
            <ul class="facts-acounter" id="theme-counters">
                <li>
                    <h3><?php echo $info_banner->name_1 ?> <span><?php echo $info_banner->title_1 ?></span></h3>
                    <img class="fact-icon" src="/images/home_data_banner_images/<?php echo $info_banner->icon_1 ?>" alt="<?php echo $info_banner->name_1 ?>">
                    <h2 class="timer" id="chapters-1" data-to="<?php echo $info_banner->number_1 ?>" data-speed="3000"><?php echo $info_banner->number_1 ?></h2>
                </li>
                <li>
                    <h3><?php echo $info_banner->name_2 ?> <span><?php echo $info_banner->title_2 ?></span></h3>
                    <img class="fact-icon" src="/images/home_data_banner_images/<?php echo $info_banner->icon_2 ?>" alt="<?php echo $info_banner->name_2 ?>">
                    <h2 class="timer" id="chapters-2" data-to="<?php echo $info_banner->number_2 ?>" data-speed="4000"><?php echo $info_banner->number_2 ?></h2>
                </li>
                <li>
                    <h3><?php echo $info_banner->name_3 ?> <span><?php echo $info_banner->title_3 ?></span></h3>
                    <img class="fact-icon" src="/images/home_data_banner_images/<?php echo $info_banner->icon_3 ?>" alt="<?php echo $info_banner->name_3 ?>">
                    <h2 class="timer" id="chapters-2" data-to="<?php echo $info_banner->number_3 ?>" data-speed="5000"><?php echo $info_banner->number_3 ?></h2>
                </li>
                <li>
                    <h3><?php echo $info_banner->name_4 ?> <span><?php echo $info_banner->title_4 ?></span></h3>
                    <img class="fact-icon" src="/images/home_data_banner_images/<?php echo $info_banner->icon_4 ?>" alt="<?php echo $info_banner->name_3 ?>">
                    <h2 class="timer" id="chapters-2" data-to="<?php echo $info_banner->number_4 ?>" data-speed="6000"><?php echo $info_banner->number_4 ?></h2>
                </li>
            </ul>
        </div>
    </section>
    <!-- Statistics Facts -->


    <!-- Our Projects -->
    <section class="our-projects ">


        <!-- PRojects Gallery -->
        <div class="our-projects theme-padding">
            <div class="container">
                <!-- Main Heading -->
                <div class="main-heading-holder pro-head">
                    <div class="main-heading pull-left">
                        <h2 class="b-line" style="font-family: <?php echo $heading_font_family ?> !important;"><?= yii::t('app', 'Our'); ?> <span><?= yii::t('app', 'Projects'); ?></span></h2>
                        <p style="font-family: <?php echo $font_family ?> !important;">In 2006, Our Co-Founders decided to enter the Kuwaiti market in a new pioneered method that would allow them to apply the years of experience they managed to conquer. Creating divisions that serve the needs for the ever-expanding market of the Kuwait businesses and commercial sectors, whether it was through Industrial Manufacturing, Construction services, or Trading & Contracting. This vision was the corner stone of our company and from thereon; we developed rapidly to match the needs that proved to increase dramatically over the past decade.</p>
                    </div>
                    <div id="js-filters-juicy-projects" class="cbp-l-filters-button pull-left">
                        <div id="js-loadMore-juicy-projects" class="cbp-l-loadMore-button">

                            <?php
                            $i = 1;
                            foreach ($projects as $project_data => $project) {
                                $i = $i + 1;
                                if ($i == 2) {
                                    ?>
                                    <a href="/images/projects/<?php echo $project->path ?>" class="cbp-lightbox  btn lg bold-color" data-title=""><?= yii::t('app', 'View Gallery'); ?></a>
                                <?php } else {
                                    ?>
                                    <a style="display:none;" href="/images/projects/<?php echo $project->path ?>" class="cbp-lightbox  btn lg bold-color" data-title="<?php echo $project->name ?>"><?= yii::t('app', 'View Gallery'); ?></a>
                                <?php } ?>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <!-- Main Heading -->

                <!-- Gallery -->
                <div class="gallery-holder">
                    <div id="js-grid-juicy-projects" class="cbp">
                        <?php foreach ($projects as $project_data => $project) { ?>
                            <div class="cbp-item graphic">
                                <div class="cbp-caption">
                                    <div class="cbp-caption-defaultWrap">
                                        <a href="/projects/<?php echo $project->id ?>"><img src="/images/projects/<?php echo $project->path ?>" alt=""></a>
                                    </div>
                                    <div class="cbp-caption-activeWrap">
                                        <div class="cbp-l-caption-alignCenter">
                                            <div class="cbp-l-caption-body">
                                                <a href="/projects/<?php echo $project->id ?>" class=" cbp-l-caption-buttonLeft" rel="nofollow">Detailed View</a>
                                                <a href="/summary?id=<?php echo $project->id ?>" class="cbp-singlePage cbp-l-caption-buttonLeft" rel="nofollow">Summary View</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="cbp-l-grid-projects-title"><a href="/projects/<?php echo $project->id ?>"><?php echo $project->name ?></a></div>
                                <div class="cbp-l-grid-projects-desc" style="font-family: <?php echo $font_family ?> !important;"><?php echo $project->type ?></div>
                            </div>
                        <?php } ?>

                    </div>
                    <div id="js-loadMore-juicy-projects" class="cbp-l-loadMore-button">
                        <a href="/projects" class=" btn lg bold-color"><?= yii::t('app', 'See all projects'); ?></a>
                    </div>
                </div>
                <!-- Gallery -->

            </div>
        </div>
        <!-- PRojects Gallery -->

    </section>
    <!-- Our Projects -->





    <!-- Testimonial -->
    <section class="testimonial theme-padding overlay-dark" data-enllax-ratio="-.3" style="background: url(/images/testimonial-bg.jpg) no-repeat fixed;">
        <div class="container">

            <!-- testimonial Slides -->
            <div class="testimonial-slides-holder">	
                <ul id="testimonial-slides" class="testimonial-slides">
                    <?php foreach ($directors_vision as $director_vision => $vision_data) { ?>
                        <li>
                            <div class="quote-holder">
                                <img class="reviews-img" src="/images/directors_vision/<?php echo $vision_data->path ?>" alt="<?php echo $vision_data->name ?>">
                                <h5><?php echo $vision_data->name ?></h5>
                                <p><?php echo $vision_data->message ?></i></p>
                            </div>
                        </li>
                    <?php } ?>
                </ul>
            </div>
            <!-- testimonial Slides -->

        </div>
    </section>
    <!-- Testimonial -->

    <!-- Brands Logos -->
    <section class="brands-logos-holder theme-padding gary-patern">
        <div class="container">
            <div class="brands-logos">
                <div class="title">
                    <h2 class="b-line">Meet our <span>happy</span>  clients</h2>
                </div>
                <ul id="brands-logos-slider" class="brands-logos-slider">
                    <?php foreach ($happy_clients as $clients_data => $client) { ?>
                        <li><a href="http://<?php echo $client->link ?>" target="_blank"><img src="/images/happy_clients/<?php echo $client->path ?>" alt="Arizona National"></a></li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </section>
    <!-- Brands Logos -->



    <!-- Our Services -->
    <section class="our-blog theme-padding">
        <div class="container">

            <!-- Main Heading -->
            <div class="main-heading-holder">
                <div class="main-heading">
                    <h2 class="b-line" style="font-family: <?php echo $heading_font_family ?> !important;"><?= yii::t('app', 'Our'); ?> <span><?= yii::t('app', 'Services'); ?></span></h2>
                    <p style="font-family: <?php echo $font_family ?> !important;">We are presently specialized in the following constructional activities:</p>
                </div>
            </div>
            <!-- Main Heading -->

            <!-- Blog Grid Slider  -->
            <div class="blog-slider-holder">

                <!-- Slider -->
                <div id="blog-grid-slider" class="blog-grid-slider">
                    <?php foreach ($services as $service_data => $service) { ?>
                        <?php
                        $department = Departments::find()->where(['id' => $service->department_id])->one();
                        ?>
                        <!-- item -->
                        <div class="item">
                            <div class="blog-grid">
                                <figure class="overlay-dark">
                                    <a href="">
                                        <img src="/images/services/<?php echo $service->path ?>" alt="">
                                    </a>
                                </figure>
                                <div class="detail">
                                    <div class="title">
                                        <h3><a href="/services/<?php echo $service->id ?>"><?php echo $service->name ?></a></h3>
                                        <h4><?php echo $department->name ?></h4>
                                        <p style="font-family: <?php echo $font_family ?> !important;"><?php echo substr($service->description, 0, 72); ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- item -->
                    <?php } ?>
                </div>
                <!-- Slider -->
                <br /><br />
                <div id="js-loadMore-juicy-projects" class="cbp-l-loadMore-button">
                    <a href="/services" class=" btn lg bold-color"><?= yii::t('app', 'see all services'); ?></a>
                </div>
                <!-- Arrows -->
                <div class="blog-grid-arrrows blog-grid-prev"><i class="icon-angle-left"></i></div>
                <div class="blog-grid-arrrows blog-grid-next"><i class="icon-angle-right"></i></div>
                <!-- Arrows -->

            </div>
            <!-- Blog Grid Slider -->

        </div>
    </section>
    <!-- Our Services -->


    <!-- Team -->
    <section class="team-holder theme-padding gary-patern">
        <div class="container">

            <!-- Main Heading -->
            <div class="main-heading-holder">
                <div class="main-heading">
                    <h2 class="b-line">Meet Our <span>Great Team</span></h2>
                    <p>We Are The Great Team In A Stream Of <span>Architech.</span></p>
                </div>
            </div>
            <!-- Main Heading -->

            <!-- Team Row -->
            <div class="row">
                <?php foreach ($team as $member_info => $member) { ?>
                    <?php if ($lang_id == 1) { ?>
                        <!-- Team Column -->
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="team-column mb-50">
                                <figure>
                                    <img src="/images/team_236x240/<?php echo $member->path ?>" alt="<?php echo $member->name ?>">
                                </figure>
                                <div class="detail">
                                    <h4><?php echo $member->name ?></h4>
                                    <h5><?php echo $member->position ?></h5>
                                    <p><?php echo $member->description ?></p>
                                    <div class="social-icons gray">
                                        <ul>
                                            <?php if (isset($member->facebook) && $member->facebook != "") { ?>
                                                <li><a href="http://<?php echo $member->facebook ?>" target="_blank"><i class="icon-facebook"></i></a></li>
                                            <?php } ?>
                                            <?php if (isset($member->twitter) && $member->twitter != "") { ?>
                                                <li><a href="http://<?php echo $member->twitter ?>" target="_blank"><i class="icon-twitter"></i></a></li>
                                            <?php } ?>
                                            <?php if (isset($member->linkedin) && $member->linkedin != "") { ?>
                                                <li><a href="http://<?php echo $member->linkedin ?>" target="_blank"><i class="icon-linkedin2"></i></a></li>
                                            <?php } ?>
                                            <?php if (isset($member->instagram) && $member->instagram != "") { ?>
                                                <li><a href="http://<?php echo $member->instagram ?>" target="_blank"><i class="icon-instagram"></i></a></li>
                                            <?php } ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Team Column -->
                    <?php } else { ?>
                        <!-- Team Column -->
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="team-column mb-50">
                                <figure>
                                    <img src="/images/team_236x240/<?php echo $member->path ?>" alt="<?php echo $member->name_arabic ?>">
                                </figure>
                                <div class="detail">
                                    <h4><?php echo $member->name_arabic ?></h4>
                                    <h5><?php echo $member->position_arabic ?></h5>
                                    <p><?php echo $member->description_arabic ?></p>
                                    <div class="social-icons gray">
                                        <ul>
                                            <?php if (isset($member->facebook) && $member->facebook != "") { ?>
                                                <li><a href="http://<?php echo $member->facebook ?>" target="_blank"><i class="icon-facebook"></i></a></li>
                                            <?php } ?>
                                            <?php if (isset($member->twitter) && $member->twitter != "") { ?>
                                                <li><a href="http://<?php echo $member->twitter ?>" target="_blank"><i class="icon-twitter"></i></a></li>
                                            <?php } ?>
                                            <?php if (isset($member->linkedin) && $member->linkedin != "") { ?>
                                                <li><a href="http://<?php echo $member->linkedin ?>" target="_blank"><i class="icon-linkedin2"></i></a></li>
                                            <?php } ?>
                                            <?php if (isset($member->instagram) && $member->instagram != "") { ?>
                                                <li><a href="http://<?php echo $member->instagram ?>" target="_blank"><i class="icon-instagram"></i></a></li>
                                            <?php } ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Team Column -->
                    <?php } ?>
                <?php } ?>

            </div>
            <!-- Team Row -->
        </div>
    </section>
    <!-- Team -->

    <!-- Main Content -->
    <!-- NewsLatters -->
    <div class="newslatters-holder  ">
        <div class="container">

            <!-- Get In Touch -->
            <div class="get-in-touch newslatters-widget">
                <h3><?= yii::t('app', 'Questions or comments'); ?></h3>
                <h4><?= yii::t('app', 'about our'); ?> <span><?= yii::t('app', 'Arizona National'); ?></span></h4>
                <a class="btn bold-color lg" href="/contact"><?= yii::t('app', 'Get In Touch'); ?></a>
            </div>
            <!-- Get In Touch -->

            <!-- Join Us -->
            <div class="join-us newslatters-widget">
                <h3><?= yii::t('app', 'Be Part Of The Community'); ?></h3>
                <h4><span><?= yii::t('app', 'Join Arizona Team'); ?></span></h4>
                <div class="social-icons">
                    <a class="btn bold-color lg" href="/careers"><?= yii::t('app', 'Join Our Team'); ?></a>
                </div>
            </div> 
            <!-- Join Us -->

        </div>
    </div>
    <!-- NewsLatters -->