<?php
// membuat koneksi
$server="localhost";
$username="root";
$password="";
$database="servicemotor";

  $coba =mysqli_connect($server, $username, $password, $database);

// mengecek koneksi
if($coba->connect_error){
  die("Koneksi Gagal Karena : ". $coba->connect_error);
}

$sql = "SELECT * FROM `service`";
$data = $coba->query($sql);

echo "<a href='serviceform.php'>Back</a>";
echo "<h1>Daftar Data Service</h1>";

echo"
<html>
<form action='servicesearch.php' method='post'>
<div>
<input type='search' id='mySearch' name='noktp'>
<button>Search</button>
</div>
</form>
</html>
";
echo "<table border='3'>";
echo "<tr><td>No</td><td>Id Service</td><td>No Ktp</td><td>Nama Customer</td><td>No Polisi</td><td>Type Kendaraan</td><td>Kode Sparepart</td><td>Nama Sparepart</td><td>Harga Sparepart</td><td>Jenis Service</td><td>Tanggal Service</td><td>Status</td><td><center>Action</td>

</tr>";

if($data->num_rows > 0){
      $no= 1 ;
      while($row =$data->fetch_assoc()) {
    
    //* : untuk memilih semua atribut yang ada di table kendaraan
    //where :ketika no polisi ditable service sama dengan no polisi di table kendaraan 
    
    $customer ="SELECT * FROM `customer` WHERE noktp='$row[noktp]'";
    $data2 = $coba->query($customer);
    $row2 = $data2->fetch_assoc();
       

    $sparepart ="SELECT * FROM `sparepart` WHERE kodesparepart='$row[kodesparepart]'";
    $data3 = $coba->query($sparepart);
    $row3 = $data3->fetch_assoc();


   // $jenisjasa ="SELECT * FROM `jenisjasa` WHERE idjenisservice='$row[idjenisservice]'";
  //  $data5 = $coba->query($jenisjasa);
   // $row5 = $data5->fetch_assoc();

 //   $tampilbarang ="SELECT * FROM tampilbarang where No_service='$row[No_service]'";
   // $data4 = $konek->query($tampilbarang);

    echo "<tr>";
    echo "<td>".$no++."</td>";

              echo "<td>".$row['idservice']."</td>";

              echo "<td>".$row['noktp']."</td>";

              echo "<td>".$row2['namacus']."</td>";

           //   echo "<td>".$row2['alamatcus']."</td>";

              echo "<td>".$row2['nopolisi']."</td>";

              echo "<td>".$row2['typeken']."</td>";

              echo "<td>".$row['kodesparepart']."</td>";

              echo "<td>".$row3['namasparepart']."</td>";

              echo "<td>".$row3['hargasparepart']."</td>";

             // echo "<td>".$row5['idjenisservice']."</td>";

             echo "<td>".$row['jenisservice']."</td>";

             // echo "<td>".$row5['jasaservice']."/<td>";

            // echo "<td>".$row['kerusakan']."</td>";

              echo "<td>".$row['tanggalservice']."</td>";

              echo "<td>".$row['status']."</td>";              

    echo "<td>

    <a href='serviceedit.php?idservice=".$row['idservice']."&action=Remove'>Delete</a>
    <a href='formbayar.php?idservice=".$row['idservice']."&action=Bayar'>Bayar</a>

          ";
        echo "</tr>";

   // echo  "<td><a href='#.php?idservice=".$row['No_service']."'>Delete</a></td>";

   // echo  "<td><a href='#.php?idservice=$row[No_service]'>Tambah Barang</a></td>";
  }

}else{
  echo "Data Kosong!";
}


echo "</table>";

  $z = $coba->query("SELECT COUNT(*) AS jumlah FROM service");
  $n = $z->fetch_assoc();
  $a="SELECT * from service";
  $b=$coba->query($a);
  echo "Jumlah Data: ". $n['jumlah']."";


echo "<br>";
echo "<br>";
echo "<td>
  <a href='serviceform.php'>Tambah Data</a>

";
echo "</td>";

$coba->close();


?>

