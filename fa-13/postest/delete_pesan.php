<?php
// membuat koneksi
$host     = "localhost";
$username = "root";
$password = "";
$db_name  = "post_test_basdat";

$konek = new mysqli($host, $username, $password, $db_name);

// mengecek koneksi
if($konek->connect_error){
  die("Koneksi Gagal Karena : ". $konek->connect_error);
}

$idCustomer = $_GET['idCustomer'];

$sql = "DELETE FROM pesan WHERE idCustomer='$idCustomer'";
if($konek->query($sql)){
  echo "Data Pesan BERHASIL dihapus!<br/>";
}else{
  echo "Data Pesan GAGAL dihapus : ".$konek->error."<br/>";
}

$konek->close();
echo "<a href='tampil_pesan.php'>Daftar Pesan</a>";
?>