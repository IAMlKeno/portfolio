<?php
/**
 * Created by PhpStorm.
 * User: Elkeno
 * Date: 2017-05-28
 * Time: 5:21 PM
 */

namespace veggie;


class Line
{
    private $item;
    private $qty;
    private $price;
    private $total;

    public function __construct($item, $qty, $price)
    {
        $this->item = $item;
        $this->qty = $qty;
        $this->price = $price;
        $this->total = $this->price * $this->qty;
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