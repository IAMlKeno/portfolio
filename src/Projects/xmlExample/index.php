<?php

/**
 * @author: Elkeno Jones_ejones109029
 * Date: 2016-11-06
 * Time: 5:52 PM
 * Purpose:
 * This php file will read from forecast.xml. This address part three of the cis2288 assignment 3 part 3. It doubles as
 * the index page for the xml web page. The user can view the xsl property by going directly to the forecast.xml page,
 */
?>

<!DOCTYPE html>
<html>
  <head>
    <title>XML Example - PHP</title>
    <link rel="stylesheet" href="stylesheets/xmlStyle.css"/>
    <link rel="stylesheet" href="stylesheets/menuStyle.css"/>
  </head>
  <body>
  <div class="navBar">
    <ul>
      <li>
        <a href="index.php">Forecast PHP</a>
      </li>
      <li>
        <a href="forecast.xml">Forecast XSLT</a>
      </li>
      <li>
        <a href="part1/audioReceiverXML">Audio Receiver XSLT</a>
      </li>
      <li>
        <a href="./about.php">About Project</a>
      </li>
      <li>
        <a href="../../../index.php">Back to Portfolio</a>
      </li>
    </ul>
  </div>
  <div id="container">
  <?php
    // Initialize variables (xml object, averages and a counter).
    $xml = simplexml_load_file("forecast.xml");
    $location = $xml->location;
    $daily = $xml->daily;
    $averageLow = 0;
    $averageHigh = 0;
    $counter = 0;

    // This section read the location in the xml object.
    echo '    <span class="location">Forecast for: '. $location->city. ', '. $location->province. ', '. $location->country.'</span><br />';
    echo '
      <span class="dateIssued">issued at '.$location->issued.'</span>
      <br />';
    echo '
      <span class="heading">Five day forecast</span>
      <br />';
    echo '
      <span class="degrees">Degrees in '. $location->degrees .'</span>';
    echo '
      <table class="forecast">
        <tbody>
          <tr>';
            // Using this loop, it will iterate through each day.
          foreach ($daily->day as $day) {
            ++$counter;
            $averageHigh += (int) $day->high;
            $averageLow += (int) $day->low;

            echo '
              <td>'.
                $day->date . '<br /><img src="images/' . $day->condition . '.jpg" />
                <br />
                High: ' . $day->high . '&deg;
                <br/>
                Low: ' . $day->low . '&deg;
                <hr />' .
                $day->description .
              '</td>';
          }
          // Calculation for the averages of the high and low.
          $averageHigh = $averageHigh / $counter;
          $averageLow = $averageLow / $counter;

          echo '
            </tr>
          </tbody>
        </table>
        <h4>Average High: ' . $averageHigh . '&deg;</h4>
        <h4>Average Low: ' . $averageLow . '&deg;</h4>';
        ?>
    </div>
  </body>
</html>
