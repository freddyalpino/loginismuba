<?php
include "konek.php"; // Load file koneksi.php
//$conn = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME);

$noktp = $_POST['noktp']; // Ambil data NIS yang dikirim lewat AJAX

$query = mysqli_query($coba, "SELECT * FROM customer WHERE noktp='".$noktp."'"); // Tampilkan data siswa dengan NIS tersebut
$row = mysqli_num_rows($query); // Hitung ada berapa data dari hasil eksekusi $query

if($row > 0){ // Jika data lebih dari 0
  $data = mysqli_fetch_array($query); // ambil data siswa tersebut
  
  // BUat sebuah array
  $callback = array(
    'status' => 'success', // Set array status dengan success
    'namacus' => $data['namacus'], // Set array nama dengan isi kolom nama pada tabel siswa
    'alamatcus' => $data['alamatcus'],
    'typeken' => $data['typeken'],
    'nopolisi' => $data['nopolisi'],
    'noserimesin' => $data['noserimesin'],
   

     // Set array jenis_kelamin dengan isi 
  );
}else{
  $callback = array('status' => 'failed'); // set array status dengan failed
}

echo json_encode($callback); // konversi varibael $callback menjadi JSON
?>