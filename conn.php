<?php
    $server = "localhost";
    $username = "root";
    $pw = "";
    $db = "adopt_me";
    $conn = new mysqli($server,$username,$pw,$db);
    if ($conn->connect_error) {
        die ("Failed:".$conn->connect_error);
    }
?>