<?php
// W3 Schools template used for header nav bar
  include("styles.php");
?>
<?php 
    // Connect and select the 'bhawebsite' database
    $mysqli = new mysqli("localhost", "root", "", "bhawebsite");
    if ($mysqli->connect_errno) {
        die("Connection Failed: ($mysqli->connect_errno) $mysqli->connect_error");
    }
?>
<?php
    // Header bar for the BHA Website. Contains Home, News, Events, About, Blog and Login
    echo "
          <h1 class='header'> Saint Michael's College BHA Club </h1>
          <ul>
            <li><a href='homePage.php'>Home</a></li>
            <li><a href='events.php'>Events</a></li>
            <li><a href='about.php'>About</a></li>
            <li><a href='blog.php'>Blog</a></li>
            <li><a href='images.php'>Images</a></li>
            <li><a href='login.php'>Login</a></li>
            <li><a href='admin.php'>Admin</a></li>
          </ul>";
?>
