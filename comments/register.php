<?php
/***********************************************************************************************************************
 * Created by PhpStorm.
 * User: Elkeno Jones_ejones109029
 * Date: 2016-10-08
 * Time: 8:34 AM
 * Purpose:
 * This web form will be used to gather information for the creation of a new user. The user will be created and then
 * redirected to the index page.
 ***********************************************************************************************************************
 */
namespace comments;
$page = 'register';
require ("dbConnections.php");
include ("functions/functions.php");

if(isset($_POST['submit']) == true)
{
    if(!empty($_POST['fName']) && !empty($_POST['lName']) && !empty($_POST['username']) && !empty($_POST['password']))
    {
        $captcha = false;
        if(isset($_POST['g-recaptcha-response']))
        {
            $captcha = $_POST['g-recaptcha-response'];
        }

        if(!$captcha)
        {
            echo "Please check the captcha before proceeding";
        }
        else
        {
            $secretKey = "6LezwwgUAAAAAAXp6XVA_LUZkDBSCYyICR1T2Fyt";
            $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$captcha");
            $responseKeys = json_decode($response, true);

            if(intval($responseKeys['success']) === 1)
            {
                $fName = ucfirst($_POST['fName']);
                $lName = ucfirst($_POST['lName']);
                $name = mysqli_real_escape_string($db, $fName . ' ' . $lName);
                $username = mysqli_real_escape_string($db, $_POST['username']);
                $password = mysqli_real_escape_string($db, $_POST['password']);

                $newUser = new User($username, $password, $name);

                $userAdded = insertNewUser($newUser, $db);

                if($userAdded) {
                    session_start();
                    $_SESSION['loggedIn'] = true;
                    $_SESSION['loggedInUser'] = $newUser;

                    header("Location: index.php?status=new");
                }
                else
                {
                    $error = 'Username already exists!';
                }
            }
        }
    }
}
include("defaults/header.php");
include("defaults/banner.php")
?>
    <form action="register.php" method="post">
        <div class="mdl-card mdl-small-card mdl-cell--12-col mdl-cell--4-col-phone">
            <div class="mdl-card__title">
                <h4 class="mdl-card__title-text">
                    Your Information
                </h4>
            </div>
<!--            <div class="mdl-card__supporting-text mdl-cell--hide-phone">-->
<!--                <table class="loginTable">-->
<!--                    <tr>-->
<!--                        <td style="border:none">-->
<!--                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label registerDiv">-->
<!--                                <input class="mdl-textfield__input" type="text" id="fName" name="fName">-->
<!--                                <label class="mdl-textfield__label loginText" for="fName">First Name:</label>-->
<!--                            </div>-->
<!--                        </td>-->
<!--                        <td style="border:none">-->
<!--                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label registerDiv">-->
<!--                                <input class="mdl-textfield__input" type="text" id="lName" name="lName">-->
<!--                                <label class="mdl-textfield__label loginText" for="lName">Last Name:</label>-->
<!--                            </div>-->
<!--                        </td>-->
<!--                    </tr>-->
<!--                    <tr>-->
<!--                        <td style="border:none">-->
<!--                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">-->
<!--                                <input class="mdl-textfield__input" type="text" id="username" name="username">-->
<!--                                <label class="mdl-textfield__label loginText" for="username">Username:</label>-->
<!--                            </div>-->
<!--                        </td>-->
<!--                        <td style="border:none">-->
<!--                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">-->
<!--                                <input class="mdl-textfield__input" type="password" id="password" name="password">-->
<!--                                <label class="mdl-textfield__label loginText" for="password">Password:</label>-->
<!--                            </div>-->
<!--                        </td>-->
<!--                    </tr>-->
<!--                </table>-->
<!--            </div>-->
            <div class="mdl-card__supporting-text mdl-cell--12-col-desktop">
                <table class="loginTable">
                    <tr>
                        <td style="border:none">
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label registerDiv">
                                <input class="mdl-textfield__input" type="text" id="fName" name="fName">
                                <label class="mdl-textfield__label loginText" for="fName">First Name:</label>
                            </div>
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label registerDiv">
                                <input class="mdl-textfield__input" type="text" id="lName" name="lName">
                                <label class="mdl-textfield__label loginText" for="lName">Last Name:</label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td style="border:none">
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                <input class="mdl-textfield__input" type="text" id="username" name="username">
                                <label class="mdl-textfield__label" for="username">Username:</label>
                            </div>
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                <input class="mdl-textfield__input" type="password" id="password" name="password">
                                <label class="mdl-textfield__label" for="password">Password:</label>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="mdl-card__actions mdl-card__border">
                <span class="error">
                    <?php if(isset($userAdded) && !$userAdded){echo $error;}?>
                </span>
                <hr />
                <input type="submit" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--colored
                    mdl-button--raised" name="submit" />
            </div>
            <div class="mdl-card__actions mdl-card__border">
                <span>
                    Have an account already? <br />
                    <a href="index.php">
                        <input type="button" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--accent
                            mdl-button--raised" value="Click here to log in." />
                    </a>
                </span>
            </div>
        </div>
        <br /><br />
        <!-- captcha here -->
        <div class="g-recaptcha" data-sitekey="6LezwwgUAAAAAPUB3cjvx_fuPMdCrm3vpQ1ixoCz"></div>
    </form>
</div>

<?php
    include ("defaults/footer.php");
?>
