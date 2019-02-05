<font face = "rockwell">
  <?php

$host = "localhost";
$username = "root";
$password = "";
$db_name = "post_test_basdat";

$konek = new mysqli($host, $username, $password, $db_name);


if($konek->connect_error){
  die("Koneksi Gagal Karena : ". $konek->connect_error);
}

$sql = "SELECT * FROM kategori";
$data = $konek->query($sql);

echo "<a href='index.php'>Kembali ke Menu</a>";
echo "<h1>Daftar Kamar</h1>";
echo "<table border='1'>";
echo "<tr><td>No.</td><td>ID Kategori</td>
      <td>Kategori</td><td>Harga</td>
      <td colspan=2>Aksi</td></tr>";

if ($data->num_rows > 0){
  $no = 1;
  while ($row = $data->fetch_assoc()) {
    echo "<tr>";
    echo "<td>".$no++."</td>";
    echo "<td>".$row['idkategori']."</td>";
    echo "<td>".$row['kategori']."</td>";
    echo "<td>".$row['harga']."</td>";
    echo "<td><a href='formupdate_kategori.php?idkategori=".$row['idkategori']."'>Edit</a></td>";
    echo "<td><a href='delete_kategori.php?idkategori=".$row['idkategori']."'>Hapus</a></td>";
    echo "</tr>";
  }
}else{
  echo "Data Kosong!";
}
echo "</table>";

$konek->close();
?>
