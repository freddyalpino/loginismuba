<?php
$connection = mysqli_connect("localhost", "root", "", "Perpustakaan") or die ("Error" . mysqli_error($connection));

	$id  = $_POST['id'];
	$judul = $_POST['judul'];
	$penerbit = $_POST['penerbit'];
	$tahun_terbit = $_POST['tahun_terbit'];

$sql = "UPDATE tbl_buku SET id_buku='$id', judul_buku='$judul', penerbit='$penerbit', tahun_terbit='$' WHERE id_buku='$id' ";



if (mysqli_query($connection, $sql)) {
	echo json_encode("Berhasil mengupdate data buku");
}else{
	echo json_encode("Gagal mengupdate data buku");
}

mysqli_close($connection);
?>
