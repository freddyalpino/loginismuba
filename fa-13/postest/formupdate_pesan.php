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

$idCustomer = $_GET['idCustomer'];

$cust  = mysqli_query($konek, " SELECT * FROM pesan where idCustomer='$idCustomer'");
$row   = mysqli_fetch_array($cust);
?>

<html>
  <head>
    <meta charset="utf-8">
    <title>Basis Data Bagus</title>
  </head>
  <body>
    <a href="index.php">Kembali Ke Menu</a>
    <h1>Edit Data Pesan</h1>
    <form action="update_pesan.php" method="post">
      
	  <td><input type="hidden" name="idCustomer" value="<?php echo $row['idCustomer'];?>"/></td>

      <table>
        <tr>
          <td>ID Customer</td>
          <td>:</td>
          <td><input type="text" name="idCustomer" disabled  value="<?php echo $row['idCustomer'];?>"/></td>
        </tr>
        <tr>
          <td>ID Kamar</td>
          <td>:</td>
          <td><input type="text" name="idkamar" value="<?php echo $row['idkamar'];?>"></td>
        </tr>
		 <tr>
          <td>Tanggal Masuk</td>
          <td>:</td>
          <td><input type="text" name="tglMasuk" value="<?php echo $row['tglMasuk'];?>"></td>
        </tr>
		 <tr>
          <td>Tanggal Keluar</td>
          <td>:</td>
          <td><input type="text" name="tglKeluar" value="<?php echo $row['tglKeluar'];?>"></td>
        </tr>
         <tr>
          <td>Uang Muka</td>
          <td>:</td>
          <td><input type="text" name="uangmuka" value="<?php echo $row['uang_muka'];?>"></td>
        </tr>
        <tr>
          <td colspan="2"></td>
          <td><input type="submit" value="Submit"></td>
        </tr>

      </table>
    </form>
  </body>
</html>