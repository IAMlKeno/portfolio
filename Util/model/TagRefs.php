<?php
/**
 * Created by PhpStorm.
 * User: Elkeno
 * Date: 2017-06-12
 * Time: 7:00 PM
 */

namespace portfolio;


class TagRefs
{
    private $tagId;
    private $tagName;

    function __construct($tagId, $tagName)
    {
        $this->tagId = $tagId;
        $this->tagName = $tagName;
    }

    function __get($name)
    {
        return $this->$name;
    }

    function __set($name, $value)
    {
        $this->$name = $value;
    }

}