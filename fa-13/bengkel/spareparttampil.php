<?php 


$server="localhost";
$username="root";
$password="";
$database="servicemotor";

	$coba =mysqli_connect($server, $username, $password, $database);

	if ($coba->connect_error) {
		
		die("Koneksi Gagal Karena : ".$coba->connect_error);
	}

		$sql = "SELECT * FROM sparepart";
		$data = $coba->query($sql);

		echo "<h2>Data Sparepart</h2>";
		echo "
<html>
	<form action='sparepartsearch.php' method='post'>
  <div>
    <input type='search' id='mySearch' name='kodesparepart'>
    <button>Search</button>
  </div>
</form>
</html>
		";
	
		echo "<table border='3'>";
		echo "<tr><td>No</td><td>Kode Sparepart</td><td>Nama Sparepart</td><td>Harga Sparepart</td><td>Stok Sparepart</td><td><center>Action</td></tr>";

		if($data->num_rows > 0){
			$no= 1;

			while($row=$data->fetch_assoc()) {
			
				echo "<tr>";
				echo "<td>".$no++."</td>";

				echo "<td>".$row['kodesparepart']."</td>";
				echo "<td>".$row['namasparepart']."</td>";
				echo "<td>".$row['hargasparepart']."</td>";
				echo "<td>".$row['stoksparepart']."</td>";

				echo "<td>

						<a href='sparepartupdate.php?kodesparepart=".$row['kodesparepart']."&action=Edit'>Edit</a>
						<a href='sparepartedit.php?kodesparepart=".$row['kodesparepart']."&action=Remove'>Delete</a>
			</tr>";

			}

		}
		else{
			echo "Data Kosong";
		}
		echo "</table>";
$z = $coba->query("SELECT COUNT(*) AS jumlah FROM sparepart");
$n = $z->fetch_assoc();
$a="SELECT * from sparepart";
$b=$coba->query($a);
	echo "Jumlah Data Masuk: ". $n['jumlah']."";
		echo"<br><br>";
		echo "<a href='sparepartform.php'>Tambah Data</a>";
		echo"<br>";
			echo "<a href='home.php'>Home</a>";
		$coba->close();
 ?>

