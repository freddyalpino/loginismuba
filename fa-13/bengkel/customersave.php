<?php

$server="localhost";
$username="root";
$password="";
$database="servicemotor";

	$coba =mysqli_connect($server, $username, $password, $database);

	$noktp = $_POST['noktp'];
	$nama = $_POST['namacus'];
	$alamat = $_POST['alamatcus'];
	$notelpon = $_POST['notelponcus'];
	$type = $_POST['typeken'];
	$nopol = $_POST['nopolisi'];
	$nomesin = $_POST['noserimesin'];




			$baris=mysqli_query($coba," INSERT INTO `customer`(`noktp`, `namacus`, `alamatcus`, `notelponcus`, `typeken`, `nopolisi`, `noserimesin`) VALUES ('$nokpt','$nama','$alamat','$notelpon','$type','$nopol','$nomesin')");

if($coba->query($baris)){
  echo "Sukses menambahkan data service!<br/>";
}else{
  echo "Gagal menambahkan data service, No SERVICE yang anda inputkan sudah TERDAFTAR<br/>";
}

header("location:customertampil.php");
$coba->close();
?>