<?php

$server="localhost";
$username="root";
$password="";
$database="servicemotor";

	$coba =mysqli_connect($server, $username, $password, $database);

	$kode = $_POST['kodesparepart'];
	$namasparepart = $_POST['namasparepart'];
	$harga = $_POST['hargasparepart'];
	$stok = $_POST['stoksparepart'];

		$baris=mysqli_query($coba,"INSERT INTO `sparepart`(`kodesparepart`, `namasparepart`, `hargasparepart`, `stoksparepart`) VALUES ('$kode','$namasparepart','$harga','$stok')");

if($coba->query($baris)){
  echo "Sukses menambahkan data service!<br/>";
}else{
  echo "Gagal menambahkan data service, No SERVICE yang anda inputkan sudah TERDAFTAR<br/>";
}

			header("location:spareparttampil.php");

$coba->close();

?>