<?php
/**********************************************************************************************************************
 * Created by Elkeno Jones_ejones109029
 * Date: 2016-04-22
 * Time: 10:48 PM
 * Purpose:
 * Page containing to a form that will collect information to be used to add a new vegetable to the data base.
 * *****************************************************************************************************************
 */
$page = 'addVeggies';
$title = 'Add Veggies';
include('fragments/includeMenu.php');
?>
        <fieldset>
            <legend>Add Veggies</legend>
            <form method="post" action="addProcess.php">
                <table>
                    <tr>
                        <td>
                            <label for="veggieName">
                                Enter the name of the vegetable you want to add...
                            </label>
                            <br />
                            <input type="text" id="veggieName" name="veggieName">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="price">
                                Enter the price here.
                            </label>
                        </td>
                        <td>
                            $<input type="text" id="price" name="price" placeholder="0.00">
                        </td>
                    </tr>
                </table>
                <hr />
                <input type="submit">
            </form>
        </fieldset>
<?php
include('fragments/footer.php');
?>
