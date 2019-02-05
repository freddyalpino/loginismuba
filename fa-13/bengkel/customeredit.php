<?php

include "konek.php";

$noktp=$_GET['noktp'];
$action = $_GET['action'];

if($action=="Remove") {

	$sqldel = mysqli_query($coba, "DELETE FROM `customer` WHERE noktp='$noktp'");
	if($sqldel) {
		echo '<script type="text/javascript"> alert ("Berhasil Menghapus Data")</script>';
		
}
header('location:customertampil.php');
}
else if($action=="Edit"){

	$noktp = $_POST['noktp'];
	$nama = $_POST['namacus'];
	$alamat = $_POST['alamatcus'];
	$notelpon = $_POST['notelponcus'];
	$type = $_POST['typeken'];
	$nopol = $_POST['nopolisi'];
	$nomesin = $_POST['noserimesin'];

	$sqledit = mysqli_query($coba,"UPDATE `customer` SET `noktp`='$noktp',`namacus`='$nama',`alamatcus`='$alamat',`notelponcus`='$notelpon',`typeken`='$type',`nopolisi`='$nopol',`noserimesin`='$nomesin' WHERE noktp='noktp'");

	if ($sqledit) {

	echo '<script type="text/javascript"> alert("Berhasil Mengupdate Data")</script>';
	header("location:customertampil.php");

	}
}
?>