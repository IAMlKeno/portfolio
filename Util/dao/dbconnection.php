<?php
/**********************************************************************************************************************
 * Created by Elkeno Jones_ejones109029
 * Date: 2016-04-22
 * Time: 10:48 PM
 * Purpose:
 * Connection to the veggies database
 * *****************************************************************************************************************
 */
namespace portfolio;
use mysqli;
//$db = new mysqli('sql3.freemysqlhosting.net', 'sql3179298', 'J1QzY4P1Gd', 'sql3179298');
$db = new mysqli('localhost', 'root', '', 'portfolio');

if($db->connect_errno){

//    echo "<p>The was an error connecting to the database. Please try again later.</p>";
    header("error.php?error=0");
    exit;
}
