<?php
// membuat koneksi
$server="localhost";
$username="root";
$password="";
$database="servicemotor";

	$coba =mysqli_connect($server, $username, $password, $database);

// mengecek koneksi
if($coba->connect_error){
  die("Koneksi Gagal Karena : ". $coba->connect_error);
}

$id = $_POST['idservice'];
$noktp = $_POST['noktp'];
$kodesp = $_POST['kodesparepart'];
$tanggal = $_POST['tanggalservice'];
$jenis = $_POST['jenisservice'];
$kerusakan = $_POST['kerusakan'];



//echo "<a href='TPPRPL.html'>Kembali ke Menu</a><br>";
//echo "<a href='servicemotor.php'>Tambah Data Service</a><br>";

$baris =mysqli_query($coba,"INSERT INTO `service`(`idservice`, `noktp`, `kodesparepart`, `tanggalservice`, `jenisservice`, `kerusakan`,`status`) VALUES ('$id','$noktp','$kodesp','$tanggal','$jenis','$kerusakan','belum selesai')");


header("location:servicetampil.php");
?>
