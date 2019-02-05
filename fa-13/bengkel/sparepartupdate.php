<?php

include "konek.php";

$kodesparepart = $_GET['kodesparepart'];

$sql = mysqli_query($coba,"SELECT * FROM `sparepart` WHERE kodesparepart='$kodesparepart'");

$baris =mysqli_fetch_assoc($sql);
echo "<form action='sparepartedit.php?kodesparepart=$baris[kodesparepart]&action=Edit' method='POST'>
<h2> Form Edit </h2>
		<table border=1 widht=30% align=left>

		<tr>
			<td>Kode Sparepart</td><td>:</td><td>
			<input type='text'name='kodesparepart' size='30' maxlength='50' value='$baris[kodesparepart]'/></td>
		</tr>
		<tr>
			<td>Nama Barang</td><td>:</td><td>
			<input type='text' name='namasparepart' size='30' maxlength='50' value='$baris[namasparepart]'/></td>
		</tr>
		<tr>
			<td>Harga Barang</td><td>:</td><td>
			<input type='text' name='hargasparepart' size='30' maxlength='50' value='$baris[hargasparepart]'/></td>
		</tr>
		<tr>
			<td>Stok Barang</td><td>:</td><td>
			<input type='text'name='stoksparepart' size='30' maxlength='50' value='$baris[stoksparepart]'/></td>
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