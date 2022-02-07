<?php
  // W3 schools template for login
  include("header.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<h2>Sign Up Form</h2>
<form method="post" action="signup_check.php"> 
  <div class="container">
    
    <label><a href='login.php'>Go Back</a></label><br><br>
    <label for="fname"><b>First Name</b></label>
    <input type="text" placeholder="Enter First Name" name="fname" id="fname">

    <label for="lname"><b>Last Name</b></label>
    <input type="text" placeholder="Enter Last Name" name="lname" id="lname">

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" id="email">

    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" id="password">

    <button type="submit" id="signupinput" onclick="location.href='signup_check.php'">Sign Up</button>
  </div>
  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn" onclick="location.href='homepage.php'">Cancel</button>
  </div>
</form>
</body>
</html>




