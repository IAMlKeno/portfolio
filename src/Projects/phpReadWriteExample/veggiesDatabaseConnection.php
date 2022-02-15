<?php
/**********************************************************************************************************************
 * Created by Elkeno Jones_ejones109029
 * Date: 2016-04-22
 * Time: 10:48 PM
 * Purpose:
 * Connection to the veggies database
 * *****************************************************************************************************************
 */

// $db = new mysqli('mgs0iaapcj3p9srz.cbetxkdyhwsb.us-east-1.rds.amazonaws.com', 'pcgw9sbez1mj6h3v', 'm7cils8i7quwxekk', 'd4sqila9g6x7qxou');
// Localhost dev'in.
$db = new mysqli(
  'localhost', // hostname
  'ejones', // username
  'Test1234', // pass
  'veggies' // database.
);

if ($db->connect_errno) {
    echo "<p>The was an error connecting to the database. Please try again later.</p>";
    exit;
}
