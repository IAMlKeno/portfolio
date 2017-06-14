<?php
/**
 * Created by PhpStorm.
 * User: Elkeno
 * Date: 2017-06-12
 * Time: 6:39 PM
 */
namespace portfolio;
$title = "Directory";
require("Util/model/Project.php");
require("Util/model/TagRefs.php");
require("Util/fragments/head.php");
require("Util/dao/dbconnection.php");
require ("Util/functions/dbfunctions.php");
?>
<body>
    <div class="demo-layout mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header">
        <?php
        require("Util/fragments/menu.php");
        ?>
        <main class="mdl-layout__content mdl-color--grey-100" style="min-height:600px">
            <div class="mdl-grid demo-content">
            <?php
                $projects = \portfolio\getProjectsByTag($db, $_GET["type"]);
                if(count($projects) > 0) {
                    foreach ($projects as $project)
                        include("Util/fragments/mdlCard.php");
                } else {
                    include ("Util/fragments/noResultsCard.php");
                }
            ?>
            </div>
        </main>
    </div>
<?php include ("Util/fragments/footer.php");