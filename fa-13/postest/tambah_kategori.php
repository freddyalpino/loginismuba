<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Basis Data</title>
  </head>
  <body>
    <font face = "rockwell">
    <a href="index.php">Kembali Ke Menu</a>
    <h1>Tambah Data kategori</h1>
    <form action="simpan_kategori.php" method="post">
      <table border="0">
        <tr>
          <td>Id Kategori</td>
          <td>:</td>
          <td><input type="text" name="idkategori"></td>
        </tr>
        <tr>
          <td>Kategori</td>
          <td>:</td>
          <td><input type="text" name="kategori"></td>
        </tr>
		<tr>
		  <td>Harga</td>
		  <td>:</td>
		  <td><input type="text" name="harga"></td>
		</tr>
          <td colspan="2"></td>
          <td><input type="submit" value="Submit"></td>
        </tr>
      </table>
    </form>
  </body>
</html>
