<?php
	
	session_start();

$server="localhost";
$username="root";
$password="";
$database="servicemotor";

	$coba =mysqli_connect($server, $username, $password, $database);

	if ($db->connect_error) {
		die("Koneksi Gagal");
	}

	$nama = $_POST['username'];
	$pass = $_POST['password'];

	$show = "SELECT * FROM admin WHERE username ='$nama' and password = '$pass'";
	 
	$hasil = mysqli_query($db, $show);
	
	if ($hasil) {

		if (mysqli_num_rows($hasil)>0) {
			session_regenerate_id();
			$admin = mysqli_fetch_assoc($hasil);

			$_SESSION['SESS_FIRST_NAME']=$admin['username'];
			$_SESSION['SESS_LAST_NAME']=$admin['password'];
			session_write_close();

			header("location:index.php");

			exit();
		}
		else {
			echo "<br>";
			echo "Gagal Login";
			header("location:index.php");
		}
}

?>