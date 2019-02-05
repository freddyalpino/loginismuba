<?php 

$connection = mysqli_connect("localhost", "root", "", "Perpustakaan") or die ("Error" . mysqli_error($connection));
 
 $id = $_POST['id'];
 
 $sql = "DELETE FROM tbl_buku WHERE id_buku=$id;";
 
 if(mysqli_query($connection,$sql)){
 echo json_encode('Berhasil Menghapus Data Buku') ;
 }else{
 echo json_encode('Gagal Menghapus Data Buku');
 }
 
 mysqli_close($connection);
 ?>
