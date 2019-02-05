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

$idkategori = $_GET['idkategori'];

$sql = "DELETE FROM kategori WHERE idkategori='$idkategori'";
if($konek->query($sql)){
  echo "Data Kategori BERHASIL dihapus!<br/>";
}else{
  echo "Data Kategori GAGAL dihapus : ".$konek->error."<br/>";
}

$konek->close();
echo "<a href='tampil_kategori.php'>Daftar Kamar</a>";
?>