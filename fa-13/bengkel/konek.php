<?php 

$server="localhost";
$username="root";
$password="";
$database="servicemotor";


	$coba = mysqli_connect($server, $username, $password, $database);

	if (!$coba) {
		
		echo "Error";

	}
	else{
		echo "";
	}

 ?>

