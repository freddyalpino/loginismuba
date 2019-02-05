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

$idkategori = $_POST['idkategori'];
$kategori   = $_POST['kategori'];
$harga      = $_POST['harga'];

$sql = "UPDATE kategori SET kategori='$kategori', harga='$harga' WHERE idkategori='$idkategori'";
if($konek->query($sql)){
  echo "Data Kategori BERHASIL diedit!<br/>";
}else{
  echo "Data Kategori GAGAL diedit : ".$konek->error."<br/>";
}

$konek->close();
echo "<a href='tampil_kategori.php'>Daftar kategori</a>";
?>
