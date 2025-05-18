<?php
    $dbConn = "mysql:host=127.0.0.1; port=3307; dbname=loginfo";
    $user = "root";
    $pass = "";

    $conn = new PDO($dbConn, $user, $pass);
    $conn->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
?>
