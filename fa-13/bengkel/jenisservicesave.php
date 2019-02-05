<?php 

$server="localhost";
$username="root";
$password="";
$database="servicemotor";

	$coba =mysqli_connect($server, $username, $password, $database);


	$id= $_POST['idjenisservice'];
	$jenis = $_POST['jenisservice'];
	$jasa = $_POST['jasaservice'];
	
	


$baris = mysqli_query($coba,"INSERT INTO `jenisjasa`(`idjenisservice`, `jenisservice`, `jasaservice`) VALUES ('$id','$jenis','$jasa')");

if($coba->query($baris)){
  echo "Sukses menambahkan data service!<br/>";
}else{
  echo "Gagal menambahkan data service, No SERVICE yang anda inputkan sudah TERDAFTAR<br/>";
}

			header("location:jenisservicetampil.php");

$coba->close();

?>