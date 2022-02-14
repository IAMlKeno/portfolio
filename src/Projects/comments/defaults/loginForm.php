<?php
/***********************************************************************************************************************
 * Created by PhpStorm.
 * User: Elkeno Jones_ejones109029
 * Date: 2016-10-08
 * Time: 12:18 AM
 * Purpose:
 * This form will be used to display a login form so that the user can create a comment
 ***********************************************************************************************************************
 */

echo '
    <form action="index.php?status=return" method="post" class="loginForm">
        <div class="mdl-card mdl-small-card mdl-cell--12-col mdl-cell--4-col-phone mdl-shadow--2dp">
            <div class="mdl-card__title">
                <h3 class="mdl-card__title-text">
                    Please log in to leave a comment and jump in on the fun!
                </h3>
            </div>
            <div>
                <table id="loginTable">
                    <tr>
                        <td>
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                <input class="mdl-textfield__input" type="text" id="username" name="username">
                                <label class="mdl-textfield__label loginText" for="username">Username:</label>
                            </div>  
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                <input class="mdl-textfield__input" type="password" id="password" name="password">
                                <label class="mdl-textfield__label loginText" for="password">Password</label>
                            </div>    
                        </td>
                    </tr>   
                </table>
            </div>
            <span class="error">'; if($loginFailed){echo $error;} echo '</span>
            <hr />
            <div class="mdl-card__actions mdl-card--border">
                <input type="submit" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--colored
                    mdl-button--raised" name="submitLogin" value="Log in" />
            </div>
            <div class="mdl-card__actions mdl-card--border">
                No account? <a class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--accent
                    mdl-button--raised" href="register.php">Register here!</a><br />
            </div>  
        </div>
</form>
';