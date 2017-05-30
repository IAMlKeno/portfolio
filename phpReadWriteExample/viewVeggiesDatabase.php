<?php
namespace veggie;
/**********************************************************************************************************************
 * Created by Elkeno Jones_ejones109029
 * Date: 2016-04-22
 * Time: 10:48 PM
 * Purpose:
 * This page is used to view all vegetables in the database and list their price.
 * *****************************************************************************************************************
 */

$page = 'viewVeggies';
$title = 'Veggies Menu';
$veggies = array();
//echo "<h1>CHANGE</h1>";
require("veggiesDatabaseConnection.php");
require ("model/Vegetable.php");
include('fragments/includeMenu.php');

$query = "SELECT * FROM vegetable";

$result = $db->query($query);
$num_rows = $result->num_rows;

if($num_rows > 0){
    echo "Available Veggies:<br />";
    echo "<div id=\"menuDiv\">
            <table id='veggieMenu'>";
    echo    "<tr>
                <th>Name</th><th>Price</th>
            </tr>";
    while($row = $result->fetch_assoc()){
        array_push($veggies, new Vegetable($row['name'], $row['price']));
    }

    foreach ($veggies as $veg)
    {
        echo "
            <tr>
                <td>
                    ". $veg->name. "
                </td>
                <td>
                    $ ". $veg->price. "
                </td>
            </tr>";
    }
    echo "</table></div>";
} else {
    echo "<p>There were no results.</p>";
}

include('fragments/footer.php');

$result->free();
$db->close();

