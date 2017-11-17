<?php
$id = $_GET['id'];
$id = explode("=", $id);
$id = $id[1];

use backend\models\Projects;
use backend\models\ProjectImages;

$project = Projects::find()->where(['id' => $id])->one();
$projects = Projects::find()->where('id != :id ', ['id' => $id])->all();
$images = ProjectImages::find()->where(['project_id' => $project->id])->all();
?>
<div class="cbp-l-project-title"><?php echo $project->name ?></div>
<div class="cbp-l-project-subtitle"><?php echo $project->type ?></div>

<div class="cbp-slider">
    <ul class="cbp-slider-wrap">
        <li class="cbp-slider-item">
            <a href="/images/projects/<?php echo $project->path ?>" class="cbp-lightbox">
                <img src="/images/projects/<?php echo $project->path ?>" alt="<?php echo $project->name ?>">
            </a>
        </li>
        <?php foreach($images as $image_info => $image) { ?>
            <li class="cbp-slider-item">
                <a href="/images/projects/<?php echo $image->image ?>" class="cbp-lightbox">
                    <img src="/images/projects/<?php echo $image->image ?>" alt="">
                </a>
            </li>
        <?php } ?>
    </ul>
</div>

<div class="cbp-l-project-container">
    <div class="cbp-l-project-desc">
        <div class="cbp-l-project-desc-title"><span>Project Description</span></div>
        <div class="cbp-l-project-desc-text"><?php echo $project->description ?></div>
    </div>
    <div class="cbp-l-project-details">
        <div class="cbp-l-project-details-title"><span>Project Details</span></div>

        <ul class="cbp-l-project-details-list">
            <li><strong>Client</strong><?php echo $project->client ?></li>
            <li><strong>Date</strong><?php echo date('d M Y', $project->date) ?></li>
            <li><strong>Type</strong><?php echo $project->type ?></li>
            <li><strong>Location</strong><?php echo $project->location ?></li>
        </ul>
        <a href="/projects/<?php echo $project->id ?>" target="_blank" class="cbp-l-project-details-visit btn bold-color">View More</a>
    </div>
</div>


<div class="cbp-l-project-container">
    <div class="cbp-l-project-related">
        <div class="cbp-l-project-desc-title"><span>Related Projects</span></div>
        <div class="row">
            <?php foreach ($projects as $project_data => $related_project) { ?>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
                    <a href="/summary?id=<?php echo $related_project->id ?>" class="cbp-singlePage cbp-l-project-related-link" rel="nofollow">
                        <img src="/images/projects/<?php echo $related_project->path ?>" alt="<?php echo $related_project->name ?>">
                        <div class="cbp-l-project-related-title"><?php echo $related_project->name ?></div>
                    </a>
                </div>
            <?php } ?>
        </div>
    </div>
</div>

<br><br><br>
