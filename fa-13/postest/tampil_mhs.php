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

$sql = "SELECT * FROM customer";
$data = $konek->query($sql);

echo "<a href='index.php'>Kembali ke Menu</a>";
echo "<h1>Daftar Customer</h1>";
echo "<table border='1'>";
echo "<tr><td>No.</td><td>ID Customer</td>
      <td>Nama Customer</td>
      <td>Alamat Customer</td>
      <td colspan=2><center>Aksi</center></td></tr>";
if ($data->num_rows > 0){
  $no = 1;
  while ($row = $data->fetch_assoc()) {
    echo "<tr>";
    echo "<td>".$no++."</td>";
    echo "<td>".$row['IdCustomer']."</td>";
    echo "<td>".$row['NamaCustomer']."</td>";
    echo "<td>".$row['AlamatCustomer']."</td>";
    echo "<td><a href='formupdate_mhs.php?nim=".$row['IdCustomer']."'>Edit</a></td>";
    echo "<td><a href='delete_mhs.php?nim=".$row['IdCustomer']."'>Hapus</a></td>";
    echo "</tr>";
  }
}else{
  echo "Data Kosong!";
}
echo "</table>";

$konek->close();
?>
