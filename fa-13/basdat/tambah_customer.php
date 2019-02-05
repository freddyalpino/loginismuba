<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>SIM HOTEL</title>
  </head>
  <body>
    <a href="index.php">Kembali Ke Menu</a>
    <h1>Tambah Customer</h1>
    <form action="simpan_customer.php" method="post">
      <table>
        <tr>
          <td>Nama</td>
          <td>:</td>
          <td><input type="text" name="nama"></td>
        </tr>
        <tr>
          <td>Alamat</td>
          <td>:</td>
          <td><textarea name="alamat" rows="8" cols="40"></textarea></td>
        </tr>
        <tr>
          <td>No Telp</td>
          <td>:</td>
          <td><input type="text" name="notelp"></td>
        </tr>
        <tr>
          <td colspan="2"></td>
          <td><input type="submit" value="Submit"></td>
        </tr>
      </table>
    </form>
  </body>
</html>
