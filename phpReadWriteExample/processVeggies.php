<?php
namespace veggie;
/**
 * Author: Elkeno Jones_ejones109029
 * Date: 2016-02-05
 * Time: 2:25 PM
 * Purpose: CIS2286_Assignment3 - Process order
 */
include ("model/Line.php");
include ("model/Vegetable.php");
session_start();
$page = "";

// Define some constants
define('TAX', 0.15);
define('DELIVERY_FEE', 5);
define('FREE_DELIVERY', 50);

$DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];

date_default_timezone_set('America/Halifax');
$_POST['fName'] = htmlspecialchars($_POST['fName']);
$_POST['lName'] = htmlspecialchars($_POST['lName']);
$_POST['phone'] = htmlspecialchars($_POST['phone']);
$_POST['email'] = filter_var($_POST['email']);

// Conditional if statement for error checking:
if(empty($_POST['fName']) && empty($_POST['lName']) && empty($_POST['phone']) && empty($_POST['email'])){
    $title = "Error";
    include("fragments/includeMenu.php");
    echo "
                    <div id='content'>
                        <p>There was an error! You have not entered your full information.</p>
                    </div>
                </div>
            </body>
        </html>";

    die;
}
else if (isset($_SESSION['veggies'])) {
    $noItemsSelected = false;
    foreach ($_SESSION['veggies'] as $veg) {
        if (!empty($_POST[$veg->name]))
            $noItemsSelected = true;
    }

    if (!$noItemsSelected) {
        $title = "Error";
        include("fragments/includeMenu.php");
        echo "
                    <div id='content'>
                        <p>There was an error! You have not chosen any products!.</p>
                    </div>
                </div>
            </body>
        </html>";
        die;
    }
}

// Get customer information
$fName = $_POST['fName'];
$lName = $_POST['lName'];
$phone = $_POST['phone'];
$email = $_POST['email'];// create the line
$order = array();
foreach ($_SESSION['veggies'] as $veg)
{
    if($_POST[$veg->name] > 0)
        array_push($order, new Line(ucfirst($veg->name), $_POST[$veg->name], $veg->price));
}
$total = 0;

// Build a string to write the orders file
$output = $fName. ' '. $lName. "\r\nContact Number: ". $phone. "\r\nEmail Address: ". $email. "\r\nDate: ". date('F d Y').
    ' Time: '. date('g:iA')."\r\n";

foreach ($order as $line)
{
    $total += $line->total;
    $output .= $line->qty. "lbs - ". $line->item ." @ $". $line->price. "\r\n";
}

if($total >= 50){
    $output .= "Free Shipping!\r\n\r\n";
} else{
    $total += DELIVERY_FEE;
}
$taxAmount = $total * TAX;
$taxedTotal = $total + $taxAmount;
$output .= "Total: $$taxedTotal (Taxes: $$taxAmount)\r\n,\r\n";

// Conditional if statement that will either create the order file or simply update it by appending the information
if(!file_exists("$DOCUMENT_ROOT/orders/veggie-orders.txt")){
    $file = fopen("$DOCUMENT_ROOT/orders/veggie-orders.txt", 'w+');

    flock($file, LOCK_EX);

    if (!$file) {
        $title = "Error";
        include("fragments/includeMenu.php");
        echo "
                        <div id='content'>
                            <p><strong>Your order could not be processed at this time. Please try again later.</strong>
                            </p>
                        </div>
                    </div>
			    </body>
		    </html>";
        die;
    }

    fwrite($file, $output);
    flock($file, LOCK_UN);
    fclose($file);

} else{
    $file = fopen("$DOCUMENT_ROOT/orders/veggie-orders.txt", 'a+');

    flock($file, LOCK_EX);

    if (!$file) {
        $title = "Error";
        include("fragments/includeMenu.php");
        echo "
                        <div id='content'
                            <p><strong> Your order could not be processed at this time. Please try again later.</strong>
                            </p>
                        </div>
                    </div>
			    </body>
		    </html>";
        die;
    }

    fwrite($file, $output);
    flock($file, LOCK_UN);
    fclose($file);
}
//echo when the order was processed
$title = "Order Processed";
include("fragments/includeMenu.php");
echo "
                    <div id='content'>
                        <p>Order processed at ". date('h:ia F jS, Y')."</p>
                        <p>The total before tax was $". number_format($total, 2). "<br>The tax comes to $".
    number_format($taxAmount, 2). ".<br> And the net total is $". number_format($taxedTotal, 2). "</p>";

if($taxedTotal >= FREE_DELIVERY) {
    echo "
                <p>Heads up! YOU GOT FREE SHIPPING! <br><br>
                <a href='orderVegetables.php'>Add another order</a> now?<br>
                Or would you like to <strong><a href='resetVeggies.php'>reset the orders</a></strong>?</p>
                </div>
            </div>
            </body>
	        </html>";
} else {
    echo "
                <p><a href='orderVegetables.php'>Add another order</a> now?<br>
                Or would you like to <strong><a href='resetVeggies.php'>reset the orders</a></strong>?</p>
                </div>
            </div>
            </body>
	        </html>";
}
