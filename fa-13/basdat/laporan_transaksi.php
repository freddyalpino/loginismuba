<?php
// membuat koneksi
$host = "localhost";
$username = "root";
$password = "";
$db_name = "hoteljumat";

$konek = new mysqli($host, $username, $password, $db_name);

// mengecek koneksi
if($konek->connect_error){
  die("Koneksi Gagal Karena : ". $konek->connect_error);
}

$sql= "SELECT customer.namacustomer, kamar.namakamar, pesan.tglmasuk, pesan.tglkeluar, ketegori.kategori, kategori.harga from pesan JOIN (kamar JOIN kategori ON kamar.idkategori =kategori.kategori)ON pesan.id=customer.idcustomer";
$data= $konek->query($sql);

echo "<a href='index.php>Kembali ke Menu </a>";
echo "<h1>Laporan Transaksi Hotel</h1>";
echo "<table border='1'>";
echo "<tr><td>No.</td><td>Nama Customer</td><td>Nama Kamar</td><td>Nama Kategori</td><td>Tanggal Masuk</td><td>Tanggal Keluar</td><td>Lama Menginap</td><td>Total Biaya</td></tr>";

if($data->num_rows > 0){
	$no = 1;
	while($row = $data->fetch_assoc()){
		$selisih = abs(strtotime($row['tglkeluar'])-strtotime($row['tglmasuk']));
		$lama_inap = floor($selisih / (60*60*24));
		$total = $lama_inap*$row['harga'];
		echo"<tr>";
		echo "<td>".$no++."</td>";
		echo "<td>".$row['namacustomer']."</td>";
		echo "<td>".$row['namakamar']."</td>";
		echo "<td>".$row['kategori']."</td>";
		echo "<td>".$row['tglmasuk']."</td>";
		echo "<td>".$row['tglkeluar']."</td>";
		echo "<td>".$lama_inap."</td>";
		echo "<td>".$total."</td>";
		}
}else{
	echo "Data Kosong!";
}
echo "/table";
$konek->close();


?>






?>