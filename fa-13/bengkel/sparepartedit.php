<?php

include "konek.php";

$kodesparepart=$_GET['kodesparepart'];
$action = $_GET['action'];

if($action=="Remove") {
	$sqldel = mysqli_query($coba,"DELETE FROM `sparepart` WHERE kodesparepart='$kodesparepart'");
	if($sqldel) {
		echo '<script type="text/javascript"> alert ("Berhasil Menghapus Data")</script>';
		
}
header("location:spareparttampil.php");
}
else if($action=="Edit"){

	$kodesparepart = $_POST['kodesparepart'];
	$namasparepart = $_POST['namasparepart'];
	$harga = $_POST['hargasparepart'];
	$stok = $_POST['stoksparepart'];

	$sqledit = mysqli_query($coba,"UPDATE `sparepart` SET `kodesparepart`='$kodesparepart',`namasparepart`='$namasparepart',`hargasparepart`='$harga',`stoksparepart`='$stok' WHERE kodesparepart='$kodesparepart'");

	if ($sqledit) {

	echo '<script type="text/javascript"> alert("Berhasil Mengupdate Data")</script>';

	header("location:spareparttampil.php");

	}


}



?>