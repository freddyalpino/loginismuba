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

$idkategori   = $_POST['idkategori'];
$kategori     = $_POST['kategori'];
$harga        = $_POST['harga'];

$sql = "INSERT INTO kategori (idkategori, kategori, harga) VALUES ('$idkategori','$kategori','$harga')";

if($konek->query($sql)){
  echo "Data Kategori BERHASIL ditambah!<br/>";
}else{
  echo "Data Kategori GAGAL ditambah : ".$konek->error."<br/>";
}

$konek->close();
echo "<a href='tambah_kategori.php'>Tambah Data Kamar</a>";
?>