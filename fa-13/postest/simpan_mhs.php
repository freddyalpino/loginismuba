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

$id_cust = $_POST['id_cust'];
$nama    = $_POST['nama_cust'];
$alamat  = $_POST['alamat_cust'];

$sql = "INSERT INTO customer (idCustomer, NamaCustomer, AlamatCustomer) VALUES ('$id_cust','$nama','$alamat')";

if($konek->query($sql)){
  echo "Data Customer BERHASIL ditambah!<br/>";
}else{
  echo "Data Customer GAGAL ditambah : ".$konek->error."<br/>";
}

$konek->close();
echo "<a href='tambah_mhs.php'>Tambah Data Customer</a>";
?>