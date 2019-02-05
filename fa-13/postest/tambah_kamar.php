<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Basis Data</title>
  </head>
  <body>
    <font face = "rockwell">
    <a href="index.php">Kembali Ke Menu</a>
    <h1>Tambah Data Kamar</h1>
    <form action="simpan_kamar.php" method="post">
      <table border="0">
        <tr>
          <td>Id Kamar</td>
          <td>:</td>
          <td><input type="text" name="idkamar"></td>
        </tr>
        <tr>

          <td>Id Kategori</td>
          <td>:</td>
          <td><input type="text" name="idkategori"></td>
        </tr>
		<tr>
		  <td>Nama Kamar</td>
		  <td>:</td>
		  <td><input type="text" name="namakamar"></td>
		</tr>
        <tr>
		  <td>Lokasi Lantai</td>
		  <td>:</td>
		  <td><input type="text" name="lokasikamar"></td>
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
