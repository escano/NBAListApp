<?php

$host = "localhost";
$user = "root";
$password = "";
$db = "nba";

$conn = mysqli_connect($host, $user, $password, $db);


if(!$conn){

	die("Error in connection");
}
	
?>