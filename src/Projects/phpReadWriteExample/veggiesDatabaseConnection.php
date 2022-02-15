<?php
/**********************************************************************************************************************
 * Created by Elkeno Jones_ejones109029
 * Date: 2016-04-22
 * Time: 10:48 PM
 * Purpose:
 * Connection to the veggies database
 * *****************************************************************************************************************
 */

// For demo'in
$db = new mysqli(
  'sql3.freemysqlhosting.net',
  'sql3472880',
  'K1YJf1iqpx',
  'sql3472880'
);

// Localhost dev'in.
// $db = new mysqli(
//   'localhost', // hostname
//   'ejones', // username
//   'Test1234', // pass
//   'veggies' // database.
// );

if ($db->connect_errno) {
    echo "<p>The was an error connecting to the database. Please try again later.</p>";
    exit;
}
