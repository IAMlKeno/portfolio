<?php
/**
 * Created by PhpStorm.
 * User: Elkeno
 * Date: 2017-06-12
 * Time: 7:42 PM
 */
namespace portfolio;
//include ("../model/Project.php");
//include ("../model/TagRefs.php");

/**
 * This function will will access the database and retrieve projects
 * related to the tag passed.
 *
 * @param $db
 *  A database connection.
 * @param $tag
 *  A string representing the tag to search for.
 *
 * @return array
 *  An associative array of results.
 */
function getProjectsByTag($db, $tag) {
  $tag = mysqli_real_escape_string($db, $tag);
  $query = "SELECT * FROM `tagRefs` WHERE `tagName` LIKE '$tag'";

  $result = $db->query($query);
  $projects = array();
  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      $queryTwo = "SELECT * FROM `project` WHERE `tags` LIKE '%{$row['tagId']}%'";
      $resultTwo = $db->query($queryTwo);

      if ($resultTwo->num_rows > 0) {
        while ($row = $resultTwo->fetch_assoc()) {
          $tempProject = new Project(
            $row["projectId"],
            $row["projectTitle"],
            $row["description"],
            $row["link"],
            $row["linkDescription"],
            $row["imageLocation"],
            $row["projectType"],
            $row["tags"]
          );
          array_push($projects, $tempProject);
        }
      }
    }
  }

  return $projects;
}