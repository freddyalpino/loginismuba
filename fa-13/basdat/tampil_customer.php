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

$sql = "SELECT * FROM customer";
$data = $konek->query($sql);

echo "<a href='index.php'>Kembali ke Menu</a>";
echo "<h1>Daftar Customer</h1>";
echo "<table border='1'>";
echo "<tr><td>No.</td><td>Nama Customer</td><td>Alamat Customer</td><td>Notelp Customer</td><td>Aksi</td></tr>";
if ($data->num_rows > 0) {
  $no = 1;
  while ($row = $data->fetch_assoc()) {
    echo "<tr>";
    echo "<td>".$no++."</td>";
    echo "<td>".$row['namacustomer']."</td>";
    echo "<td>".$row['alamatcustomer']."</td>";
    echo "<td>".$row['notelpcustomer']."</td>";
    echo "<td><a href='hapus_customer.php?id=".$row['idcustomer']."'>Hapus</a></td>";
    echo "</tr>";
  }
}else{
  echo "Data Kosong!";
}
echo "</table>";

$konek->close();
?>
