<?php
    $title = $_POST["eventTitle"];
    $date = $_POST["eventDate"];
    $desc = $_POST["eventDesc"];
?>
<?php 
    // Connect and select the 'BHA' database
    $mysqli = new mysqli("localhost", "root", "", "bhawebsite");
    if ($mysqli->connect_errno) {
        die("Connection Failed: ($mysqli->connect_errno) $mysqli->connect_error");
    }
?>
<?php
    // Gather all variables in Query
    $sql = "INSERT INTO events VALUES ('$title', '$desc', '', '$date')";
    // Issue query
    $result = $mysqli->query($sql);
    if (!$result) {
        die("Query Error");
    } 
    header('Location: events.php');
?>