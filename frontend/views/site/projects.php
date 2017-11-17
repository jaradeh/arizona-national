<!-- Inner Banner -->
<div class="inner-banner overlay-dark" data-enllax-ratio="-.3" style="background: url(/images/banner/8257a554856a5c1.jpg) no-repeat fixed;">
    <div class="container">
        <div class="heading-breadcrumbs">
            <h2><?= yii::t('app', 'projects'); ?></h2>
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
                        <h2 class="b-line"><?= yii::t('app', 'Our'); ?> <span><?= yii::t('app', 'projects'); ?></span></h2>
                        <p>OUR HISTORY EXPANDS OVER A WIDE VERITY OF PROJECTS, NO MATTER HOW SMALL OR BIG THE PROJECT IS,<br /> WE ALWAYS DELIVER THE HIGHEST QUALITY SATISFYING BOTH THE DEADLINES AND THE BUDGETS</p>
                    </div>
                    <div id="js-filters-juicy-projects" class="cbp-l-filters-button pull-right">
                        <div data-filter="*" class="cbp-filter-item-active cbp-filter-item">
                            <?= yii::t('app', 'All'); ?> <div class="cbp-filter-counter"></div>
                        </div>
                        <?php foreach ($categories as $category_data => $category) { ?>
                            <div data-filter=".<?php echo $category->id ?>" class="cbp-filter-item">
                                <?php echo $category->name ?> <div class="cbp-filter-counter"></div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
                <!-- Main Heading -->

                <!-- Gallery -->
                <div class="gallery-holder">
                    <div id="js-grid-juicy-projects" class="cbp">
                        <?php foreach ($projects as $project_data => $project) { ?>
                            <div class="cbp-item <?php echo $project->project_category_id ?>">
                                <div class="cbp-caption">
                                    <div class="cbp-caption-defaultWrap">
                                        <img src="/images/projects/<?php echo $project->path ?>" alt="<?php echo $project->name ?>">
                                    </div>
                                    <div class="cbp-caption-activeWrap">
                                        <div class="cbp-l-caption-alignCenter">
                                            <div class="cbp-l-caption-body">
                                                <a href="/projects/<?php echo $project->id ?>" class=" cbp-l-caption-buttonLeft" rel="nofollow">Read more</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="cbp-l-grid-projects-title"><a href="/projects/<?php echo $project->id ?>"><?php echo $project->name ?></a></div>
                                <div class="cbp-l-grid-projects-desc"><?php echo $project->description ?></div>
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












</main>
<!-- Main Content -->