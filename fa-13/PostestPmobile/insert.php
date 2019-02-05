<?php
	
$connection = mysqli_connect("localhost", "root", "", "Perpustakaan") or die ("Error" . mysqli_error($connection));

	$id  = $_POST['id'];
	$judul = $_POST['judul'];
	$penerbit = $_POST['penerbit'];
	$tahun_terbit = $_POST['tahun_terbit'];
	

	$sql = "INSERT INTO tbl_buku (id_buku, judul_buku, penerbit, tahun_terbit) VALUES ('$id ', '$judul', '$penerbit', '$tahun_terbit')";

	if (mysqli_query($connection, $sql)) {
		echo json_encode("Berhasil menambahkan data buku");
	}else{
		echo json_encode("Gagal menambahkan data buku");	
	}

	mysqli_close($connection);
?>
