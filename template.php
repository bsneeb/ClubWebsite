<?php 
    include('header.php');
    $category = $_GET['site'];
?>
<?php 
    // Connect and select the 'test' database
    $mysqli = new mysqli("localhost", "root", "", "bhawebsite");
    if ($mysqli->connect_errno) {
        die("Connection Failed: ($mysqli->connect_errno) $mysqli->connect_error");
    }

    echo "<br><br><br><br><br><p> $category </p>";
?>

