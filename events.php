<?php
  include("header.php");
?>
<?php 
    // Connect and select the 'BHA' database
    $mysqli = new mysqli("localhost", "root", "", "bhawebsite");
    if ($mysqli->connect_errno) {
        die("Connection Failed: ($mysqli->connect_errno) $mysqli->connect_error");
    }
?>
<?php
    //Select Events from the table
    $sql = "SELECT * FROM events";

    //Issue the query
    $result = $mysqli->query($sql);
    if(!$result) {
        die("Query Error: ($mysqli->errno) $mysqli->errno<br>SQL = $sql");
    }

    $titles = array();
    $dates = array();
    $descs = array();
    $i = 0; 

    // Display all events 
    echo "<div class='eventpost-background'>";
    while ($row = $result->fetch_row()){
      $titles[$i] = $row[0];
      $dates[$i] = $row[3];
      $descs[$i] = $row[1];
      echo "<div class='eventpost-container'>";
        echo "<a class='eventpost-title'> $titles[$i] </a><br><br>";
        echo "<a class='eventpost-desc'> $dates[$i] </a><br><br>";
        echo "<a class='eventpost-desc'> $descs[$i] </a><br><br>";
        $url = "events_check.php?event=".$titles[$i];
        echo "<a href='$url'> Sign up here! </a><br>";
      echo "</div>";
      $i++;
    }
    echo "</div>";
?>

