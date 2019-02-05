<?php
	require '../koneksi.php';
	date_default_timezone_set('Asia/Jakarta');
	$nis = $_POST['nis'];
	$nama_s = $_POST['nama_s'];
	$jenis_kelamin = $_POST['jenis_kelamin'];
	$tgl_lahir = $_POST['tgl_lahir'];
	$jurusan = $_POST['jurusan'];
	if (file_exists($_FILES['gambar']['tmp_name'])) {
		$gambar = $_FILES['gambar']['name'];
	}
	else{
		$gambar = 'no_foto.png';
	}
	echo "
		$nis<br>$nama_s<br>$jenis_kelamin<br>$tgl_lahir<br>$jurusan<br>$gambar
	";

	$query = mysql_query("INSERT INTO `alumni`(`nis`, `nama`, `jk`, `tgl_lahir`, `jurusan`, `gambar`) VALUES ('$nis','$nama_s','$jenis_kelamin','$tgl_lahir','$jurusan','$gambar')");
	if ($query) {
		if ($gambar == 'no_foto.png') {
			echo "sukses";
			header('location:data_alumni.php?post=sukses');
		}
		else{
			move_uploaded_file($_FILES['gambar']['tmp_name'], "images/users/" .$gambar);
			echo "sukses";
			header('location:data_alumni.php?post=sukses');
		}
	}
?>