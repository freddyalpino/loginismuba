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

$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$notelp = $_POST['notelp'];

$sql = "INSERT INTO customer(namacustomer, alamatcustomer, notelpcustomer) VALUES ('$nama','$alamat','$notelp')";
if($konek->query($sql)){
  echo "Data Customer BERHASIL ditambah!<br/>";
}else{
  echo "Data Customer GAGAL ditambah : ".$konek->error."<br/>";
}

$konek->close();
echo "<a href='tambah_customer.php'>Tambah Data Customer</a>";
?>
