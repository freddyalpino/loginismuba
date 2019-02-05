<?php

$connection = mysqli_connect("localhost", "root", "", "perpustakaan") or die ("Error" . mysqli_error($connection));
		
	$idbuku  = $_POST['idbuku'];

	$sql = "DELETE FROM tabel_peminjaman_buku WHERE idbuku='$idbuku'";


	 	if(mysqli_query($connection,$sql)){
 		echo json_encode('Berhasil Menghapus Data Buku') ;
 		}else{
 		echo json_encode('Gagal Menghapus Data Buku');
		}
 
 		mysqli_close($connection);

?>