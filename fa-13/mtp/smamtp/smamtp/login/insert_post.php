<?php
	require '../koneksi.php';
	date_default_timezone_set('Asia/Jakarta');
	$judul = $_POST['judul'];
	$kategori = $_POST['kategori'];
	if (file_exists($_FILES['gambar']['tmp_name'])) {
		$gambar = $_FILES['gambar']['name'];
	}
	else{
		$gambar = 'no_foto.png';
	}
	$content = $_POST['content'];
	$tanggal = date("Y-m-d");
	echo "
		$judul<br>$kategori<br>$gambar<br>$content<br>$tanggal
	";

	$query = mysql_query("INSERT INTO `konten`(`judul`, `kategori`, `content`, `gambar`, `tanggal`) VALUES ('$judul', '$kategori', '$content', '$gambar', '$tanggal')");
	if ($query) {
		if ($gambar == 'no_foto.png') {
			header('location:daftar_berita.php?post=sukses');
		}
		else{
			move_uploaded_file($_FILES['gambar']['tmp_name'], "images/content/" .$gambar);
			header('location:daftar_berita.php?post=sukses');
		}
	}
?>