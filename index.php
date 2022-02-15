<?php
/**
 * Created by PhpStorm.
 * User: Elkeno
 * Date: 2017-05-30
 * Time: 5:44 PM
 */

$title = "Home - Elkeno's Portfolio";
$user = null;
$doesUserExist = false;

if (!isset($_COOKIE['user']) || empty($_COOKIE['user'])) {
  setcookie('user', "", time()+60*60*24*31);
}
else {
  if ($_COOKIE['user'] == "") {
    $doesUserExist = false;
  }
  else {
    $doesUserExist = true;
    $user = $_COOKIE['user'];
  }
}

if(isset($_GET['userSubmit']) == true) {
//    setcookie('user', $_GET['username'], time()+60*60*24*31);

  $user = filter_var($_GET['username'], FILTER_SANITIZE_STRING);
  $user = ucfirst($user);
  if (strpos($user, " ")) {
    $nameArray = explode(" ", $user);
    $nameArray[1] = ucfirst($nameArray[1]);
    $user = $nameArray[0]. " ". $nameArray[1];
  }
  $_COOKIE['user'] = $user;
  $doesUserExist = true;
}
require("Util/fragments/head.php");
?>
<body>
  <div class="demo-layout mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header">

  <?php require("Util/fragments/menu.php"); ?>

  <main class="mdl-layout__content mdl-color--grey-100" style="min-height:600px">
    <div class="mdl-grid demo-content">
      <div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet welcomeMessage">
        <h2 class="welcomeTitle">Welcome to Elkeno's Portfolio</h2>
        <p>
          This website will act as a directory, that will host some of the work that I have done. Such things as:
          <ul class="mdl-list">
            <li class="mdl-list__item mdl-list__item--two-line">
              <span class="mdl-list__item-primary-content">
                <i class="material-icons mdl-list__item-icon">stop</i>
                <span>Art</span>
                <span class="mdl-list__item-sub-title">
                  sketches and digital
                </span>
              </span>
            </li>
            <li class="mdl-list__item mdl-list__item--two-line">
              <span class="mdl-list__item-primary-content">
                <i class="material-icons mdl-list__item-icon">stop</i>
                <span>Websites</span>
                <span class="mdl-list__item-sub-title">
                  (written in various languages such as Java and PHP
                </span>
              </span>
            </li>
            <li class="mdl-list__item mdl-list__item--two-line">
              <span class="mdl-list__item-primary-content">
                <i class="material-icons mdl-list__item-icon">stop</i>
                <span>Mobile Apps</span>
                <span class="mdl-list__item-sub-title">
                  Android, iOS, ionic builds
                </span>
              </span>
            </li>
            <li class="mdl-list__item mdl-list__item--two-line">
              <span class="mdl-list__item-primary-content">
                <i class="material-icons mdl-list__item-icon">stop</i>
                  <span>Video games</span>
                  <span class="mdl-list__item-sub-title">
                    I am currently working to learn the Unity engine.
                  </span>
                </span>
              </li>
            </ul>
          </p>
        </div>
        <?php
          if (!$doesUserExist)
            // include ("Util/fragments/nameCard.php");
        ?>
      </div>
    </main>
  </div>
<?php include ("Util/fragments/footer.php");
