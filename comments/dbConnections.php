<?php
/***********************************************************************************************************************
 * Created by PhpStorm.
 * User: Elkeno Jones_ejones109029
 * Date: 2016-10-08
 * Time: 8:52 AM
 * Purpose:
 * This script is used to create the connection to the cis2288_comments database
 ***********************************************************************************************************************
 */
namespace comments;
use mysqli;

$db = new mysqli('sql11.freemysqlhosting.net', 'sql11177841', 'Cg6KimKvqq', 'sql11177841');

if($db->connect_errno)
{
    echo "<h2>Failed to connect to the data base!</h2> 
    <p>It may not exist or you do not have the privileges to connect.<br />
    please run the included sql script.</p>";
    die();
}



