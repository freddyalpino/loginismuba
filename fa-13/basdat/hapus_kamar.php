<?php
// membuat koneksi
$host = "localhost";
$username = "root";
$password = "";
$db_name = "hoteljumat";

$konek = new mysqli($host, $username, $password, $db_name);

// mengecek koneksi
if($konek->connect_error){
  die("Koneksi Gagal Karena : ". $konek->connect_error);
}

$id = $_GET['id'];

$sql = "DELETE FROM kamar WHERE idkamar='$id'";
if($konek->query($sql)){
  echo "Data Kamar BERHASIL dihapus!<br/>";
}else{
  echo "Data Kamar GAGAL dihapus : ".$konek->error."<br/>";
}

$konek->close();
echo "<a href='tampil_kamar.php'>Daftar Kamar</a>";
?>
