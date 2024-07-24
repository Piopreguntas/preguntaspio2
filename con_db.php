<?php

$host = "bzzightk0e7oiucupj8l-mysql.services.clever-cloud.com";
$user = "udcsqsigmccaisaf";
$password = "udcsqsigmccaisaf";
$dbname = "bzzightk0e7oiucupj8l";

$conex = mysqli_connect($host, $user, $password, $dbname);

if (!$conex) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
