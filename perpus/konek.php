<?php

$connection = mysqli_connect("localhost", "root", "", "perpustakaan") or die ("Error" . mysqli_error($connection));

$sql = "SELECT * from tabel_peminjaman_buku";
$result = mysqli_query($connection, $sql) or die("Eror In Selecting " . mysqli_error($connection));

$emparray = array();

while ($row = mysqli_fetch_assoc($result)) {
	$emparray[] = $row;
}

echo json_encode($emparray);

mysqli_close($connection);

?>