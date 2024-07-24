<?php

$host = "butftxz1cqtjjrvhu067-mysql.services.clever-cloud.com";
$user = "uvl9crzyrowj4pdx";
$password = "kK6UlUPix5oxZ8BK1U6F";
$dbname = "butftxz1cqtjjrvhu067";

$conex = mysqli_connect($host, $user, $password, $dbname);

if (!$conex) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
