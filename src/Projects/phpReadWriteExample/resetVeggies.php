<?php
/**
 * Author: Elkeno Jones_ejones109029
 * Date: 2016-02-05
 * Time: 2:25 PM
 * Purpose: CIS2286_Assignment3 - Reset file
 */

$page = "resetVeggies";
$title = "Reset Orders";
$DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];
?>
    <!--    Using php to include menu on page -->
    <?php include("fragments/includeMenu.php") ?>
    <?php
    if(!isset($_POST['answer'])){
        echo '
            <div id="content">
                <form action="resetVeggies.php" method="post">
                    <label for="yes">
                        Are you sure that you want to reset the order sheet?
                    </label>
                    <br />
                    <input type="radio" name="answer" value="YES" id="yes">Yes
                    <br />
                    <input type="radio" name="answer" value="NO" id="no">Sorry, my mistake!
                    <br />
                    <input type="submit" value="Let\'s DO IT">
                </form>
            </div>';
    } else {
        if($_POST['answer'] == 'YES') {
            // Reset order text file:
            $file = fopen("$DOCUMENT_ROOT/orders/veggie-orders.txt", 'w');

            echo '
                        <div id="content"><p><strong> The orders files has been reset!</strong></p><br>
                        <p><a href="index.php">Return to orders page?</a></p></div>';
        } else {
            header("Location: index.php");
        }
    }
    include("fragments/footer.php")
?>
