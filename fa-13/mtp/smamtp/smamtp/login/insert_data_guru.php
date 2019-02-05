<?php
	require '../koneksi.php';
	date_default_timezone_set('Asia/Jakarta');
	$nip = $_POST['nip'];
	$nama_guru = $_POST['nama_guru'];
	$jenis_kelamin = $_POST['jenis_kelamin'];
	$tgl_lahir = $_POST['tgl_lahir'];
	$status_pegawai = $_POST['status_pegawai'];
	$jenis_ptk = $_POST['jenis_ptk'];
	$jurusan = $_POST['jurusan'];
	$sertifikasi = $_POST['sertifikasi'];
	$tamat_kerja = $_POST['tamat_kerja'];
	$mengajar = $_POST['mengajar'];
	$jjm = $_POST['jjm'];
	$total_jjm = $_POST['total_jjm'];
	$kompetensi = $_POST['kompetensi'];
	if (file_exists($_FILES['gambar']['tmp_name'])) {
		$gambar = $_FILES['gambar']['name'];
	}
	else{
		$gambar = 'no_foto.png';
	}
	$content = $_POST['content'];
	$tanggal = date("Y-m-d");
	echo "
		$nip<br>$nama_guru<br>$jenis_kelamin<br>$tgl_lahir<br>$status_pegawai<br>$jenis_ptk<br>$jurusan<br>$sertifikasi<br>$tamat_kerja<br>$mengajar<br>$jjm<br>$total_jjm<br>$kompetensi<br>$gambar
	";

	$query = mysql_query("INSERT INTO `data_guru`(`nip`, `nama_guru`, `jenis_kelamin`, `tgl_lahir`, `status_pegawai`, `jenis_ptk`, `jurusan`, `sertifikasi`, `tamat_kerja`, `mengajar`, `jjm`, `total_jjm`, `kompetensi`, `gambar`) VALUES ('$nip','$nama_guru','$jenis_kelamin','$tgl_lahir','$status_pegawai','$jenis_ptk','$jurusan','$sertifikasi','$tamat_kerja','$mengajar',$jjm,$total_jjm,'$kompetensi','$gambar')");
	if ($query) {
		if ($gambar == 'no_foto.png') {
			echo "sukses";
			header('location:data_guru.php?post=sukses');
		}
		else{
			move_uploaded_file($_FILES['gambar']['tmp_name'], "images/users/" .$gambar);
			echo "sukses";
			header('location:data_guru.php?post=sukses');
		}
	}
?>