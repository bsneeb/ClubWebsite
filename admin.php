<?php
  include("header.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<h2>Admin Login</h2>
<form method="post" action="admin_check.php"> 
  <div class="container">
    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" id="email">
    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" id="password">
    <button type="submit" id="signupbutton" onclick="location.href='admin_check.php'">Sign in</button>
  </div>
</form>
</body>
</html>

