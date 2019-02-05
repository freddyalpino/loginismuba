<?php
// membuat koneksi
$host = "localhost";
$username = "root";
$password = "";
$db_name = "post_test_basdat";

$konek = new mysqli($host, $username, $password, $db_name);
// mengecek koneksi
if($konek->connect_error){
  die("Koneksi Gagal Karena : ". $konek->connect_error);
}

$idCustomer = $_POST['idCustomer'];
$idkamar    = $_POST['idkamar'];
$tglMasuk   = $_POST['tglMasuk'];
$tglKeluar  = $_POST['tglKeluar'];
$uangmuka   = $_POST['uangmuka'];

$sql = "INSERT INTO pesan (idCustomer, idkamar, tglMasuk, tglKeluar, uang_muka) VALUES ('$idCustomer','$idkamar', '$tglMasuk', '$tglKeluar', '$uangmuka')";

if($konek->query($sql)){
  echo "Data Pesan BERHASIL ditambah!<br/>";
}else{
  echo "Data Pesan GAGAL ditambah : ".$konek->error."<br/>";
}

$konek->close();
echo "<a href='tambah_pesan.php'>Tambah Data Kamar</a>";
?>