<?php
/* @var $this yii\web\View */

use yii\helpers\Html;

$session = Yii::$app->session;
$lang = $session->get('language');
$lang_id = $session['language_id'];
?>

<div class="wrapper">



    <!-- Inner Banner -->
    <div class="inner-banner overlay-dark" data-enllax-ratio="-.3" style="background: url(/images/banner/background_3.jpg) no-repeat fixed;">
        <div class="container">
            <div class="heading-breadcrumbs">
                <h2><?= yii::t('app', 'about'); ?></h2>
            </div>
        </div>
    </div>
    <!-- Inner Banner -->

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
                            <h2><?= yii::t('app', 'About'); ?> <span><?= yii::t('app', 'Arizona National'); ?></span></h2>
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
                                <h3 class="b-line"><?= yii::t('app', 'About'); ?> <Span><?= yii::t('app', 'Arizona National'); ?></Span></h3>
                                <h4>“We are a contracting company that specializes in commercial construction services. We are continuously developing and always striving for the better, higher quality in everything we do.”</h4>
                                <p>
                                    ARIZONA NATIONAL was founded in 2006 to provide the ever-expanding Kuwaiti market with Construction services, Industrial manufacturing and Trading & Contracting.
                                    A top management team with over 40 years of Road and Highway Construction Experience, along with on board mechanical and electrical engineers, in addition to the reliable work force, have successfully expanded and developed ARIZONA NATIONAL to be appointed as the local agent for many international companies.
                                    As part of ARIZONA NATIONAL, ARIZONA NATIONAL Asphalt Plant is dedicated to providing industrial manufacturing services we’ve promised to deliver with excellence.
                                </p>
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

                        <div class="col-sm-12">
                            <div class="about-text">
                                <h3 class="b-line"> <Span><?= yii::t('app', 'Commitment to Excellence'); ?></Span></h3>

                                <p>
                                    ARIZONA NATIONAL has established a solid reputation for completing technically challenging projects and in precise accordance with specifications, on time and within budget limits. A wealth of experience at all levels is a key factor in the firm’s success.
                                    The principal goal of ARIZONA NATIONAL is to provide high quality services in studies, design, procurement services, execution, supervision, and inspection. This goal is accomplished by exploiting experienced men, right machinery, and wise management.
                                    We strive to keep our clients satisfied by placing them as our number one priority. Our Commitment to excellence helped us build the highly reputable brand we currently hold.
                                </p>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="about-text">
                                <h3 class="b-line"> <Span><?= yii::t('app', 'Company Legal Registration'); ?></Span></h3>

                                <p>
                                    ARIZONA NATIONAL was founded as a limited liability Company that is registered with, and approved by the Central Tenders Committee (CTC) of Kuwait*, and all Ministries in State of Kuwait as well as the semi-governmental companies such as Kuwait National Petroleum Company, Kuwait Oil Company.
                                </p>
                            </div>
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
            </div>
            <!-- About -->

        </section>
        <!-- About Us -->



        <!-- portfolio -->
        <section class="about-us">

            <!-- About -->
            <div class="theme-padding">
                <div class="container">
                    <div class="row">

                        <!-- About Text -->
                        <div class="col-lg-6 col-md-6 col-xs-12">
                            <div class="about-text">
                                <h3 class="b-line"><?= yii::t('app', 'Arizona National history &'); ?> <Span><?= yii::t('app', 'Portfolio'); ?></Span></h3>
                                <h4>We create inspiring and engaging experiences ‑ meshing digital and physical - to help our clients innovate and grow.</h4>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                            </div>
                        </div>
                        <!-- About Text -->

                        <!-- About Imgs -->
                        <div class="col-lg-6 col-md-6">
                            <div class="about-imgs-list">
                                <figure class="about-img img-1"><img src="/images/portfolio/Circuit-of-the-Americas-COTA-in-Austin-4.jpg" alt=""></figure>
                                <figure class="about-img img-2"><img src="/images/portfolio/warehouse-materials-sourcin.jpg" alt=""></figure>
                                <figure class="about-img img-3"><img src="/images/portfolio/1.9384795.jpg" alt=""></figure>
                                <figure class="about-img img-4"><img src="/images/logo-1.png" alt=""></figure>
                                <figure class="about-img img-5"><img src="/images/portfolio/5967.jpg" alt=""></figure>
                                <figure class="about-img img-6"><img src="/images/portfolio/RPH201211-25-f.jpg" alt=""></figure>
                            </div>
                        </div>
                        <!-- About Imgs -->

                    </div>
                </div>
            </div>
            <!-- About -->

        </section>
        <!-- portfolio -->


        <!-- Skill And Reviews -->
        <section class="services-holder theme-padding">
            <div class="skill-nd-reviews gray-bg theme-padding">
                <div class="container">
                    <div class="row">

                        <!-- Skill -->
                        <div class="col-lg-6 col-xs-12">
                            <div class="sr-widget after-clear">
                                <h3><span><?php echo $skill_reviews->skill_name ?></span><?php echo $skill_reviews->skill_title ?></h3>
                                <div id="theme-skillgroup" class="theme-skillgroup">
                                    <?php foreach ($skill as $skill_data => $skills) { ?>
                                        <?php
                                        if ($skills->percentage > 100) {
                                            $skills->percentage = 100;
                                        }
                                        ?>
                                        <div class="theme-skill">
                                            <h4 class="theme-skillname"><?php echo $skills->name ?></h4>
                                            <div class="theme-skillholder" data-percent="<?php echo $skills->percentage ?>%">
                                                <div class="theme-skillbar" ><span class="theme-per"><?php echo $skills->percentage ?>%</span></div>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                        <!-- Skill -->

                        <!-- Reviews -->
                        <div class="col-lg-6 col-xs-12">
                            <div class="sr-widget reviews">
                                <h3><span><?php echo $skill_reviews->review_name ?></span><?php echo $skill_reviews->review_title ?></h3>
                                <ul id="reviews-list" class="reviews-list">

                                    <?php if (sizeof($reviews) > 2) { ?>
                                        <?php for ($i = 0; $i <= ceil(sizeof($reviews) / 2); $i++) { ?>
                                            <?php
                                            if ($i > 0) {
                                                $i = $i + 1;
                                            }
                                            ?>
                                            <li>
                                                <div class="reviews-figure">
                                                    <img src="/images/review_80x80/<?php echo $reviews[$i]->path ?>" alt="<?php echo $reviews[$i]->name ?>">
                                                    <div class="head">
                                                        <h4><?php echo $reviews[$i]->name ?></h4>
                                                        <span><?php echo $reviews[$i]->title ?></span>
                                                    </div>
                                                    <p><?php echo $reviews[$i]->description ?></p>
                                                </div>
                                                <?php if ($i + 1 < sizeof($reviews)) { ?>
                                                    <div class="reviews-figure">
                                                        <img src="/images/review_80x80/<?php echo $reviews[$i + 1]->path ?>" alt="<?php echo $reviews[$i + 1]->name ?>">
                                                        <div class="head">
                                                            <h4><?php echo $reviews[$i + 1]->name ?></h4>
                                                            <span><?php echo $reviews[$i + 1]->title ?></span>
                                                        </div>
                                                        <p><?php echo $reviews[$i + 1]->description ?></p>
                                                    </div>
                                                <?php } ?>
                                            </li>
                                        <?php } ?>
                                    <?php } ?>
                                </ul>
                            </div>
                        </div>
                        <!-- Reviews -->

                    </div>
                </div>
            </div>
        </section>
        <!-- Skill And Reviews -->



        <!-- Team -->
        <section class="team-holder theme-padding wite-pattern">
            <div class="container">

                <!-- Main Heading -->
                <div class="main-heading-holder">
                    <div class="main-heading">
                        <h2 class="b-line"><?= yii::t('app', 'Meet Our'); ?> <span><?= yii::t('app', 'Sister Companies'); ?></span></h2>
                        <p>Lorem Ipsum is simply dummy text of Arizona</p>
                    </div>
                </div>
                <!-- Main Heading -->

                <!-- Team Row -->
                <div class="row">

                    <?php foreach ($sister_company as $sister_company_data => $data) { ?>
                        <!-- sister company Column -->
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="team-column mb-50">
                                <figure>
                                    <img src="/images/sister_company/<?php echo $data->path ?>" alt="<?php echo $data->name ?>">
                                </figure>
                                <div class="detail">
                                    <h4><?php echo $data->name ?></h4>
                                    <h5><?php echo $data->title ?></h5>
                                    <p><?php echo $data->description ?></p>
                                    <div class="social-icons gray">
                                        <a class="btn bold-color dark" href="http://<?php echo $data->link ?>" target="blank">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- sister company Column -->
                    <?php } ?>


                </div>
                <!-- Team Row -->

            </div>
        </section>
        <!-- Team -->


    </main>
    <!-- Main Content -->
