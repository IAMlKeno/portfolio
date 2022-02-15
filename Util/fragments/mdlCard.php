<?php
/**
 * Created by PhpStorm.
 * User: Elkeno
 * Date: 2017-06-12
 * Time: 7:09 PM
 */
?>
<div class="mdl-card-wide mdl-shadow--2dp mdl-color--white mdl-cell mdl-cell--8-col">
    <div id="container" class="jumbotron" style="width: 60%; margin: auto; padding-left: 10px; padding-right: 10px">
        <div class="mdl-card__title">
            <h2 class="mdl-card__title-text">
              <?php echo $project->projectTitle; ?>
            </h2>
        </div>
        <div class="mdl-card__supporting-text">
            <p>
                <?php echo $project->description; ?>
            </p>
        </div>
        <div class="mdl-card__actions mdl-card--border">
            <a href="<?php echo $project->link; ?>" target="_blank">
                <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
                    <?php echo !empty($project->linkDescription) ? $project->linkDescription : 'Take a look'; ?>
                </button>
            </a>
        </div>
    </div>
</div>
