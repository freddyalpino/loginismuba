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

$idkamar = $_GET['idkamar'];

$sql = "DELETE FROM kamar WHERE idkamar='$idkamar'";
if($konek->query($sql)){
  echo "Data Kamar BERHASIL dihapus!<br/>";
}else{
  echo "Data Kamar GAGAL dihapus : ".$konek->error."<br/>";
}

$konek->close();
echo "<a href='tampil_kamar.php'>Daftar Kamar</a>";
?>