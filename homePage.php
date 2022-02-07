<?php 
    // Connect and select the 'BHA' database
    $mysqli = new mysqli("localhost", "root", "", "bhawebsite");
    if ($mysqli->connect_errno) {
        die("Connection Failed: ($mysqli->connect_errno) $mysqli->connect_error");
    }
?>
<?php
    //Select Members from the table
    $sql = "SELECT FirstName FROM members";

    //Issue the query
    $result = $mysqli->query($sql);
    if(!$result) {
        die("Query Error: ($mysqli->errno) $mysqli->errno<br>SQL = $sql");
    }

    echo "<div class='header-container'>";
    while ($row = $result->fetch_row()){
        //$url = "href=template.php?site=".$row[0];
        //echo "<a $url> $row[0] </a><br>";
    }
    echo "</div>";
?>
<?php 
    include('styles.php');
    include('header.php');
?>
<body>
    <div class="homefeed"> 
        <img src="img/bha_logo.png" alt="BHA Logo" class="bhalogo">
        <p class="homedesc">
            Welcome to the Saint Michael's Backcountry Hunters and Anglers Club Chapter!
            This is the home page of our website. Click around to learn more about our club!
            You can also make an account, log in and register for events!
        </p>
    </div>
</body>