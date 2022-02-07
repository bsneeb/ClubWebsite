<?php
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $email = $_POST["email"];
    $password = $_POST["password"];
?>
<?php 
    $mysqli = new mysqli("localhost", "root", "", "bhawebsite");
    if ($mysqli->connect_errno) {
        die("Connection Failed: ($mysqli->connect_errno) $mysqli->connect_error");
    }
?>
<?php
    // Gather all variables in Query
    $sql = "INSERT INTO members VALUES ('', '$lname', '$fname', '$email', '$password')";

    // Issue query
    $result = $mysqli->query($sql);
    if (!$result) {
        die("Query Error");
    } else {
        echo "<p> Account Created! </p>";
    }
    header('Location: homePage.php');
?>
