<?php

include "konek.php";

$idservice = $_GET['idservice'];
$action = $_GET['action'];

if($action=="Remove") {

	$sqldel = mysqli_query($coba,"DELETE FROM `service` WHERE idservice='$idservice'");
	if($sqldel) {
		echo '<script type="text/javascript"> alert ("Berhasil Menghapus Data")</script>';
		
}
header('location:servicetampil.php');
}
?>