<?php

$connection = mysqli_connect("localhost", "root", "", "perpustakaan") or die ("Error" . mysqli_error($connection));
		
	$idbuku  = $_POST['idbuku'];
	$judulbuku = $_POST['judulbuku'];
	$namapenerbit = $_POST['namapenerbit'];
	$tahunterbit = $_POST['tahunterbit'];
	

	$sql = "UPDATE `tabel_peminjaman_buku` SET idbuku='$idbuku',judulbuku='$judulbuku',namapenerbit='$namapenerbit', tahunterbit='$tahunterbit' WHERE idbuku='$idbuku'";

	if (mysqli_query($connection, $sql)) {
	echo json_encode("Berhasil mengupdate data buku");
	}else{
	echo json_encode("Gagal mengupdate data buku");
	}

	mysqli_close($connection);


?> 



