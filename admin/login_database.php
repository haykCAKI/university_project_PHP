<?php

$host = "localhost";
$dbname = "cms";
$username = "root";
$password = "";

$mysqli = new mysqli($host, $username, $password, $dbname);


if($mysqli->connect_errno){
    die("Connetion error: " . $mysqli->connect_error);
}

return $mysqli;
