<?php
/**
 * Created by PhpStorm.
 * User: Elkeno
 * Date: 2017-05-30
 * Time: 5:44 PM
 */

$title = "Contact Elkeno";
require("Util/fragments/head.php");
?>

<body>
    <div class="demo-layout mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header">
        <?php
        require("Util/fragments/menu.php");
        ?>
        <main class="mdl-layout__content mdl-color--grey-100" style="min-height:600px">
            <div class="mdl-grid demo-content">
                <div class="mdl-wide-card mdl-shadow--2dp mdl-color--white mdl-cell mdl-cell--8-col">
                    <div class="mdl-card__title">
                        <h3 class="mdl-card__title-text">
                            Contact Information
                        </h3>
                    </div>
                    <div class="mdl-card__supporting-text">
                        <ul class="demo-list-two mdl-list">
                            <li class="mdl-list__item mdl-list__item--two-line">
                                <span class="mdl-list__item-primary-content">
                                    <i class="material-icons mdl-list__item-avatar">email</i>
                                    <span>elkeno_q.jones@hotmail.com</span>
                                    <span class="mdl-list__item-sub-title">email</span>
                                </span>
                            </li>
                            <li class="mdl-list__item mdl-list__item--two-line">
                                <span class="mdl-list__item-primary-content">
                                    <i class="material-icons mdl-list__item-avatar">phone</i>
                                    <span>+1 (902) 394-7518</span>
                                    <span class="mdl-list__item-sub-title">mobile</span>
                                </span>
                            </li>
                        </ul>
                    </div>
                    <div class="mdl-card__actions mdl-card--border">
                        <a href="mailto:elkeno_q.jones@hotmail.com" target="_blank">
                            <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
                                Email Elkeno
                            </button>
                        </a>
                    </div>
                </div>

            <div class="mdl-wide-card mdl-shadow--2dp mdl-color--white mdl-cell mdl-cell--8-col"">
                <div class="mdl-card__title">
                    <h3 class="mdl-card__title-text">
                        Social
                    </h3>
                </div>
                <div class="mdl-card__supporting-text">
                    <ul class="demo-list-item mdl-list">
                        <li class="mdl-list__item">
                            <span class="mdl-list__item-primary-content">
                              <a href="https://www.linkedin.com/in/elkeno-jones-9b2581141" target="_blank">
                                  LinkedIn
                              </a>
                            </span>
                        </li>
                </div>
            </div>

            </div>
        </main>
    </div>
<?php include ("Util/fragments/footer.php");