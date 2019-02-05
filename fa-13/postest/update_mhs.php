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

$idcust = $_POST['id_cust'];
$nama   = $_POST['nama_cust'];
$alamat = $_POST['alamat_cust'];

$sql = "UPDATE customer SET NamaCustomer='$nama',AlamatCustomer='$alamat' WHERE IdCustomer='$idcust'";
if($konek->query($sql)){
  echo "Data Customer BERHASIL diedit!<br/>";
}else{
  echo "Data Customer GAGAL diedit : ".$konek->error."<br/>";
}

$konek->close();
echo "<a href='tampil_mhs.php'>Daftar Customer</a>";
?>
