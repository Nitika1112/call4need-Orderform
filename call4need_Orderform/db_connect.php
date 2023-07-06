<?php

/* Database connection start */
$servername = "68.178.145.115";
$username = "adbikeuser";
$password = "adbikeuser123";
$dbname = "adbike_db";
$connect = mysqli_connect($servername, $username, $password, $dbname) or 
            die("Connection failed: " . mysqli_connect_error());

if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

?>
