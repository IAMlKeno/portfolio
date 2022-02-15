<?php

/***********************************************************************************************************************
 * Created by PhpStorm.
 * User: Elkeno Jones_ejones109029
 * Date: 2016-10-07
 * Time: 10:33 PM
 * Purpose:
 * This page will act as a landing page and will collect comments for active users.
 ***********************************************************************************************************************
 */

 namespace comments;

$page = 'home';
$loginFailed = false;
$error = '';
require ("dbConnections.php");
include ("functions/functions.php");
session_start();

date_default_timezone_set("America/Halifax");

// LOGOUT IF THE LOGOUT BUTTON IS PRESSED.
if (isset($_POST['logout']) == true) {
  session_unset();
}

// THIS CALL WILL ADD THE COMMENTS TO THE COMMENTS SESSION VARIABLE.
getComments($db);

// IF THE USER COMES TO THE PAGE FOR THE FIRST TIME SET LOGGED IN TO FALSE.
if (!isset($_SESSION['loggedIn'])) {
  $_SESSION['loggedIn'] = false;
}

// CHECK IF THE USER AN EXISTING USER
if (isset($_GET['status']) && $_GET['status'] == 'return') {
  if(isset($_POST['username'])) {
    $loginFailed = selectUser($_POST['username'], $_POST['password'], $db);
    if($loginFailed)
      $error = 'Username or password do not match.';
  }
}

$newComment = null;
// If the user is logged in and is submitting a comment.
if (isset($_POST['addComment']) == true) {
  if (isset($_POST['comment']) && !empty($_POST['comment'])) {
    if (isset($_POST['title']) && !empty($_POST['title'])) {
      $title = $_POST['title'];
      $message = $_POST['comment'];
      $date_time = date('Y/m/d - h:ia');
      $username = $_SESSION['loggedInUser']->username;

      $newComment = createComment($username, $title, $message, $date_time, $db);
      // Found that by using the header redirect, it solves the problem of the 
      // form being submitted over and over when the page is reloaded.
      // Research showed that redirects are a common way to counteract
      // repetitious form submissions.
      header("Location: index.php");
    }
  }
}

include ("defaults/header.php");
include("defaults/banner.php");
if ($_SESSION['comments']['commentIds'] != null) {
  echo '
    <div id="commentDiv" class="mdl-cell--12-col-desktop mdl-cell--4-col-phone mdl-cell--6-col-tablet">
      <table id="comments">
        <thead>
          <td>User</td>
          <td>Comment</td>
        </thead>';
  // TO DO: CREATE ARRAY OF THE COMMENTS THEN ECHO THEM.
  for ($i = 0; $i < count ($_SESSION['comments']['messages']); ++$i) {
    if ($_SESSION['loggedIn']) {
      if ($_SESSION['loggedInUser']->username == $_SESSION['comments']['users'][$i]) {
        echo '
          <tr>
            <td class="user">'.$_SESSION['comments']['users'][$i].'</td>
            <td class="comment">
              <a href="updateComment.php?id=' . $_SESSION['comments']['commentIds'][$i] . '">
                ' . $_SESSION['comments']['messages'][$i] . '
              </a>
            </td>
          </tr>';
      }
      else {
        echo '
          <tr>
            <td class="user">' . $_SESSION['comments']['users'][$i] . '</td>
            <td class="comment">' . $_SESSION['comments']['messages'][$i] . '</td>
          </tr>';
      }
    }
    else {
      echo '
        <tr>
          <td class="user">' . $_SESSION['comments']['users'][$i] . '</td>
          <td class="comment">' . $_SESSION['comments']['messages'][$i] . '</td>
        </tr>';
      }
    }
    echo '
      </table>
    </div>';
  }
  else {
    echo '<h1>No comments right now</h1>';
  }
  echo "<hr />";
  // If the user is logged in then display the html form that will accept 
  // their comment and add to database.
  if ($_SESSION['loggedIn']) {
    echo '
      <div id="formDiv" class="mdl-cell--12-col-desktop mdl-cell--6-col-phone mdl-cell--6-col-tablet">
        <!--Your form here for the comments-->
        <form action="index.php" method="post">
          <h3>
            Welcome ' . $_SESSION['loggedInUser']->name . '
          </h3>
          <div class="mdl-card-wide">
            <div class="mdl-card__title">
              <h4 class="mdl-card__title-text">
                <label for="title">
                  Enter your message title here:
                </label>
              </h4>    
            </div>
            <div class="mdl-card__actions mdl-card--border">
              <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                <input class="mdl-textfield__input" type="text" id="title" name="title">
                  <label class="mdl-textfield__label loginText" for="titile">
                    Title:
                  </label>
                </div>
              </div>
            </div>
            <br />
            <div class="mdl-card-wide mdl-shadow--2dp mdl-cell--6-col-phone">
              <div class="mdl-card__title">
                <h4 class="mdl-card__title-text">
                  <label for="comment">
                    Enter your comment below:
                  </label>
                </h4>
              </div>
              <div class="mdl-card__supporting-text">
                <textarea id="comment" name="comment"></textarea>
                <script>CKEDITOR.replace( "comment" );</script>
              </div>
              <div class="mdl-card__actions mdl-card--border">
                <input type="submit" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--colored mdl-button--raised" name="addComment" value="Submit Comment"/>
              </div>
            </div>
          </form>
        </div>
      <div>';
  }
  else {
    include("defaults/loginForm.php");
  }
?>
    <!-- PUT THIS IN AN IF STATEMENT SO THAT IT IS NOT SHOWN WHEN THE USER HAS LOGGED OUT ALREADY -->
    <?php
    if ($_SESSION['loggedIn']) {
      echo '
        <br />
        <div class="mdl-card mdl-small-card center-card">
          <form action="index.php" method="post">
            <div class="mdl-card__title">
              <h5 class="mdl-card__title-text">
                All done? 
              </h5>
            </div>  
            <div class="mdl-card__actions mdl-card--border">
              <input type="submit" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--colored mdl-button--raised" name="logout" value="Click here to logout" />
            </div>
          </form>
      </div>';
    }
    ?>
    </div>
  </div>
<?php include ("defaults/footer.php"); ?>
