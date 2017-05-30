<?php
namespace veggie;
/**
 * Author: Elkeno Jones_ejones109029
 * Date: 2016-02-05
 * Time: 2:25 PM
 * Purpose: Description of project
 */

$page = "about";
$title = "About Project";
$DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];
include("fragments/includeMenu.php") ?>
    <div id="content">
        <p>
            This is a PHP project completed by Elkeno Jones during my time at Holland College. It demonstrates the usage
            of PHP object oriented programming. It also demonstrates using PHP to read and write files on the server.
        </p>
        <p>
            The header image was also create by Elkeno Jones using Photoshop CS6.
        </p>
    </div>
<?php include("fragments/footer.php"); ?>