<?php

use backend\models\Departments;
?>
<!-- Inner Banner -->
<div class="inner-banner overlay-dark" data-enllax-ratio="-.3" style="background: url(/images/banner/395627392edeed5.jpg) no-repeat fixed;">
    <div class="container">
        <div class="heading-breadcrumbs">
            <h2><?= yii::t('app', 'services'); ?></h2>
        </div>
    </div>
</div>
<!-- Inner Banner -->

<!-- Main Content -->
<main id="main-content">



    <!-- Our Projects -->
    <section class="our-projects">


        <!-- PRojects Gallery -->
        <div class="our-projects theme-padding">
            <div class="container">

                <!-- Main Heading -->
                <div class="main-heading-holder pro-head">
                    <div class="main-heading pull-left">
                        <h2 class="b-line"><?= yii::t('app', 'Our'); ?> <span><?= yii::t('app', 'services'); ?></span></h2>
                    </div>
                    <div id="js-filters-juicy-projects" class="cbp-l-filters-button pull-right">
                        <div data-filter="*" class="cbp-filter-item-active cbp-filter-item">
                            <?= yii::t('app', 'All'); ?> <div class="cbp-filter-counter"></div>
                        </div>
                        <?php foreach ($departments as $department_data => $department) { ?>
                            <div data-filter=".<?php echo $department->id ?>" class="cbp-filter-item">
                                <?php echo $department->name ?> <div class="cbp-filter-counter"></div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
                <!-- Main Heading -->

                <!-- Gallery -->
                <div class="gallery-holder">
                    <div id="js-grid-juicy-projects" class="cbp">
                        <?php foreach ($services as $service_data => $service) { ?>
                            <div class="cbp-item <?php echo $service->department_id ?>">
                                <div class="cbp-caption">
                                    <div class="cbp-caption-defaultWrap">
                                        <img src="/images/services/<?php echo $service->path ?>" alt="">
                                    </div>
                                    <div class="cbp-caption-activeWrap">
                                        <div class="cbp-l-caption-alignCenter">
                                            <div class="cbp-l-caption-body">
                                                <a href="/services/<?php echo $service->id ?>" class=" cbp-l-caption-buttonLeft" rel="nofollow">Read more</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="cbp-l-grid-projects-title"><a href="/services/<?php echo $service->id ?>"><?php echo $service->name ?></a></div>
                                <div class="cbp-l-grid-projects-desc"><?php echo $service->description ?></div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
                <!-- Gallery -->

            </div>
        </div>
        <!-- PRojects Gallery -->

    </section>
    <!-- Our Projects -->




    <!-- Our Services -->
    <section class="our-projects">


        <!-- Services Gallery -->
        <div class="our-projects theme-padding">
            <div class="container">
                <!-- Main Heading -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="about-text">
                            <h3 class="b-line"> <Span><?= yii::t('app', 'Commercial Construction'); ?></Span></h3>

                            <p>
                                Commercial Construction is where we started, and where we'll always pioneer. This is the core of everything we do.
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="about-text">
                            <h3 class="b-line"> <Span><?= yii::t('app', 'Asphalt Production'); ?></Span></h3>

                            <p>
                                Our recently acquired MARINI Asphalt Plant, is the latest acquisition our company has made. and through started Arizona National Asphalt Department.
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="about-text">
                            <h3 class="b-line"> <Span><?= yii::t('app', 'Line Marking'); ?></Span></h3>

                            <p>
                                We are the #1 Line Marking company in the Kuwait. 90% of the market projects done by our team.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Main Heading -->
            </div>
        </div>

        <!-- Services Gallery -->

    </section>
    <!-- Our Services -->



</main>
<!-- Main Content -->