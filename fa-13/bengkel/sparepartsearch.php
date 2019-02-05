<?php

$server="localhost";
$username="root";
$password="";
$database="servicemotor";

	$coba =mysqli_connect($server, $username, $password, $database);


	
	$kodesparepart=$_POST['kodesparepart'];

	$sql = "SELECT * FROM `sparepart` WHERE kodesparepart='$kodesparepart'";
	$data = $coba->query($sql);

		echo "<a href='spareparttampil.php'>Back</a>";
		echo "<h2>Data Customer</h2>";
		echo "<table border='1'>";

		echo "<tr><td>No</td><td>Kode Sparepart</td><td>Nama Sparepart</td><td>Harga Sparepart</td><td>Stok Sparepart</td><td><center>Action</tr>";
		if($data->num_rows > 0){
			$no= 1 ;
			$row = $data -> fetch_assoc();

				echo "<tr>";
				echo "<td>".$no++."</td>";
				echo "<td>".$row['kodesparepart']."</td>";
				echo "<td>".$row['namasparepart']."</td>";
				echo "<td>".$row['hargasparepart']."</td>";
				echo "<td>".$row['stoksparepart']."</td>";
				echo "<td>

					<a href='sparepartedit.php?kodesparepart=".$row['kodesparepart']."&action=Remove'>Delete</a>	

			</td>";


			echo"</table>";
		}

?>