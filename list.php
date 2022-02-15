<?php
/**
 * List projects based on directory layout.
 * User: Elkeno
 * Date: 2022-02-14
 */
namespace portfolio;
$title = "Projects";

require("Util/model/Project.php");
require("Util/fragments/head.php");
?>
<body>
  <div class="demo-layout mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header">
    <?php require("Util/fragments/menu.php"); ?>
    <main class="mdl-layout__content mdl-color--grey-100" style="min-height:600px">
      <div class="mdl-grid demo-content">
        <?php
          // libxml_use_internal_errors(true);
          $projectXml = simplexml_load_file(__DIR__ . '/resources/projects.xml');
          // if ($projectXml === false) {
          //   foreach(libxml_get_errors() as $error) {
          //     echo "<br>", $error->message;
          //   }
          //   die();
          // }

          $projects = $projectXml->project;
          if (count($projects) > 0) {
            foreach ($projects as $project) {
              include("Util/fragments/mdlCard.php");
            }
          }
          else {
            include ("Util/fragments/noResultsCard.php");
          }
          ?>
          </div>
        </main>
      </div>
<?php include ("Util/fragments/footer.php");