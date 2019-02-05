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

$sql = "SELECT * FROM pesan";
$data = $konek->query($sql);

echo "<a href='index.php'>Kembali ke Menu</a>";
echo "<h1>Daftar Pesan</h1>";
echo "<table border='1'>";
echo "<tr><td>No.</td><td>ID Pesan</td><td>ID Customer</td><td>ID Kamar</td><td>Tanggal Masuk</td><td>Tanggal Keluar</td><td>Aksi</td></tr>";
if ($data->num_rows > 0) {
  $no = 1;
  while ($row = $data->fetch_assoc()) {
    echo "<tr>";
    echo "<td>".$no++."</td>";
    echo "<td>".$row['idpesan']."</td>";
    echo "<td>".$row['idcustomer']."</td>";
    echo "<td>".$row['idkamar']."</td>";
    echo "<td>".$row['tglmasuk']."</td>";
    echo "<td>".$row['tglkeluar']."</td>";
    echo "<td><a href='hapus_pesan.php?id=".$row['idkamar']."'>Hapus</a></td>";
    echo "</tr>";
  }
}else{
  echo "Data Kosong!";
}
echo "</table>";

$konek->close();
?>
