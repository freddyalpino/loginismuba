<font face = "rockwell">
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

$sql = "SELECT * FROM pesan";
$data = $konek->query($sql);

echo "<a href='index.php'>Kembali ke Menu</a>";
echo "<h1>Daftar Pesan</h1>";
echo "<table border='1'>";
echo "<tr><td>No.</td><td>ID Customer</td><td>ID Kamar</td><td>Tanggal Masuk</td><td>Tanggal Keluar</td><td>Uang Muka</td><td colspan=2>Aksi</td></tr>";
if ($data->num_rows > 0){
  $no = 1;
  while ($row = $data->fetch_assoc()) {
    echo "<tr>";
    echo "<td>".$no++."</td>";
    echo "<td>".$row['idCustomer']."</td>";
    echo "<td>".$row['idkamar']."</td>";
    echo "<td>".$row['tglMasuk']."</td>";
	echo "<td>".$row['tglKeluar']."</td>";
	echo "<td>".$row['uang_muka']."</td>";
    echo "<td><a href='formupdate_pesan.php?idCustomer=".$row['idCustomer']."'>Edit</a></td>";
    echo "<td><a href='delete_pesan.php?idCustomer=".$row['idCustomer']."'>Hapus</a></td>";
    echo "</tr>";
  }
}else{
  echo "Data Kosong!";
}
echo "</table>";

$konek->close();
?>
