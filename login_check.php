<?php
  include("header.php");
?>
<?php
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
    $sql = "SELECT * FROM members WHERE (email='$email') AND (password='$password')";

    // Issue query
    $result = $mysqli->query($sql);
    if (!$result) {
        die("Query Error");
    } 
    while ($row = $result->fetch_row()){
        echo   "<div id='login_success'>
                Log In Success!!! <br>\n
                First Name: $row[2] <br>\n
                Last Name: $row[1] <br>\n
                Email: $row[3] <br>\n
                </div>";
    }
?>
