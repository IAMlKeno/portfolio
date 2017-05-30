<?php
/**
 * Created by PhpStorm.
 * User: Elkeno
 * Date: 2017-05-28
 * Time: 1:53 PM
 */

namespace veggie;


class Vegetable
{

    private $name;
    private $price;

    function __construct($name, $price)
    {
        $this->name = $name;
        $this->price = $price;
    }

    public function __get($name)
    {
        return $this->$name;
    }

    public function __set($name, $value)
    {
      $this->$name = $value;
    }

}