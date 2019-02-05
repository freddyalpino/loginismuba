<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Basis Data</title>
  </head>
  <body>
    <font face = "rockwell">
    <a href="index.php">Kembali Ke Menu</a>
    <h1>Pesan Kamar</h1>
    <form action="simpan_pesan.php" method="post">
      <table border="0">
        <tr>
          <td>Id Customer</td>
          <td>:</td>
          <td><input type="text" name="idCustomer"></td>
        </tr>
        <tr>
          <td>Id Kamar</td>
          <td>:</td>
          <td><input type="text" name="idkamar"></td>
        </tr>
		<tr>
		  <td>Tanggal Masuk</td>
		  <td>:</td>
		  <td><input type="text" name="tglMasuk"></td>
		</tr>
		<tr>
		  <td>Tanggal Keluar</td>
		  <td>:</td>
		  <td><input type="text" name="tglKeluar"></td>
		</tr>
		<tr>
		  <td>Uang Muka</td>
		  <td>:</td>
		  <td><input type="text" name="uangmuka"></td>
		</tr>
          <td colspan="2"></td>
          <td><input type="submit" value="Submit"></td>
        </tr>
      </table>
    </form>
  </body>
</html>
