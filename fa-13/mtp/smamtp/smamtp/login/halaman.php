<?php
	require '../koneksi.php';
	date_default_timezone_set('Asia/Jakarta');
	$judul = $_POST['judul'];
	if (file_exists($_FILES['gambar']['tmp_name'])) {
		$gambar = $_FILES['gambar']['name'];
	}
	else{
		$gambar = 'no_foto.png';
	}
	$content = $_POST['isi_konten'];
	$tanggal = date("Y-m-d");
	echo "
		$judul<br>$gambar<br>$content<br>$tanggal
	";

	$query = mysql_query("INSERT INTO `halaman`(`judul`, `gambar`,`isi`, `tanggal`) VALUES ('$judul', '$gambar', '$content', '$tanggal')");
	if ($query) {
		if ($gambar == 'no_foto.png') {
			header('location:daftar_hal.php?post=sukses');
		}
		else{
			move_uploaded_file($_FILES['gambar']['tmp_name'], "images/content/" .$gambar);
			header('location:daftar_hal.php?post=sukses');
		}
	}
?>