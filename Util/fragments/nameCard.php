<?php
/**
 * Created by PhpStorm.
 * User: Elkeno
 * Date: 2017-06-13
 * Time: 11:08 PM
 */
?>
<div class="mdl-cell mdl-cell--4-col mdl-cell--6-col-tablet">
    <div class="mdl-card mdl-card-transparent mdl-shadow--2dp">
        <div class="mdl-card__title ">
            <h3 class="mdl-card__title-text">
                Enter your name to make your experience personal...
            </h3>
        </div>
        <form action="index.php" method="get">
            <div class="mdl-card__supporting-text">
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <input class="mdl-textfield__input" type="text" id="username" name="username">
                    <label class="mdl-textfield__label" for="username">Name:</label>
                </div>
            </div>
            <div class="mdl-card__actions mdl-card--border">
                <input type="submit" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--colored
                                    mdl-button--raised" name="userSubmit" />
            </div>
        </form>
    </div>
</div>
