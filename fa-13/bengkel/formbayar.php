<?php
// membuat koneksi
$server="localhost";
$username="root";
$password="";
$database="servicemotor";

  $coba =mysqli_connect($server, $username, $password, $database);

// mengecek koneksi
if ($coba->connect_error) {
    die("Koneksi Gagal Karena : ".$coba->connect_error);
  }

$idservice = $_GET['idservice'];

$sql = mysqli_query($coba,"SELECT * FROM `service` WHERE idservice='$idservice'");



$tampilbrg ="SELECT * FROM tampilbarang where idservice='$idservice'";

$data4 = $coba->query($tampilbrg);

$total_biaya = 0;

while($row4 = $sql->fetch_assoc()){
  $barang = "SELECT * FROM `sparepart` WHERE kodesparepart='$row4[kodesparepart]'";
  $harga = mysqli_query($coba, $barang);

  while ($baris = mysqli_fetch_assoc($harga)){
  
    $total_biaya = $total_biaya + $baris['hargasparepart'];
    }
  }
if(isset($_POST['bayar'])){
  
    $total_biaya = $_POST['hargasparepart'];
    $bayar = $_POST['bayar1'];
    $hasil = $bayar-$total_biaya;
    
    $update = mysqli_query($coba,"UPDATE `service` SET status ='selesai' WHERE idservice='$_POST[idservice]'");

}

?>

<html>
<head>
    <!--<link rel="stylesheet" href="css/bootstrap.min.css">-->
      <title>PEMBAYARAN</title>

</head>
<br><br>

<body>
    <form action="#" method="POST">
            <h2>PEMBAYARAN</h2>
            <tr>
              <td>Id Service</td><td>:</td>
                <input type="text" name="idservice" value="<?=$idservice;?>" readonly id="idservice">
            </tr>
            <tr>
              <br><br>
              <td>
                Harga <td>:</td>
                <input type="text" name="hargasparepart" value="<?=$total_biaya;?>" readonly id="hargasparepart">
              </td>
            </tr>
            <br>
            <tr>
              <td><br>
                Pembayaran <td>:</td>
                <input type="text" name="bayar1" id="Bayar">
              </td><br>
              <input type="submit" name="bayar" value="BAYAR">
            </tr>
                    
           
    </form>
    <?php
    if(isset($_POST['bayar'])){
    ?>
    <div class="card col-sm-4">
        <div class="card-body">
               <label>Uang Yang Di bayarkan : </label>
            
               Rp. <?=$bayar;?></div>
         <div class="card-body">
               <label>Kembalian : </label>
               Rp. <?=$hasil;?></div>
                <br>  
                <a href="servicetampil.php">Home</a>
        
            </div>
          
    <?php
      }
    ?>
</body>
</html>