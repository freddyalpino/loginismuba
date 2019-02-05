<?php

$connection = mysqli_connect("localhost", "root", "", "perpustakaan") or die ("Error" . mysqli_error($connection));

	$idbuku = $_POST['idbuku'];
	$judulbuku = $_POST['judulbuku'];
	$namapenerbit = $_POST['namapenerbit'];
	$tahunterbit = $_POST['tahunterbit'];
	

	$sql = "INSERT INTO tabel_peminjaman_buku (idbuku, judulbuku, namapenerbit, tahunterbit) VALUES ('$idbuku','$judulbuku','$namapenerbit','$tahunterbit')";

if (mysqli_query($connection, $sql)) {

	echo json_encode("Berhasil Menambahkan Data");
}else{
	echo json_encode("Gagal Menambahkan Data") or die ("Error" . mysqli_error($connection));
}

mysqli_close($connection);

?>
