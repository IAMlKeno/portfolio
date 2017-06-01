<?php
/***********************************************************************************************************************
 * Created by PhpStorm.
 * User: Elkeno
 * Date: 2016-10-07
 * Time: 10:55 PM
 * Purpose:
 * This Class is used to define a User object.
 ***********************************************************************************************************************
 */
namespace comments;

class User
{
    private $username;
    private $password;
    private $name;

    public function __construct($username, $password, $name)
    {
        $this->username = $username;
        $this->password = $password;
        $this->name = $name;
    }

    // This constructor will be used to create an instance of a User object
    public function User($username, $password, $name)
    {
        $this->username = $username;
        $this->password = $password;
        $this->name = $name;
    }

    // MAGIC GETTERS AND SETTERS
    public function __get($value)
    {
        // TODO: Implement __get() method.
        return $this->$value;
    }

    public function __set($name, $value)
    {
        // TODO: Implement __set() method.
        $this->$name = $value;
    }
}