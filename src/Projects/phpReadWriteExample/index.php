<?php
namespace veggie;
/**********************************************************************************************************************
 * Created by Elkeno Jones_ejones109029
 * Date: 2016-04-22
 * Time: 10:48 PM
 * Purpose:
 * Page containing a form that will collect information to be used to add a new vegetable to the database.
 * *****************************************************************************************************************
 */
session_start();

$page = "orderVegetables";
$title = 'Vegetable Order Form';

$DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];
// var_dump($DOCUMENT_ROOT . '/porfolio');die();

include("fragments/includeMenu.php") ?>
    <fieldset>
        <legend>Order Form</legend>
        <form action="processVeggies.php" method="post">
            <h3>Customer Information</h3>
            <hr>
            <table>
                <tr>
                    <td>
                        <label for="fName">
                            First Name
                        </label>
                    </td>
                    <td>
                        <input type="text" id="fName" name="fName" class="customerInfo">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="lName">
                            Last Name
                        </label>
                    </td>
                    <td>
                        <input type="text" id="lName" name="lName" class="customerInfo">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="phone">
                            Contact Number
                        </label>
                    </td>
                    <td>
                        <input type="text" id="phone" name="phone" maxlength="10" placeholder="9021234567" class="customerInfo">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="email">
                            Email Address
                        </label>
                    </td>
                    <td>
                        <input type="text" id="email" name="email" class="customerInfo">
                    </td>
                </tr>
            </table>
            <hr>
            <h3 id="menuHeader">Menu</h3>
            <hr>
            <?php
                include("veggiesDatabaseConnection.php");
                include("model/Vegetable.php");
                include("functions.php");
            ?>
            <table id='orderTable'>
                <tr>
                    <th>Quantity</th>
                    <th class="productCol">Product</th>
                    <th class='priceCol'>Price</th>
                    <th >Cost</th>
                </tr>
                <?php
                    $veggies = \veggie\getVeggies($db);
                    $_SESSION['veggies'] = $veggies;
                foreach ($veggies as $veg)
                {
                    echo "
                    <tr>
                        <td class='quantityCol'>
                            <select id='$veg->name' name='$veg->name' class='vegetable' 
                                onchange='sumLine(this, \"". $veg->name ."price\", \"". $veg->name ."LineTotal\")'>";
                                for($i=0; $i<31;++$i)
                                {
                                    echo "<option value='$i'>$i</option>";
                                }
                    echo"    </select> lbs
                        </td>
                        <td class='productCol'>
                            <label for='$veg->name'>". ucfirst($veg->name)."</label>
                        </td>
                        <td class='priceCol'><input type='hidden' id='".$veg->name."price' value='".$veg->price."'>$$veg->price</span></td>
                        <td class='costCol' id='".$veg->name."LineTotal'>0.00</td>
                        <input type='hidden' class='hiddenCost' id='".$veg->name."LineTotalValue' value='' />
                    </tr>"
                    ;
                }
                ?>
            </table>
            <div id="totalDiv">
                <span id='total'>0.00</span>
            </div>
            <hr>
            <span id="spanSubmitOrder" onmouseover="validateForm()">
                <input type="submit" id="submit" value="Submit Order" onmouseover="validateForm()" disabled="disabled">
            </span>

        </form>
    </fieldset>
<?php
    include('fragments/footer.php');
?>
<script src="js/orderVeggies.js">
</script>
