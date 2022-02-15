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
$DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'] . '/portfolio';
include("fragments/includeMenu.php") ?>
  <div id="content">
    <table>
    <?php
      if (!file_exists("$DOCUMENT_ROOT/orders/veggie-orders.txt")) {
        echo '<tr>no orders</tr></table></div>';
        include("fragments/footer.php");
        die;
      }
      else {
        $file = fopen("$DOCUMENT_ROOT/orders/veggie-orders.txt", 'rb');
        $order = fgets($file, 999);
        if ($order == "") {
          echo '<tr>There are no pending orders!</tr></table></div>';
          include("fragments/footer.php");
          die;
        };
      }

      rewind($file);
      echo "<tr>";
      while (!feof($file)) {
        $order = fgets($file, 999);
        $char = fgetc($file);
        if ($char == ",") {
          echo "<hr></tr><tr>";
        }
        elseif ($char == "") {
          break;
        }
        else {
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