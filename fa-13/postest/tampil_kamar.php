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

$sql = "SELECT * FROM kamar";
$data = $konek->query($sql);

echo "<a href='index.php'>Kembali ke Menu</a>";
echo "<h1>Daftar Kamar</h1>";
echo "<table border='1'>";
echo "<tr><td>No.</td>
          <td>ID Kamar</td>
          <td>ID Kategori</td>
          <td>Nama Kamar</td>
          <td>Lokasi Lantai</td>
          <td>Keterangan</td>
          <td colspan=2>Aksi</td></tr>";
          
if ($data->num_rows > 0){
  $no = 1;
  while ($row = $data->fetch_assoc()) {
    echo "<tr>";
    echo "<td>".$no++."</td>";
    echo "<td>".$row['idkamar']."</td>";
    echo "<td>".$row['idkategori']."</td>";
    echo "<td>".$row['namakamar']."</td>";
	echo "<td>".$row['lokasikamar']."</td>";
	echo "<td>".$row['keterangan']."</td>";
  
    echo "<td><a href='formupdate_kamar.php?idkamar=".$row['idkamar']."'>Edit</a></td>";
    echo "<td><a href='delete_kamar.php?idkamar=".$row['idkamar']."'>Hapus</a></td>";
    echo "</tr>";
  }
}else{
  echo "Data Kosong!";
}
echo "</table>";

$konek->close();
?>
