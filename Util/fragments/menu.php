<?php
/**
 * Created by PhpStorm.
 * User: Elkeno
 * Date: 2017-06-12
 * Time: 7:06 PM
 */
?>
<header class="demo-header mdl-layout__header mdl-color--grey-100 mdl-color-text--grey-600">
    <div class="mdl-layout__header-row">
        <span class="mdl-layout-title"><?php echo $title; ?></span>
        <div class="mdl-layout-spacer"></div>
<!--        <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable">-->
<!--            <label class="mdl-button mdl-js-button mdl-button--icon" for="search">-->
<!--                <i class="material-icons">search</i>-->
<!--            </label>-->
<!--            <div class="mdl-textfield__expandable-holder">-->
<!--                <input class="mdl-textfield__input" type="text" id="search">-->
<!--                <label class="mdl-textfield__label" for="search">Enter your query...</label>-->
<!--            </div>-->
<!--        </div>-->
        <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon" id="hdrbtn">
            <i class="material-icons">more_vert</i>
        </button>
        <ul class="mdl-menu mdl-js-menu mdl-js-ripple-effect mdl-menu--bottom-right" for="hdrbtn"
            htmlFor="hdrbtn">
            <a href="about.php"><li class="mdl-menu__item">About</li></a>
            <a href="contact.php"><li class="mdl-menu__item">Contact</li></a>
        </ul>
    </div>
</header>
<div class="demo-drawer mdl-layout__drawer mdl-color--blue-grey-900 mdl-color-text--blue-grey-50">
<!--    --><?php
//        if($_COOKIE['user'] != null)
//            echo "<span class='mdl-layout-title'>Welcome <small>". $_COOKIE['user']."</small></span>";
//        else
//            echo "<span class='mdl-layout-title'>Welcome</span>";
//    ?>
    <span class='mdl-layout-title'>Welcome</span>
    <nav class="demo-navigation mdl-navigation mdl-color--blue-grey-800">
        <a class="mdl-navigation__link" href="index.php">
            <i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">
                home
            </i>
            Home
        </a>
        <a class="mdl-navigation__link" href="resume/Elkeno_Jones_Resume.pdf" target="_blank">
            <i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">
                description
            </i>
            Elkeno's Resume
        </a>
        <a class="mdl-navigation__link" href="contact.php">
            <i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">
                person
            </i>
            Contact
        </a>
        <a class="mdl-navigation__link" href="directory.php?type=java">
            <i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">
                code
            </i>
            Java
        </a>
        <a class="mdl-navigation__link" href="directory.php?type=php">
            <i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">
                code
            </i>
            PHP
        </a>
        <a class="mdl-navigation__link" href="about.php">
            <i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">
                report
            </i>
            About Elkeno
        </a>

        <div class="mdl-layout-spacer"></div>
        <span class="visuallyhidden">
            &nbsp;
        </span>
            <!--        <a class="mdl-navigation__link" href="">-->
<!--            <i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">-->
<!--                help_outline-->
<!--            </i>-->
<!--            <span class="visuallyhidden">-->
<!--                    Help-->
<!--                </span>-->
<!--        </a>-->
<!--        I think I would like to make this a modal -->
    </nav>
</div>
