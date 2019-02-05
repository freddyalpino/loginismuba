<?php
	require '../koneksi.php';
	session_start();
	$username = $_POST['username'];
	$password = md5($_POST['password']);
	echo "$username $password";
	$query = mysql_query("SELECT * FROM user WHERE username = '$username' AND password = '$password'");
	while ($data = mysql_fetch_array($query)) {
		$_SESSION['username'] = $data['username'];
		$_SESSION['nama'] = $data['nama'];
	}
	if ($_SESSION['username']) {
		header('location:beranda.php');
	}
	else{
		header('location:index.php?log=no');
	}
?>