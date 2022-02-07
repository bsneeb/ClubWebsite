<?php
  include("header.php");
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>

<h2>Login Form</h2>
<form method="post" action="login_check.php"> 

  <div class="container">
    <label for="goback"><a href='signup.php'>Sign Up</a></label><br><br>
    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" id="email">

    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" id="password">

    <button type="submit" id="signupbutton" onclick="location.href='login_check.php'">Sign in</button>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn" onclick="location.href='homepage.php'">Cancel</button>
  </div>
</form>

</body>
</html>



