<?php
/**********************************************************************************************************************
 * Created by Elkeno Jones_ejones109029
 * Date: 2016-04-22
 * Time: 10:48 PM
 * Purpose:
 * Page containing to a form that will collect information to be used to add a new vegetable to the data base.
 * *****************************************************************************************************************
 */
?>

<!DOCTYPE html>
<html>
<head>
    <title><?php echo "$title";?></title>
    <link rel="stylesheet" href="style/veggiesStyle.css">
</head>
<body>
<div id="container">
    <div id="header">
        <h1>Veggies-R-Us</h1>
    </div>
<div class="navBar">
        <ul>
            <li>
                <a href="orderVegetables.php" class="<?php if($page ==  "orderVegetables") {echo "current";} ?>">
                    Order Vegetables
                </a>
            </li>
            <li>
                <a href="viewOrders.php" class="<?php if($page ==  "viewOrders") {echo "current";} ?>">
                    View Orders
                </a>
            </li>
            <li>
                <a href="resetVeggies.php" class="<?php if($page ==  "resetVeggies") {echo "current";} ?>">
                    Reset Orders
                </a>
            </li>
            <li>
                <a href="addVeggies.php" class="<?php if($page == "addVeggies") {echo "current";} ?>">
                    Add Veggies
                </a>
            </li>
            <li>
                <a href="viewVeggiesDatabase.php" class="<?php if($page == "viewVeggies") {echo "current";} ?>">
                    View Veggies
                </a>
            </li>
            <li>
                <a href="about.php" class="<?php if($page ==  "about") {echo "current";} ?>">
                    About Project
                </a>
            </li>
	</ul>
</div>
    