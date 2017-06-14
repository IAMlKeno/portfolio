<?php
/**
 * Created by PhpStorm.
 * User: Elkeno
 * Date: 2017-06-12
 * Time: 6:44 PM
 */

namespace portfolio;


class Project
{
    private $projectId;
    private $projectTitle;
    private $description;
    private $link;
    private $linkDescription;
    private $imageLocation;
    private $projectType;
    private $tags;
    private $tagsList;

    function __construct($projectId, $projectTitle, $descript, $link, $linkDescript, $imageLocation, $projectType, $tags)
    {
        $this->projectId = $projectId;
        $this->projectTitle = $projectTitle;
        $this->description = $descript;
        $this->link = $link;
        $this->linkDescription = $linkDescript;
        $this->imageLocation = $imageLocation;
        $this->projectType = $projectType;
        $this->tags = $tags;
        if(strpos($tags, ",") !=false){
            $this->tagsList = explode(",", $tags);
        }
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