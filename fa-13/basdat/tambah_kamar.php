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

$sql = "Select * FROM kategori";
$data = $konek->query($sql);

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>SIM HOTEL</title>
  </head>
  <body>
    <a href="index.php">Kembali Ke Menu</a>
    <h1>Tambah Kamar</h1>
    <form action="simpan_kamar.php" method="post">
      <table>
        <tr>
          <td>ID Kamar</td>
          <td>:</td>
          <td><input type="text" name="idkamar"></td>
        </tr>
        <tr>
          <td>ID Kategori</td>
          <td>:</td>
          <td><select name="idkategori">
			<?php
			if($data->num_rows > 0){
				while ($row = $data->fetch_assoc()){
					echo "<option value='".$row['idkategori']."'>".$row['kategori']."</option>";
				}
			}
		  ?>
		  </td>
        </tr>
        <tr>
          <td>Nama Kamar</td>
          <td>:</td>
          <td><input type="text" name="namakamar"></td>
        </tr>
        <tr>
          <td>Lokasi Kamar</td>
          <td>:</td>
          <td><input type="text" name="lokasilantai"></td>
        </tr>
        <tr>
          <td>Keterangan</td>
          <td>:</td>
          <td><textarea name="keterangan" rows="8" cols="40"></textarea></td>
        </tr>
        <tr>
          <td colspan="2"></td>
          <td><input type="submit" value="Submit"></td>
        </tr>
      </table>
    </form>
  </body>
</html>
