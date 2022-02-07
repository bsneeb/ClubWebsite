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
    // Select Blog Posts from the table
    $sql = "SELECT * FROM blog";

    // Issue the query
    $result = $mysqli->query($sql);
    if(!$result) {
        die("Query Error: ($mysqli->errno) $mysqli->errno<br>SQL = $sql");
    }

    echo "<div class='blogpost-background'>";
    while ($row = $result->fetch_row()){
      echo "<div class='blogpost-container'>";
        echo "<div class='blogpost-card'>";
          echo "<h2> $row[0] </h2>";
          echo "<h5> $row[4] <br> $row[1] </h5>";
          echo "<img src='$row[5]' alt='blogpost image' class='blogpost-img'>";
          echo "<p class='blogpost-contents'> $row[2] </p>";
        echo "</div>";
      echo "</div>";
    }
    echo "</div>";
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<form method="post" action="post_blog.php"> 
  <div class='newblogpost-background'>
    <h2> Write a new post! </h2> <br>
      <textarea id='author' name='author' placeholder='Author'></textarea><br><br>
      <input id='date' name='date' type='date'><br><br>
      <textarea id='title' name='title' placeholder='Title'></textarea><br><br>
      <textarea id='contents' name='contents' placeholder='Contents'></textarea><br><br>
      <textarea id='image' name='image' placeholder='Image'></textarea><br><br>
      <input type='submit' name='submit' onclick='submit()'>
  </div>
</form>
</body>
</html>

