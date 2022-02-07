<?php
    $author = $_POST["author"];
    $date = $_POST["date"];
    $title = $_POST["title"];
    $image = $_POST["image"];
    $contents = $_POST["contents"];
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
    $sql = "INSERT INTO blog VALUES ('$title', '$date', '$contents', '', '$author', '$image')";

    // Issue query
    $result = $mysqli->query($sql);
    if (!$result) {
        die("Query Error");
    } 
    header('Location: blog.php');
?>