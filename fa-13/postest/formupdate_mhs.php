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

$idcust = $_GET['nim'];

$cust = mysqli_query($konek, " SELECT * FROM customer where IdCustomer='$idcust'");
$row = mysqli_fetch_array($cust);
?>

<html>
  <head>
    <meta charset="utf-8">
    <title>Basis Data</title>
  </head>
  <body>
    <a href="index.php">Kembali Ke Menu</a>
    <h1>Edit Data Customer</h1>
    <form action="update_mhs.php" method="post">
      <td><input type="hidden" name="id_cust" value="<?php echo $row['IdCustomer'];?>"/></td>

      <table>
        <tr>
          <td>ID</td>
          <td>:</td>
          <td><input type="text" name="id_cust" disabled  value="<?php echo $row['IdCustomer'];?>"/></td>
        </tr>
        <tr>
          <td>Nama</td>
          <td>:</td>
          <td><input type="text" name="nama_cust" value="<?php echo $row['NamaCustomer'];?>"></td>
        </tr>
        <tr>
          <td>Alamat</td>
          <td>:</td>
          <td><textarea name="alamat_cust" value="" rows="8" cols="40"><?php echo $row['AlamatCustomer'];?></textarea></td>
        </tr>
        <tr>
          <td colspan="2"></td>
          <td><input type="submit" value="Submit"></td>
        </tr>

      </table>
    </form>
  </body>
</html>