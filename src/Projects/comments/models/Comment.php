<?php
/***********************************************************************************************************************
 * Created by PhpStorm.
 * User: Elkeno Jones_ejones109029
 * Date: 2016-10-07
 * Time: 11:12 PM
 * Purpose:
 * Comment Class used to create instances of a comment
 ***********************************************************************************************************************
 */
namespace comments;

class Comment
{
    private $username;
    private $title;
    private $message;
    private $date_time;
    private $commentId;

    public function __construct($username, $title, $message, $date_time)
    {
        $this->username = $username;
        $this->message = $message;
        $this->date_time = $date_time;
        $this->title = $title;
    }

    // Constructor used to create instances of a comment
    public function Comment($username, $title, $message, $date_time)
    {
        $this->username = $username;
        $this->message = $message;
        $this->date_time = $date_time;
        $this->title = $title;
    }

    // MAGIC GETTER AND SETTER
    public function __get($name)
    {
        // TODO: Implement __get() method.
        return $this->$name;
    }

    public function __set($name, $value)
    {
        // TODO: Implement __set() method.
        $this->$name = $value;
    }

    /*
    This function will be called by the selectComment() method in the functions page. As the customer constructor does
    not assign the commentId attribute. However, when a specific comment is being edited the commentId is necessary
    */
    public function setCommentId($x)
    {
        $this->commentId = $x;
    }
}