<?php

$server="localhost";
$username="root";
$password="";
$database="servicemotor";

$coba =mysqli_connect($server, $username, $password, $database);

	$nopolisi = $_POST['nopolisi'];

	$sql = "SELECT * FROM `customer` WHERE nopolisi='$nopolisi'";

	$data=$coba->query($sql);

		echo "<a href='customertampil.php'>Back</a>";
		echo "<h2>Data Customer</h2>";

		echo "<table border='1'>";

		echo "<tr><td>No</td><td>No KTP</td><td>Nama Customer</td><td>Alamat Customer</td><td>No Telpon</td><td>Type Kendaraan</td><td>No Polisi</td><td>No Mesin</td><td><center>Action</td></tr>";
		if($data->num_rows > 0){
			$no= 1 ;
			$row=$data->fetch_assoc();

				echo "<tr>";
				echo "<td>".$no++."</td>";
				echo "<td>".$row['noktp']."</td>";
				echo "<td>".$row['namacus']."</td>";
				echo "<td>".$row['alamatcus']."</td>";
				echo "<td>".$row['notelponcus']."</td>";
				echo "<td>".$row['typeken']."</td>";
				echo "<td>".$row['nopolisi']."</td>";
				echo "<td>".$row['noserimesin']."</td>";
				echo "<td>

					<a href='customeredit.php?noktp=".$row['noktp']."&action=Remove'>Delete</a>

				</td>";
				echo "</tr>";



			echo "</table>";
		}


?>