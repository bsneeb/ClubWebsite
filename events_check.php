<?php
  include("header.php");
?>
<?php $event = $_GET['event']; ?>
<?php 
    // Connect and select the 'BHA' database
    $mysqli = new mysqli("localhost", "root", "", "bhawebsite");
    if ($mysqli->connect_errno) {
        die("Connection Failed: ($mysqli->connect_errno) $mysqli->connect_error");
    }
    echo "<div id='eventConfirm'>";
    echo "<h2> Signed up for $event!<br>
              See you there! </h2><br>";
    echo "<img src='img/bha_logo.png'>";
    echo "</div>";
?>
<?php
    // Select event's attendance var to update
    $sql = "SELECT attendance FROM events WHERE title='$event'";

    // Issue query
    $result = $mysqli->query($sql);
    if (!$result) {
        die("Query Error");
    } 
    while ($row = $result->fetch_row()){
          $attend = $row[0];
          break;
    }
    $attend = $attend + 1;
?>
<?php
// Update attendance 
$sql = "UPDATE events SET attendance='$attend'";

// Issue query
$result = $mysqli->query($sql);
if (!$result) {
    die("Query Error");
} 
?>







