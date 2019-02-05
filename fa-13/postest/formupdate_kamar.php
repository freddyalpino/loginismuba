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

$idkamar = $_GET['idkamar'];

$cust = mysqli_query($konek, " SELECT * FROM kamar where idkamar='$idkamar'");
$row = mysqli_fetch_array($cust);
?>

<html>
  <head>
    <meta charset="utf-8">
    <title>Basis Data </title>
  </head>
  <body>
    <a href="index.php">Kembali Ke Menu</a>
    <h1>Edit Data Kamar</h1>
    <form action="update_kamar.php" method="post">
      
	  <td><input type="hidden" name="idkamar" value="<?php echo $row['idkamar'];?>"/></td>

      <table>
        <tr>
          <td>ID Kamar</td>
          <td>:</td>
          <td><input type="text" name="idkamar" disabled  value="<?php echo $row['idkamar'];?>"/></td>
        </tr>
        <tr>
          <td>ID Kategori</td>
          <td>:</td>
          <td><input type="text" name="idkategori" value="<?php echo $row['idkategori'];?>"></td>
        </tr>
		 <tr>
          <td>Nama Kamar</td>
          <td>:</td>
          <td><input type="text" name="namakamar" value="<?php echo $row['namakamar'];?>"></td>
        </tr>
		 <tr>
          <td>Lokasi Lantai</td>
          <td>:</td>
          <td><input type="text" name="lokasikamar" value="<?php echo $row['lokasikamar'];?>"></td>
        </tr>
        <tr>
          <td>Keterangan</td>
          <td>:</td>
          <td><textarea name="keterangan" value="" rows="8" cols="40"><?php echo $row['keterangan'];?></textarea></td>
        </tr>
        <tr>
          <td colspan="2"></td>
          <td><input type="submit" value="Submit"></td>
        </tr>

      </table>
    </form>
  </body>
</html>