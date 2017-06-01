<?php
/**
 * Created by PhpStorm.
 * User: Elkeno
 * Date: 2017-05-30
 * Time: 5:44 PM
 */

$title = "directory";
?>
<!DocType html>
<html>
<head>
    <title>Directory</title>
    <meta charset="utf-8">
    <base href="/">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="A front-end template that helps you build fast, modern mobile web apps.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <title>Material Design Lite</title>

    <!-- Add to homescreen for Chrome on Android -->
    <meta name="mobile-web-app-capable" content="yes">
<!--    <link rel="icon" sizes="192x192" href="assets/images/android-desktop.png">-->

    <!-- Add to homescreen for Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Material Design Lite">
<!--    <link rel="apple-touch-icon-precomposed" href="assets/images/ios-desktop.png">-->

    <!-- Tile icon for Win8 (144x144 + tile color) -->
    <meta name="msapplication-TileImage" content="images/touch/ms-touch-icon-144x144-precomposed.png">
    <meta name="msapplication-TileColor" content="#3372DF">

<!--    <link rel="shortcut icon" href="assets/images/favicon.png">-->

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.cyan-light_blue.min.css">
    <link rel="stylesheet" href="styles/styles.css">
    <style>
        #view-source {
            position: fixed;
            display: block;
            right: 0;
            bottom: 0;
            margin-right: 40px;
            margin-bottom: 40px;
            z-index: 900;
        }
    </style>
</head>
<body>
<div class="demo-layout mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header">
    <header class="demo-header mdl-layout__header mdl-color--grey-100 mdl-color-text--grey-600">
        <div class="mdl-layout__header-row">
            <span class="mdl-layout-title">Home</span>
            <div class="mdl-layout-spacer"></div>
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable">
                <label class="mdl-button mdl-js-button mdl-button--icon" for="search">
                    <i class="material-icons">search</i>
                </label>
                <div class="mdl-textfield__expandable-holder">
                    <input class="mdl-textfield__input" type="text" id="search">
                    <label class="mdl-textfield__label" for="search">Enter your query...</label>
                </div>
            </div>
            <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon" id="hdrbtn">
                <i class="material-icons">more_vert</i>
            </button>
            <ul class="mdl-menu mdl-js-menu mdl-js-ripple-effect mdl-menu--bottom-right" for="hdrbtn">
                <li class="mdl-menu__item">About</li>
                <li class="mdl-menu__item">Contact</li>
                <li class="mdl-menu__item">Legal information</li>
            </ul>
        </div>
    </header>
    <div class="demo-drawer mdl-layout__drawer mdl-color--blue-grey-900 mdl-color-text--blue-grey-50">
        <nav class="demo-navigation mdl-navigation mdl-color--blue-grey-800">
            <a class="mdl-navigation__link" href="">
                <i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">
                    home
                </i>
                Home
            </a>
            <a class="mdl-navigation__link" href="">
                <i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">
                    inbox
                </i>
                Email
            </a>
            <a class="mdl-navigation__link" href="">
                <i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">
                    report
                </i>
                About Elkeno
            </a>
            <a class="mdl-navigation__link" href="">
                <i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">
                    report
                </i>
                Java
            </a>
            <a class="mdl-navigation__link" href="">
                <i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">
                    report
                </i>
                PHP
            </a>

            <div class="mdl-layout-spacer"></div>
            <a class="mdl-navigation__link" href="">
                <i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">
                    help_outline
                </i>
                <span class="visuallyhidden">
                    Help
                </span>
            </a>
        </nav>
    </div>
    <main class="mdl-layout__content mdl-color--grey-100" style="min-height:600px">
        <div class="mdl-grid demo-content">
<!--            PHP security management - mobile friendly     -->
            <div class="mdl-card-wide mdl-shadow--2dp mdl-color--white mdl-cell mdl-cell--8-col">
                <div id="container" class="jumbotron" style="width: 60%; margin: auto; padding-left: 10px; padding-right: 10px">
                    <div class="mdl-card__title">
                        <h2 class="mdl-card__title-text">PHP - Secure Login</h2>
                    </div>
                    <div class="mdl-card__supporting-text">
                        <p>
                            This is a PHP project completed by Elkeno Jones during my time at Holland College. It
                            demonstrates the usage of PHP object oriented programming, database connection and security
                            (via user log in). It also demonstrates the use of Material Design Lite to create a mobile
                            friendly web page.
                        </p>
                    </div>
                    <div class="mdl-card__actions mdl-card--border">
                        <a href="comments/index.php">
                            <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
                                PHP Security Example
                            </button>
                        </a>
                    </div>
                </div>
            </div>
<!--            PHP file Reading and Writing    -->
            <div class="mdl-card-wide mdl-shadow--2dp mdl-color--white mdl-cell mdl-cell--8-col">
                <div id="container" class="jumbotron" style="width: 60%; margin: auto; padding-left: 10px; padding-right: 10px">
                    <div class="mdl-card__title">
                        <h2 class="mdl-card__title-text">PHP - File Read & Write Example</h2>
                    </div>
                    <div class="mdl-card__supporting-text">
                        <p>
                            This is a PHP project completed by Elkeno Jones during my time at Holland College. It demonstrates the usage
                            of PHP object oriented programming. It also demonstrates using PHP to read and write files on the server.
                        </p>
                    </div>
                    <div class="mdl-card__actions mdl-card--border">
                        <a href="phpReadWriteExample/index.php">
                             <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
                                PHP File Read & Write Example
                            </button>
                         </a>
                    </div>
                </div>
            </div>
<!--            XML example -->
            <div class="mdl-card-wide mdl-shadow--2dp mdl-color--white mdl-cell mdl-cell--8-col">
                <div id="container" class="jumbotron" style="width: 60%; margin: auto; padding-left: 10px; padding-right: 10px">
                    <div class="mdl-card__title">
                        <h2 class="mdl-card__title-text">PHP & XML - Reading from XML Files</h2>
                    </div>
                    <div class="mdl-card__supporting-text">
                        <p>
                            This is a combination of PHP, XML and XSLT. This project demonstrates using PHP to read from
                            XML documents. It also demonstrates using XSLT to properly display the XML files as an HTML
                            page. There are two XML documents that are used to show this.
                        </p>
                    </div>
                    <div class="mdl-card__actions mdl-card--border">
                        <a href="xmlExample/index.php">
                            <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
                                PHP - XML Example
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </main>
</div>
</body>
</html>
