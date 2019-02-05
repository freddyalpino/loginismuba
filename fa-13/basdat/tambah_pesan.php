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

$sql = "Select * FROM customer";
$sql2 = "Select * FROM kamar";
$data = $konek->query($sql);
$data2 = $konek->query($sql2);

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>SIM HOTEL</title>
  </head>
  <body>
    <a href="index.php">Kembali Ke Menu</a>
    <h1>Pesan Kamar</h1>
    <form action="simpan_pesan.php" method="post">
      <table>
        <tr>
          <td>ID Customer</td>
          <td>:</td>
          <td><select name="idcustomer">
			<?php
			if($data->num_rows > 0){
				while ($row = $data->fetch_assoc()){
					echo "<option value='".$row['idcustomer']."'>".$row['namacustomer']."</option>";
				}
			}
		  ?>
		  </select>
		  </td>
        </tr>
        <tr>
          <td>ID Kamar</td>
          <td>:</td>
          <td><select name="idkamar">
			<?php
			if($data->num_rows > 0){
				while ($row = $data2->fetch_assoc()){
					echo "<option value='".$row['idkamar']."'>".$row['namakamar']."</option>";
				}
			}
		  ?>
		  </td>
        </tr>
        <tr>
          <td>Tanggal Masuk</td>
          <td>:</td>
          <td><input type="date" name="tglmasuk"></td>
        </tr>
        <tr>
          <td>Tanggal Keluar</td>
          <td>:</td>
          <td><input type="date" name="tglkeluar"></td>
        </tr>
        <tr>
          <td colspan="2"></td>
          <td><input type="submit" value="Submit"></td>
        </tr>
      </table>
    </form>
  </body>
</html>
