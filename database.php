<?php

    //CONNECT TO MYSQL DATABASE USING MYSQLI
    $con = mysqli_connect("localhost", "root", "", "youcodescrumboard");
    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
      }

?>
