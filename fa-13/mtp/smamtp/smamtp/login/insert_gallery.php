<?php
	require '../koneksi.php';
	if (!empty($_FILES)) {
    $targetDir = "images/gallery/";
    $fileName = $_FILES['file']['name'];
    $targetFile = $targetDir . $fileName;
    $query = mysql_query("INSERT INTO `gallery`(`gambar`) VALUES ('$fileName')");
    move_uploaded_file($_FILES['file']['tmp_name'], $targetFile);
}
?>