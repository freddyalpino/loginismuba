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

$idCustomer      = $_POST['idCustomer'];
$idkamar         = $_POST['idkamar'];
$tglMasuk        = $_POST['tglMasuk'];
$tglKeluar       = $_POST['tglKeluar'];
$uangmuka        = $_POST['uangmuka'];

$sql = "UPDATE pesan SET idkamar='$idkamar', tglMasuk='$tglMasuk', tglKeluar='$tglKeluar', uang_muka='$uangmuka' WHERE idCustomer='$idCustomer'";
if($konek->query($sql)){
  echo "Data Pesan BERHASIL diedit!<br/>";
}else{
  echo "Data Pesan GAGAL diedit : ".$konek->error."<br/>";
}

$konek->close();
echo "<a href='tampil_pesan.php'>Daftar Kamar</a>";
?>
