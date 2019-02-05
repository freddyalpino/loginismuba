<?php
    require '../koneksi.php';
    if (isset($_POST['jenis'])) {
    	if ($_POST['jenis'] == 'berita') {
    		$id = $_POST['id'];
    		$judul = $_POST['judul'];
    		$kategori = $_POST['kategori'];
    		if (file_exists($_FILES['gambar']['tmp_name'])) {
				$gambar = $_FILES['gambar']['name'];
				move_uploaded_file($_FILES['gambar']['tmp_name'], "images/content/" .$gambar);
			}
			else{
				$selectGambar = mysql_query("SELECT gambar FROM konten WHERE id = $id");
				$gambarnya = mysql_fetch_array($selectGambar);
				$gambar = $gambarnya['gambar'];
			}
			$content = $_POST['content'];
			$tanggal = date("Y-m-d");
			$query = mysql_query("UPDATE `konten` SET `judul`='$judul',`kategori`='$kategori',`content`='$content',`gambar`='$gambar',`tanggal`='$tanggal' WHERE id = $id");
			if ($query) {
				header('location:daftar_berita.php?update=sukses');
			}
			else
				echo "$judul<br>$kategori<br>$gambar<br>$content<br>$tanggal";
    	}
    	elseif ($_POST['jenis'] == 'halaman') {
    		$id = $_POST['id'];
    		$judul = $_POST['judul'];
    		if (file_exists($_FILES['gambar']['tmp_name'])) {
				$gambar = $_FILES['gambar']['name'];
				move_uploaded_file($_FILES['gambar']['tmp_name'], "images/content/" .$gambar);
			}
			else{
				$selectGambar = mysql_query("SELECT gambar FROM halaman WHERE id = $id");
				$gambarnya = mysql_fetch_array($selectGambar);
				$gambar = $gambarnya['gambar'];
			}
			$content = $_POST['content'];
			$tanggal = date("Y-m-d");
			$query = mysql_query("UPDATE `halaman` SET `judul`='$judul',`isi`='$content',`gambar`='$gambar',`tanggal`='$tanggal' WHERE id = $id");
			if ($query) {
				header('location:daftar_hal.php?update=sukses');
			}
			else
				echo "$judul<br>$kategori<br>$gambar<br>$content<br>$tanggal";
    	}
    	elseif ($_POST['jenis'] == 'guru') {
    		$nip = $_POST['nip'];
    		$nama_guru = $_POST['nama_guru'];
    		$jurusan = $_POST['jurusan'];
    		$sertifikasi = $_POST['sertifikasi'];
    		$tamat_kerja = $_POST['tamat_kerja'];
    		$mengajar = $_POST['mengajar'];
    		$jjm = $_POST['jjm'];
    		$total_jjm = $_POST['total_jjm'];
    		$kompetensi = $_POST['kompetensi'];
    		$status_pegawai = $_POST['status_pegawai'];
    		$jenis_ptk = $_POST['jenis_ptk'];
    		if (file_exists($_FILES['gambar']['tmp_name'])) {
				$gambar = $_FILES['gambar']['name'];
				move_uploaded_file($_FILES['gambar']['tmp_name'], "images/content/" .$gambar);
			}
			else{
				$selectGambar = mysql_query("SELECT gambar FROM data_guru WHERE nip = '$nip'");
				$gambarnya = mysql_fetch_array($selectGambar);
				$gambar = $gambarnya['gambar'];
			}
			$content = $_POST['content'];
			$tanggal = date("Y-m-d");
			$query = mysql_query("UPDATE `data_guru` SET `nama_guru`='$nama_guru',`status_pegawai`='$status_pegawai',`jenis_ptk`='$jenis_ptk',`jurusan`='$jurusan',`sertifikasi`='$sertifikasi',`tamat_kerja`='$tamat_kerja',`mengajar`='$mengajar',`jjm`=$jjm,`total_jjm`=$total_jjm,`kompetensi`='$kompetensi',`gambar`='$gambar' WHERE nip = '$nip'");
			var_dump($query);
			if ($query) {
				header('location:data_guru.php?update=sukses');
			}
			else
				echo "$judul<br>$kategori<br>$gambar<br>$content<br>$tanggal";
    	}
    	elseif ($_POST['jenis'] == 'alumni') {
    		$nis = $_POST['nis'];
    		$nama_s = $_POST['nama_s'];
    		$jurusan = $_POST['jurusan'];
    		if (file_exists($_FILES['gambar']['tmp_name'])) {
				$gambar = $_FILES['gambar']['name'];
				move_uploaded_file($_FILES['gambar']['tmp_name'], "images/content/" .$gambar);
			}
			else{
				$selectGambar = mysql_query("SELECT gambar FROM alumni WHERE nis = '$nis'");
				$gambarnya = mysql_fetch_array($selectGambar);
				$gambar = $gambarnya['gambar'];
			}
			$query = mysql_query("UPDATE `alumni` SET `nama`='$nama_s',`jurusan`='$jurusan',`gambar`='$gambar' WHERE nis = '$nis'");
			var_dump($query);
			if ($query) {
				header('location:data_alumni.php?update=sukses');
			}
			else
				echo "$judul<br>$kategori<br>$gambar<br>$content<br>$tanggal";
    	}
    }
?>