<?php
/***********************************************************************************************************************
 * Created by PhpStorm.
 * User: Elkeno
 * Date: 2016-10-07
 * Time: 10:35 PM
 * Purpose:
 * This script will print out the heading of each html page.
 ***********************************************************************************************************************
 */
$pageTitle = "Things About Jenny - ";

switch($page)
{
    case "home":
        $pageTitle .= 'Home';
        $page = 'Home';
        break;
    case "register":
        $pageTitle .= 'Register';
        $page = 'Register';
        break;
    case 'update':
        $page = 'Update/Delete';
        $pageTitle .= 'Update/Delete';
        break;
}

echo '
<!DOCTYPE html>
<html>
<head>
    <title>'. $pageTitle .'</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <script src=\'https://www.google.com/recaptcha/api.js\'></script>
    <script src="//cdn.ckeditor.com/4.5.11/standard/ckeditor.js"></script>
    
    <link rel="stylesheet" href="stylesheets/generalStyle.css">
    <style>
        .mdl-small-card
        {
            background-color: transparent;
        }
        .center-card
        {
        }
    </style>
</head>
<body>
    <div class="mdl-layout mdl-js-layout">
    <div class="mdl-layout__drawer">
        <span class="mdl-layout-title">
            Menu
        </span>
        <nav class="mdl-navigation">
            <a class="mdl-navigation__link" href="">This is just to demonstrate the use of MDL lite drawer layout</a>
        </nav>
    </div>
';