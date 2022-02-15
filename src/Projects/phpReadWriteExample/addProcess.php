<?php
/**********************************************************************************************************************
 * Created by Elkeno Jones_ejones109029
 * Date: 2016-04-22
 * Time: 10:48 PM
 * Purpose:
 * Page containing to a form that will collect information to be used to add a new vegetable to the data base.
 * *****************************************************************************************************************
 */

$title = 'Action Processed';
include('fragments/includeMenu.php');
require ("veggiesDatabaseConnection.php");

if (isset($_POST['veggieName']) && isset($_POST['price'])) {
  $_POST['price'] = mysqli_real_escape_string($db, $_POST['price']);
  if (is_numeric($_POST['price'])) {
    $name = mysqli_real_escape_string($db, $_POST['veggieName']);
    $price = $_POST['price'];
  }
  else {
    echo "
      <p>
        You did not enter a number! Please <a href='javascript:window.history.go(-1)'>GO BACK</a> and correct this!
      </p>
    </div>
    </body>
    </html>";
    exit;
  }
}
else {
  echo "
    <p>
      You missed some information on your form! Please <a href='javascript:window.history.go(-1)'>GO BACK</a> and correct this!
    </p>
    </div>
    </body>
    </html>";
  exit;
}

$query = "INSERT INTO `vegetable` (`name`, `price`)
            VALUES ('$name', $price)";
$result = $db->query($query);

if ($result) {
  echo "<p>Database updated successfully.</p>";
}
else {
  echo "<p>Insert unsuccessful.</p>";
}

//$result->free(); Not necessary in this case
$db->close();

echo "<p><a href='addVeggies.php'>Add another</a></p>";

include('fragments/footer.php');