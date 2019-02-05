<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Basis Data</title>
  </head>
  <body>
    <font face = "rockwell">
    <a href="index.php">Kembali Ke Menu</a>
    <h1>Tambah Data Customer</h1>
    <form action="simpan_mhs.php" method="post">
      <table>
        <tr>
          <td>Id Customer</td>
          <td>:</td>
          <td><input type="text" name="id_cust"></td>
        </tr>
        <tr>
          <td>Nama</td>
          <td>:</td>
          <td><input type="text" name="nama_cust"></td>
        </tr>
        <tr>
          <td>Alamat</td>
          <td>:</td>
          <td><textarea name="alamat_cust" rows="8" cols="40"></textarea></td>
        </tr>
        <tr>
          <td colspan="2"></td>
          <td><input type="submit" value="Submit"></td>
        </tr>
      </table>
    </form>
  </body>
</html>
