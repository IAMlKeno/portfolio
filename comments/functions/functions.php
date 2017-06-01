<?php
/***********************************************************************************************************************
 * Created by PhpStorm.
 * User: Elkeno Jones_ejones109029
 * Date: 2016-10-07
 * Time: 11:39 PM
 * Purpose:
 * This script holds the functions that will be used throughout the web pages (index.php, register.php)
 * *********************************************************************************************************************
 */
namespace comments;
include ("models/User.php");
include  ('models/Comment.php');

/**
 * This function will be used to create a new instance of a Comment. It accepts parameters passed to it from the comment
 * form on index.php
 * @author Elkeno Jones_ejones109029
 * Date: 2016/10/07
 *
 * @param $username
 * @param $title
 * @param $message
 * @param $date_time
 * @return Comment
 */
function createComment($username, $title, $message, $date_time, $db)
{
//    $db = new \mysqli('localhost', 'root', '', 'cis2288_comments');
    $newComment = new Comment($username, $title, $message, $date_time);

    $sql = "INSERT INTO `comments`(`username`, `title`, `message`, `date_time`)
            VALUES ('$newComment->username', '$newComment->title', '$newComment->message', '$newComment->date_time')";

    $db->query($sql);

    return $newComment;
}

/**
 * This function will be used to insert a instance of a User. It accepts a User parameter and uses its attributes to
 * submit data to the table
 * @author Elkeno Jones_ejones109029
 * Date: 2016/10/08
 *
 * @param $user
 * @param $db
 * @return boolean
 */
function insertNewUser($user, $db)
{
    $password = sha1($user->password);

    $sql = "INSERT INTO `users` (`username`, `password`, `name`) 
            VALUES ('$user->username', '$password', '$user->name')";

    if($db->query($sql) === false)
    {
        $error = 'Username already exists!';
        return false;
    }
    else
    {
        return true;
    }
}

/**
 * This function will be used to select a specific user (ensuring that the user exists before they can create a comment
 * @author Elkeno Jones_ejones109029
 * Date: 2016/10/08
 *
 * @param $username
 * @param $password
 * @return boolean
 */
function selectUser($username, $password, $db)
{
    $username = mysqli_real_escape_string($db, $username);
    $password = mysqli_real_escape_string($db, $password);

    $password = sha1($password);

    $sql = "SELECT * FROM `users` WHERE '$username' LIKE `username` AND '$password' LIKE `password`";

    $result = $db->query($sql);

    if ($result->num_rows > 0)
    {
        while($row = $result->fetch_assoc())
        {
            $_SESSION['loggedInUser'] = new User($row['username'], $row['password'], $row['name']);
        }
        $_SESSION['loggedIn'] = true;
    }
    else
    {
        return true;
    }
}

/**
 * @author Elkeno Jones_ejones109029
 * Date: 2016/10/08
 * Purpose:
 * THIS FUNCTION WILL GET ALL OF THE COMMENTS AND STORE THEM IN AN ARRAY
 * @return User
 */
function getComments($db)
{
    $commentArray = array();
    $userId = array();
    $commentIds = array();

    $sql = "SELECT * FROM `comments` ORDER BY `date_time` DESC";
    $results = $db->query($sql);

    if($results->num_rows > 0)
    {
        while($row = $results->fetch_assoc())
        {
            array_push($commentArray, $row['message']);
            array_push($userId, $row['username']);
            array_push($commentIds, $row['commentId']);
        };
    }

    $_SESSION['comments']['messages'] = $commentArray;
    $_SESSION['comments']['users'] = $userId;
    $_SESSION['comments']['commentIds'] = $commentIds;

    return $_SESSION['comments'];
}

/**
 * This function will be used to select a specific comment (ensuring that the user exist before they can create a comment
 * @author Elkeno Jones_ejones109029
 * Date: 2016/10/09
 *
 * @param $commentId
 * @param $db
 * @return Comment
 */
function selectComment($commentId, $db)
{$comment = false;

    $username = mysqli_real_escape_string($db, $commentId);

    $sql = "SELECT * FROM `comments` WHERE '$commentId' LIKE `commentId`";

    $result = $db->query($sql);

    if ($result->num_rows > 0)
    {
        while($row = $result->fetch_assoc())
        {
            $comment = new Comment($row['username'], $row['title'], $row['message'], $row['date_time']);
            $comment->setCommentId($row['commentId']);
        }

    }
    return $comment;
}

/**
 * This function will be used to either update or delete a comment entry in the cis2288_comments database
 * @author Elkeno Jones_ejones109029
 * Date: 2016/10/09
 *
 * @param $comment
 * @param $commentId
 * @param $db
 * @param $isDelete
 */
function updateComment($comment, $commentId, $db, $isDelete)
{
    $sql = null;
    if ($isDelete)
    {
        $sql = "DELETE FROM `comments` WHERE `commentId` LIKE $commentId";
    }
    else
    {
        $sql = "UPDATE `comments` SET `message` = '$comment' WHERE `commentId` LIKE $commentId";
    }

    if($sql != null)
    {
        $db->query($sql);
    }
}
