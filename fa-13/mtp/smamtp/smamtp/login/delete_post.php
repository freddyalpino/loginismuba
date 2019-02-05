<?php
	require '../koneksi.php';
	$id = $_GET['id'];
	$type = $_GET['type'];
	$query = mysql_query("DELETE FROM $type WHERE id = $id");
	$query2 = mysql_query("DELETE FROM $type WHERE nip = $id");
	$query3 = mysql_query("DELETE FROM $type WHERE nis = $id");
	if ($query && $type == 'konten') {
		header('location:daftar_berita.php?delete=sukses');
	}elseif ($query && $type == 'halaman') {
		header('location:daftar_hal.php?delete=sukses');
	}elseif ($query2 && $type == 'data_guru') {
		header('location:data_guru.php?delete=sukses');
	}elseif ($query3 && $type == 'alumni') {
		header('location:data_alumni.php?delete=sukses');
	}
?>