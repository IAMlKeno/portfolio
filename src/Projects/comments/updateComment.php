<?php
/***********************************************************************************************************************
 * Created by PhpStorm.
 * User: Elkeno Jones_ejones109029
 * Date: 2016-10-09
 * Time: 9:24 AM
 * Purpose:
 * This page will be used to hold the comment to be updated or deleted. It will be called from the index.php script
 ***********************************************************************************************************************
 */
namespace comments;
$page = 'update';
$comment = null;
$commentId = null;
$user = null;
require ('dbConnections.php');
require('functions/functions.php');
session_start();

// One function will be used to either update or delete a comment. A boolean will be sent to dictate the desired action
$isUpdate = false;
if (isset($_POST['updateComment']) == true){
    updateComment($_POST['comment'], $_POST['commentId'], $db, false);
    $isUpdate = true;
}
else if(isset($_POST['deleteComment']) == true)
{
    updateComment("", $_POST['commentId'], $db, true);
    $isUpdate = true;
}
if ($isUpdate)
{
    header("Location: index.php");
}

include ('defaults/header.php');
include ('defaults/banner.php');
?>
    <?php
    if(isset($_GET['id']) && !empty($_GET['id']) && $_SESSION['loggedIn'])
    {
        $commentId = $_GET['id'];
        $comment = selectComment($commentId, $db);
        if(!$comment)
        {
            echo '<h3>There was no comment sent!</h3>
                <strong><a href="index.php">Click here</a></strong> to head back.';
        }
        else
        {
            if ($_SESSION['loggedInUser']->username == $comment->username)
            {
                echo '
                    <form action="updateComment.php" method="post">
                        <input type="hidden" name="commentId" value="' . $comment->commentId . '" />
                        <div class="mdl-card-wide mdl-cell--12-col mdl-cell--6-col-phone">
                            <textarea id="comment" class="comment" name="comment">' . $comment->message . '</textarea>
                            <script>
                                CKEDITOR.replace("comment")
                            </script>
                            <br />
                            <div id="buttons" class="mdl-card__actions mdl-card--border">
                                <input type="submit" class="mdl-button mdl-js-button mdl-js-ripple-effect 
                                    mdl-button--raised mdl-button--colored" name="updateComment" value="Update" />
                                <span class="justALittleSpace">
                                </span>
                                <input type="submit" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--colored
                                    mdl-button--raised" name="deleteComment" value="Delete" />
                            </div>
                        </div>
                        
                    </form>';
            }
            else
            {
                echo '<h3>You aren\'t allowed!</h3>
                <strong><a href="index.php">Click here</a></strong> to head back.';
            }
        }
    }
    else
    {
        echo '<h3>There was no comment sent!</h3>
                <strong><a href="index.php">Click here</a></strong> to head back.';
    }
    ?>

</div>

<?php
include('defaults/footer.php');
?>
