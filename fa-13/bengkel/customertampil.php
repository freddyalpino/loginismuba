<?php

$server="localhost";
$username="root";
$password="";
$database="servicemotor";

$coba =mysqli_connect($server, $username, $password, $database);

if ($coba->connect_error) {
		
		die("Koneksi Gagal Karena : ".$coba->connect_error);
	}

		$sql = "SELECT * FROM `customer`";
		$data = $coba->query($sql);

		echo "<h2>Data Customer</h2>";
		
		echo "
<html>
	<form action='customersearch.php' method='post'>
  <div>
    <input type='search' id='mySearch' name='nopolisi'>
    <button>Search</button>
  </div>
</form>
</html>
		";
	
		echo "<table border='3'>";
		

		echo "<tr><td>No</td><td>No KTP</td><td>Nama Customer</td><td>Alamat Customer</td><td>No Telpon</td><td>Type Kendaraan</td><td>No Polisi</td><td>No Mesin</td><td><center>Action</td></tr>";


if($data->num_rows > 0){
			$no= 1 ;
			while($row =$data->fetch_assoc()) {
				
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


					<a href='customerupdate.php?noktp=".$row['noktp']."&action=Edit'>Edit</a>
					<a href='customeredit.php?noktp=".$row['noktp']."&action=Remove'>Delete</a>

				</tr>";

			}

		}
		else{
			echo "Data Kosong";
		}
		echo "</table>";

	$z = $coba->query("SELECT COUNT(*) AS jumlah FROM customer");
	$n = $z->fetch_assoc();
	$a="SELECT * from customer";
	$b=$coba->query($a);
	echo "Jumlah Data: ". $n['jumlah']."";

		echo"<br><br>";
		echo "<a href='customerform.php'>Tambah Data</a>";
		echo "<br>";
		echo "<a href='home.php'>Home</a>";
		$coba->close();

	?>