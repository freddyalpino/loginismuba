<?php

$server="localhost";
$username="root";
$password="";
$database="servicemotor";

	$coba =mysqli_connect($server, $username, $password, $database);

	
$noktp=$_POST['noktp'];

	$sql = "SELECT * FROM `service` WHERE noktp='$noktp'";

	$data = $coba->query($sql);

		echo "<a href='servicetampil.php'>Back</a>";
		echo "<h2>Data Service</h2>";
		echo "<table border='1'>";

	echo "<table border='3'>";

echo "<tr><td>No</td><td>No Ktp</td><td>Nama Customer</td><td>Alamat Customer</td><td>No Polisi</td><td>Type Kendaraan</td><td>Kode Sparepart</td><td>Nama Sparepart</td><td>Jenis Service</td><td>Keluhan Kerusakan</td><td>Tanggal Service</td>

</tr>";

if($data->num_rows > 0){
      $no= 1 ;
      $row =$data->fetch_assoc();
    
    //* : untuk memilih semua atribut yang ada di table kendaraan
    //where :ketika no polisi ditable service sama dengan no polisi di table kendaraan 
    
    $customer ="SELECT * FROM `customer` WHERE noktp='$row[noktp]'";
    $data2 = $coba->query($customer);
    $row2 = $data2->fetch_assoc();
   
    $sparepart ="SELECT * FROM `sparepart` WHERE kodesparepart='$row[kodesparepart]'";
    $data3 = $coba->query($sparepart);
    $row3 = $data3->fetch_assoc();

 //   $tampilbarang ="SELECT * FROM tampilbarang where No_service='$row[No_service]'";
   // $data4 = $konek->query($tampilbarang);

    echo "<tr>";
    echo "<td>".$no++."</td>";


    echo "<td>".$row['noktp']."</td>";

    echo "<td>".$row2['namacus']."</td>";

    echo "<td>".$row2['alamatcus']."</td>";

    echo "<td>".$row2['nopolisi']."</td>";

    echo "<td>".$row2['typeken']."</td>";

    echo "<td>".$row['kodesparepart']."</td>";

    echo "<td>".$row3['namasparepart']."</td>";

    echo "<td>".$row['jenisservice']."</td>";

    echo "<td>".$row['kerusakan']."</td>";

    echo "<td>".$row['tanggalservice']."</td>";


	echo "</table>";
		}

?>