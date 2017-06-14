<?php
/**
 * Created by PhpStorm.
 * User: Elkeno
 * Date: 2017-05-30
 * Time: 5:44 PM
 */

$title = "About Elkeno";
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
                        <h3 class="mdl-card__title-text">Elkeno Jones</h3>
                    </div>
                    <div class="mdl-card__supporting-text">
                        <p>
                            My name is Elkeno Jones. I was born in the Bahamas and currently reside in Canada. I am a
                            graduate of both the Bahamas Technical & Vocational Institute (BTVI) (Nassau, Bahamas) and Holland
                            College (Prince Edward Island, Canada).
                        </p>
                        <p>
                            Currently, I hold an Applied Associates in Science degree in Electronic Engineering (BTVI) and a Diploma
                            in Computer Information Systems (Holland College). I do have a desire to further both my career and education
                            and welcome any endearing challenges along the way.
                        </p>
                        <p>
                            My hobbies include:
                            <ul>
                                <li>Drawing/sketching</li>
                                <li>Indoor rock climbing</li>
                                <li>Being active in the gym</li>
                                <li>Very casual video gaming</li>
                            </ul>
                        </p>
                        <p>
                            I consider myself a team player with valiant leadership traits. And, as a strength, I can
                            accept criticism constructively. I am known by friends and family to keep a cool and calm
                            head under pressure and see this as a valuable strength.
                        </p>
                    </div>
                </div>
            </div>
        </main>
    </div>
<?php include ("Util/fragments/footer.php");
