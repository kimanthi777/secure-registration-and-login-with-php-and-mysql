<?php

$serverName= "localhost";
$dbUsername= "root";
$dbPass = "";
$dbName = "loginDb";

$conn = mysqli_connect($serverName, $dbUsername, $dbPass, $dbName);

if (!$conn) {
	echo "Connection failed!";
}