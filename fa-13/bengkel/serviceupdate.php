<?php

include "konek.php";

$idservice=$_POST['idservice'];

$sqldel = mysqli_query($coba,"SELECT * FROM `service` WHERE idservice='$idservice'");
$baris =mysqli_fetch_assoc($sqldel);
echo "<form action='serviceedit.php?idservice=$baris[idservice]&action=Edit' method='POST'>

<h2> Form Edit </h2>
		<table border=1 widht=30% align=left>

		
		<tr>
			<td>Id Service</td><td>:</td><td>
			<input type='text'name='idservice' size='30' maxlength='50' value='$baris[idservice]'/></td>
		</tr>
		<tr>
			<td>No Ktp</td><td>:</td><td>
			<input type='text' name='noktp' size='30' maxlength='50' value='$baris[noktp]'/></td>
		</tr>
		<tr>
			<td>Nama Customer</td><td>:</td><td>
			<input type='text'name='namacus' size='30' maxlength='50' value='$baris[namacus]'/></td>
		</tr>
		<tr>
			<td>Alamat Customer</td><td>:</td><td>
			<input type='text'name='alamatcus' size='30' maxlength='50' value='$baris[alamatcus]'/></td>
		</tr>
		<tr>
			<td>No Polisi</td><td>:</td><td>
			<input type='text'name='nopolisi' size='30' maxlength='50' value='$baris[nopolisi]'/></td>
		</tr>
		<tr>
			<td>Type Kendaraan</td><td>:</td><td>
			<input type='text'name='typeken' size='30' maxlength='50' value='$baris[typeken]'/></td>
		</tr>
			<tr>
			<td>Kode Sparepart</td><td>:</td><td>
			<input type='text'name='kodesparepart' size='30' maxlength='50' value='$baris[kodesparepart]'/></td>
		</tr>
			<tr>
			<td>Nama Sparepart</td><td>:</td><td>
			<input type='text'name='namasparepart' size='30' maxlength='50' value='$baris[namasparepart]'/></td>
		</tr>
			<tr>
			<td>Jenis Service</td><td>:</td><td>
			<input type='text'name='jenisservice' size='30' maxlength='50' value='$baris[jenisservice]'/></td>
		</tr>
			<tr>
			<td>Keluhan Kerusakan</td><td>:</td><td>
			<input type='text'name='kerusakan' size='30' maxlength='50' value='$baris[kerusakan]'/></td>
		</tr>
			<tr>
			<td>Tanggal Service</td><td>:</td><td>
			<input type='text'name='tanggalservice' size='30' maxlength='50' value='$baris[tanggalservice]'/></td>
		</tr>
		
		
		
<tr>
<td></td>
<td></td>
<td>
<input type='submit' value='Simpan'>
</td>
</tr>
</table>
</form>";
?>