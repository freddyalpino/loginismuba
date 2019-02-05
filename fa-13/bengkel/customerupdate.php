<?php

include "konek.php";

$noktp=$_GET['noktp'];

$sqldel = mysqli_query($coba,"SELECT * FROM `customer` WHERE noktp='$noktp'");

$baris =mysqli_fetch_assoc($sqldel);

echo "<form action='customeredit.php?noktp=$baris[noktp]&action=Edit' method='POST'>

<h2> Form Edit </h2>
		<table border=1 widht=30% align=left>

		
		<tr>
			<td>Nama Customer</td><td>:</td><td>
			<input type='text'name='namacus' size='30' maxlength='50' value='$baris[namacus]'/></td>
		</tr>
		<tr>
			<td>Alamat Customer</td><td>:</td><td>
			<input type='text' name='alamatcus' size='30' maxlength='50' value='$baris[alamatcus]'/></td>
		</tr>
		<tr>
			<td>No Telpon</td><td>:</td><td>
			<input type='text'name='notelponcus' size='30' maxlength='50' value='$baris[notelponcus]'/></td>
		</tr>
		<tr>
			<td>Type Kendaraan</td><td>:</td><td>
			<input type='text'name='typeken' size='30' maxlength='50' value='$baris[typeken]'/></td>
		</tr>
		<tr>
			<td>No Polisi</td><td>:</td><td>
			<input type='text'name='nopolisi' size='30' maxlength='50' value='$baris[nopolisi]'/></td>
		</tr>
		<tr>
			<td>No Mesin</td><td>:</td><td>
			<input type='text'name='noserimesin' size='30' maxlength='50' value='$baris[noserimesin]'/></td>
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