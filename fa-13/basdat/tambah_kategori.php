<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>SIM HOTEL</title>
  </head>
  <body>
    <a href="index.php">Kembali Ke Menu</a>
    <h1>Tambah Kategori</h1>
    <form action="simpan_kategori.php" method="post">
      <table>
        <tr>
          <td>ID Kategori</td>
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
        <tr>
          <td colspan="2"></td>
          <td><input type="submit" value="Submit"></td>
        </tr>
      </table>
    </form>
  </body>
</html>
