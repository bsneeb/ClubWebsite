<?php 
    // Connect and select the 'bhawebsite' database
    $mysqli = new mysqli("localhost", "root", "", "bhawebsite");
    if ($mysqli->connect_errno) {
        die("Connection Failed: ($mysqli->connect_errno) $mysqli->connect_error");
    }
?>
<?php
    //Select Movies from the table
    $sql = "SELECT DISTINCT firstname FROM members";

    //Issue the query
    $result = $mysqli->query($sql);
    if(!$result) {
        die("Query Error: ($mysqli->errno) $mysqli->errno<br>SQL = $sql");
    }

    echo "<div class='header-container'>";
    while ($row = $result->fetch_row()){
        $url = "href=template.php?site=".$row[0];
        echo "<a $url> $row[0] </a><br>";
    }
    echo "</div>";
?>