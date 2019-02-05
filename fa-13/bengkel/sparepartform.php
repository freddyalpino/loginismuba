<!DOCTYPE html>
<html>
<head>
  <title>Form</title>
</head>

  <body>
<tr>
  <br>
  <center>

<td colspan="3">Data Sparepart</td>
<hr width="100">
</center>
<br>
<br>
<br>

<form action="sparepartsave.php" method="post">
  
<table border="0" width="30%" align="center" >
</tr>

<tr>
<td>Nama Sparepart</td><td>:</td><td>
<input type="text" name="namasparepart" required=""></td>
</tr>

<tr>
<td>Harga Sparepart</td><td>:</td><td>
<input type="text" name="hargasparepart" required=""></td>
</tr>

<tr>
<td>Stok Sparepart</td><td>:</td><td>
<input type="text" name="stoksparepart" required="">
</td>
</tr>

</tr>
<tr>
<td colspan="3" align="center">
  <br><br>
    <input type="submit" name="submit" value="submit">
    <input type="reset" name="reset" value="reset">
    <a href="home.php">Home</a>
    <br><br>
  <img src="foto/tam.jpg" height="300" width="300" align="left">

</td>
</tr>

</body>
</html>