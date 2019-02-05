<?php 


$server="localhost";
$username="root";
$password="";
$database="servicemotor";

	$coba =mysqli_connect($server, $username, $password, $database);

	if ($coba->connect_error) {
		
		die("Koneksi Gagal Karena : ".$coba->connect_error);
	}

		$sql = "SELECT * FROM jenisjasa";
		$data = $coba->query($sql);

		echo "<h2>Jenis Service</h2>";
		echo "<table border='3'>";
		echo "<tr><td>No</td><td>Id JenisService</td><td>Jenis Service</td><td>Jasa Service</td></tr>";

		if($data->num_rows > 0){
			$no= 1;

			while($row=$data->fetch_assoc()) {
			
				echo "<tr>";
				echo "<td>".$no++."</td>";

				echo "<td>".$row['idjenisservice']."</td>";	
				echo "<td>".$row['jenisservice']."</td>";
				echo "<td>".$row['jasaservice']."</td>";
				
			}

		}
		else{
			echo "Data Kosong";
		}
		echo "</table>";
$z = $coba->query("SELECT COUNT(*) AS jumlah FROM jenisjasa");
$n = $z->fetch_assoc();
$a="SELECT * from sparepart";
$b=$coba->query($a);
	echo "Jumlah Data Masuk: ". $n['jumlah']."";
		echo"<br><br>";
		echo "<a href='jenisserviceform.php'>Tambah Data</a>";
		echo"<br>";
			echo "<a href='home.php'>Home</a>";
		$coba->close();
 ?>

