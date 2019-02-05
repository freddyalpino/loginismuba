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

$idcustomer = $_POST['idcustomer'];
$idkamar = $_POST['idkamar'];
$tglmasuk = $_POST['tglmasuk'];
$tglkeluar = $_POST['tglkeluar'];

$sql = "INSERT INTO pesan(idcustomer, idkamar, tglmasuk, tglkeluar) VALUES ('$idcustomer','$idkamar','$tglmasuk','$tglkeluar')";
if($konek->query($sql)){
  echo "Pesan Kamar BERHASIL!<br/>";
}else{
  echo "Pesan Kamar GAGAL : ".$konek->error."<br/>";
}

$konek->close();
echo "<a href='tambah_pesan.php'>Pesan Kamar</a>";
?>
