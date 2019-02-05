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

$idkamar    = $_POST['idkamar'];
$idkategori = $_POST['idkategori'];
$namakamar  = $_POST['namakamar'];
$lokasilantai = $_POST['lokasikamar']; 
$keterangan = $_POST['keterangan'];

$sql = "INSERT INTO kamar (idkamar, idkategori, namakamar, lokasikamar, keterangan) VALUES ('$idkamar','$idkategori','$namakamar','$lokasilantai','$keterangan')";

if($konek->query($sql)){
  echo "Data Kamar BERHASIL ditambah!<br/>";
}else{
  echo "Data Kamar GAGAL ditambah : ".$konek->error."<br/>";
}

$konek->close();
echo "<a href='tambah_kamar.php'>Tambah Data Kamar</a>";
?>