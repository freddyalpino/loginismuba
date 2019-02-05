<?php
$connection = mysqli_connect("localhost", "root", "", "Perpustakaan") or die ("Error" . mysqli_error($connection));

$sql = "select * from tbl_buku";
$result = mysqli_query($connection, $sql) or
die("Error in selecting " .mysqli_error($connection));

$emparray = array();
while($row = mysqli_fetch_assoc($result))
{
$emparray[] = $row;
}

echo json_encode($emparray);

mysqli_close($connection);
?>
