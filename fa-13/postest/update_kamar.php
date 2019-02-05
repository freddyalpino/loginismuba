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

$idkamar      = $_POST['idkamar'];
$idkategori   = $_POST['idkategori'];
$namakamar    = $_POST['namakamar'];
$lokasilantai = $_POST['lokasikamar'];
$keterangan   = $_POST['keterangan'];

$sql = "UPDATE kamar SET idkategori='$idkategori', namakamar='$namakamar', lokasikamar='$lokasilantai', keterangan='$keterangan' WHERE idkamar='$idkamar'";
if($konek->query($sql)){
  echo "Data Kamar BERHASIL diedit!<br/>";
}else{
  echo "Data Kamar GAGAL diedit : ".$konek->error."<br/>";
}

$konek->close();
echo "<a href='tampil_kamar.php'>Daftar Kamar</a>";
?>
