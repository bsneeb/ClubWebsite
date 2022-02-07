<?php
  include("header.php");
?>
<?php
    $email = $_POST["email"];
    $password = $_POST["password"];
    $ADMIN_EMAIL = "bradyneeb@gmail.com";
    $ADMIN_PASSWORD = "password";
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
        if ($ADMIN_EMAIL == $row[3]){
            echo   "<div id='login_success'>
                    Admin Login Success! <br>\n
                    </div>";
        } else {
            echo "INVALID";
        }
    }
?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
<h2> Signed in as admin! </h2>
<form method="post" action="post_event.php"> 
  <div id='adminBox'>
    <h2> Add an event: </h2> <br>
      <textarea id='eventTitle' name='eventTitle' placeholder='Event Title'></textarea><br><br>
      <input id='eventDate' name='eventDate' type='date'><br><br>
      <textarea id='eventDesc' name='eventDesc' placeholder='Event Description'></textarea><br><br>
      <input type='submit' name='submit' onclick='submit()'>
  </div>
</form>
<form method="post" action="delete_event.php"> 
  <div id='adminBox'>
    <h2> Delete an event: </h2> <br>
      <textarea id='eventTitle' name='eventTitle' placeholder='Event Title'></textarea><br><br>
        <input type='submit' name='submit' onclick='submit()'>
  </div>
</form>
<form method="post" action="delete_blog.php"> 
  <div id='adminBox'>
    <h2> Delete a blog post: </h2> <br>
      <textarea id='blogTitle' name='blogTitle' placeholder='Blog Title'></textarea><br><br>
        <input type='submit' name='submit' onclick='submit()'>
  </div>
</form>
</body>
</html>