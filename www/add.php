<?php

include('dbconnect.php');

$name = $_POST['Name'];
$age = $_POST['Age'];
$height = $_POST['Height'];
$country = $_POST['Country'];
$position = $_POST['Position'];
$team = $_POST['Team'];
$playingtype = $_POST['Playing Type'];

$query = "INSERT INTO info(Name,Age,Height,Country,Position,Team,Playing Type) VALUES('$name','$age','$height','$country','$position','$team','$playingtype')";

if(mysqli_query($conn,$query)){

	header("Location:index.html");
}
else{

	echo"Error";
}

mysqli_close($conn);

?>