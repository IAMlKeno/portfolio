<?php
namespace veggie;
/**
 * Author: Elkeno Jones_ejones109029
 * Date: 2016-02-05
 * Time: 2:25 PM
 * Purpose: CIS2286_Assignment3 - View Order file
 */

$page = "viewOrders";
$title = "View Orders";
$DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];
include("fragments/includeMenu.php") ?>
    <div id="content">
        <table>
            <?php
            if(!file_exists("$DOCUMENT_ROOT/orders/veggie-orders.txt"))
            {
                /*(!$file)*/
                echo '<tr>no orders</tr></table></div>';
                include("fragments/footer.php");
                die;
            }else{
                $file = fopen("$DOCUMENT_ROOT/orders/veggie-orders.txt", 'rb');
                $order = fgets($file, 999);
                if($order == ""){
                    echo '<tr>There are no pending orders!</tr></table></div>';
                    include("fragments/footer.php");
                    die;
                };
            }

            rewind($file);
            echo "<tr>";
            while(!feof($file)){
                $order = fgets($file, 999);
                $char = fgetc($file);

                //foreach($order as $a){
                if($char == ","){
                    echo "<hr></tr><tr>";
                }else if($char == "") {
                    break;
                }else{
                    $position = (ftell($file) -1);
                    fseek($file, $position);
                    echo $order. "<br>";
                };
            }
            echo "</tr>";
            fclose($file);
            ?>
        </table>
    </div>
<?php include("fragments/footer.php"); ?>