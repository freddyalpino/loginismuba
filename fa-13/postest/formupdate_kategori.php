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

$idkategori = $_GET['idkategori'];

$kat  = mysqli_query($konek, " SELECT * FROM kategori where idkategori='$idkategori'");
$row   = mysqli_fetch_array($kat);
?>

<html>
  <head>
    <meta charset="utf-8">
    <title>Basis Data Bagus</title>
  </head>
  <body>
    <a href="index.php">Kembali Ke Menu</a>
    <h1>Edit Data Kategori</h1>
    <form action="update_kategori.php" method="post">
      
	  <td><input type="hidden" name="idkategori" value="<?php echo $row['idkategori'];?>"/></td>

      <table>
        <tr>
          <td>ID Kategori</td>
          <td>:</td>
          <td><input type="text" name="idkategori" disabled  value="<?php echo $row['idkategori'];?>"/></td>
        </tr>
        <tr>
          <td>Kategori</td>
          <td>:</td>
          <td><input type="text" name="kategori" value="<?php echo $row['kategori'];?>"></td>
        </tr>
		 <tr>
          <td>Harga</td>
          <td>:</td>
          <td><input type="text" name="harga" value="<?php echo $row['harga'];?>"></td>
        </tr>
        <tr>
          <td colspan="2"></td>
          <td><input type="submit" value="Submit"></td>
        </tr>

      </table>
    </form>
  </body>
</html>