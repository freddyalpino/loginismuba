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

$nim = $_GET['nim'];

$sql = "DELETE FROM customer WHERE IdCustomer='$nim'";
if($konek->query($sql)){
  echo "Data Customer BERHASIL dihapus!<br/>";
}else{
  echo "Data Customer GAGAL dihapus : ".$konek->error."<br/>";
}

$konek->close();
echo "<a href='tampil_mhs.php'>Daftar Customer</a>";
?>