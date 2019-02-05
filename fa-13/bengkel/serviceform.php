<!DOCTYPE html>
<html>
<head>
	<title>Service</title>
	  <script src="dist/jquery.min.js"></script>
  <script src="serviceproses.js"></script>
</head>
<body>
	<tr>
	<br>
	<center>

<td colspan="3">Data Service</td>
<hr width="100">
</center>
<br>
<br>
<br>
<form action="servicesave.php" method="post">
	
<table border="0" width="30%" align="center" >


</tr>
<tr>
	<td>Id Service</td><td>:</td><td>
		<input type="text" name="idservice"  readonly="true" value="<?php echo uniqid();?>">
	</td>
</tr>

<tr>
	<td>No Ktp </td><td>:</td><td>
		<input type="text" name="noktp"  id="noktp" value="<?=isset($_POST['noktp']) ? $_POST['noktp'] : ''?>"></input><button type="button" id="btn-search">Cari</button><span id="loading">Loding...</span>
	</td>
</tr>
<tr>
	<td>Nama Customer </td><td>:</td><td>
		<input type="text" name="namacus" id="namacus" value="<?=isset($_POST['namacus']) ? $_POST['namacus'] : ''?>"></input>

	</td>
</tr>

<tr>
	<td>Alamat Customer </td><td>:</td><td>
		<input type="text" name="alamatcus" id="alamatcus" value="<?=isset($_POST['alamatcus']) ? $_POST['alamatcus'] : ''?>"></input>
	</td>
</tr>

<tr>
	<td>Type Kendaraan </td><td>:</td><td>
		<input type="text" name="typeken" id="typeken" value="<?=isset($_POST['typeken']) ? $_POST['typeken'] : ''?>"></input>
	</td>
</tr>

<tr>
	<td>No.Polisi </td><td>:</td><td>
		<input type="text" name="nopolisi" id="nopolisi" value="<?=isset($_POST['nopolisi']) ? $_POST['nopolisi'] : ''?>"></input>
	</td>
</tr>

<tr>
	<td>No.Seri Mesin </td><td>:</td><td>
		<input type="text" name="noserimesin" id="noserimesin" value="<?=isset($_POST['noserimesin']) ? $_POST['noserimesin'] : ''?>"></input>
	</td>
</tr>

<tr>
	<td>Kode Sparepart</td><td>:</td><td>
		<input type="text" name="kodesparepart" id="kodesparepart" value="<?=isset($_POST['kodesparepart']) ? $_POST['kodesparepart'] : ''?>">
	</td>
</tr>

<tr>
	<td>Keluhan Kerusakan</td><td>:</td><td>
    <select type="text" name="kerusakan">
    <option value="Keluhan Kerusakan" selected>Keluhan Kerusakan</option>
    <option value="Ban Bocor">Ban Bocor</option>
    <option value="Ganti Oli">Ganti Oli</option>
    <option value="Ganti Bola Lampu">Ganti Bola Lampu</option>
    <option value="Ganti Ban Dalam">Ganti Ban Dalam</option>
    <option value="Ganti Ban Luar">Ganti Ban Luar</option>
    <option value="Ganti Busi">Ganti Busi</option>
    <option value="Keluar Asap Dari Kenalpot">Keluar Asap Dari Kenalpot</option>
    <option value="Kerusakan Mesin">Kerusakan Mesin</option>
    <option value="Ganti Stang">Ganti Stang</option>
    <option value="Rem Depan Belakang Tidak Berfungsi">Rem Blong</option>
    <option value="Sasis Tidak Seimbang">Sasis Tidak Seimbang</option>
    <option value="Aki Soak">Aki Soak</option>
    <option value="Mesin Susah Hidup">Mesin Susah Hidup</option>
    <option value="Kerusakan Induksi">Kerusakan Induksi</option>
  	</select>
    </div>
	</td>
</tr>

<tr>
	<td>Jenis Service</td><td>:</td><td>
		<select type="text" name="jenisservice" id="inputlg" class="form-control inputlg">
			<option value="jenis service" selected>Jenis Service</option>
			<option value="Service Ringan">Service Ringan</option>
			<option value="Service Berat">Service Berat</option>
			
		</select>
	</td>
</tr>

<tr>
	<td>Tanggal Service</td><td>:</td><td>
		<input type="date" name="tanggalservice">
	</td>
</tr>

<tr>
<td colspan="3" align="center">
	<br><br>
		<input type="submit" name="submit" value="submit">
		<input type="reset" name="reset" value="reset">
		<a href="home.php">Home</a>
		<br><br>

		<img src="foto/a.png" width="300" height="290" align="left">
	
</td>
</tr>

</body>
</html>
