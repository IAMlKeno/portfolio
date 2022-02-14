<?php
namespace veggie;
/**
 * Created by PhpStorm.
 * User: Elkeno
 * Date: 2017-05-28
 * Time: 3:29 PM
 */

function getVeggies($db)
{
    $query = "SELECT * FROM vegetable";
    $veggies = array();
    $result = $db->query($query);
    $num_rows = $result->num_rows;

    if ($num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            array_push($veggies, new Vegetable($row['name'], $row['price']));
        }
    }

    return $veggies;
}