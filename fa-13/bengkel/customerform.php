<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
</head>

	<body>
<tr>
	<br>
<center>
<td colspan="3">Data Customer</td>
<hr width="100">
</center>
<br>
<br>
<br>

<form action="customersave.php" method="post">
	
<table border="0" width="30%" align="center" >
</tr>
<tr>
<td>Nama Customer</td><td>:</td><td>
<input type="text" name="namacus" size="30" maxlength="50" required=""></td>
</tr>

<tr>
<td>Alamat Customer</td><td>:</td><td>
<input type="text" name="alamatcus" size="30" maxlength="50" required=""></td>
</tr>

<tr>
<td>No Telpon</td><td>:</td><td>
<input type="text" name="notelponcus" size="30" maxlength="50" required="">
</td>
</tr>
<tr>
<td>Type Kendaraan</td><td>:</td><td><select name="typeken" required="">
  <option value="Jenis Kendaraan" selected>Tipe Kendaraan</option>
  <option value="Honda">Honda</option>
  <option value="Yamaha">Yamaha</option>
  <option value="Kawazaki">Kawazaki</option>
  <option value="Herley">Herley</option>
  <option value="Suzuki">Suzuki</option>
  <option value="Bmw">Bmw</option>
  <option value="Vespa">Vespa</option>
  <option value="New Scurpio">New Scurpio</option>
</select></td>
</tr>

<tr>
<td>No Polisi</td><td>:</td><td>
<input type="text" name="nopolisi" size="30" maxlength="30" required="">
</td>
</tr>

<tr>
<td>Nomor Mesin</td><td>:</td><td>
<input type="text" name="noserimesin" size="30" maxlength="50" required=""></td>
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