<?php
// membuat koneksi
$server="localhost";
$username="root";
$password="";
$database="servicemotor";

    $coba =mysqli_connect($server, $username, $password, $database);

// mengecek koneksi
if($konek->connect_error){
  die("Koneksi Gagal Karena : ". $konek->connect_error);
}
$idservice = $_GET['idservice'];
$sql = mysqli_query($coba, "SELECT * FROM servis WHERE idservice = '$idservice'");
$show = mysqli_fetch_assoc($sql);

$tampungbrg ="SELECT * FROM tampung_barang where no_service='$no_service'";

     $data3 = $konek->query($tampungbrg);

    $total_biaya = 0;

    while($row3 = $data3->fetch_assoc()){
        $harga2 = "SELECT * FROM sparepart WHERE kode_barang = '$row3[kode_barang]'";
        $harga3 = mysqli_query($konek, $harga2);
        while ($baris = mysqli_fetch_assoc($harga3)){
            $total_biaya = $total_biaya + $baris['harga'];
        }
    }
if(isset($_POST['Bayar'])){
    
    $total_biaya = $_POST['total'];
    $bayar = $_POST['bayar'];
    $hasil = $bayar-$total_biaya;
    $update = mysqli_query($konek, "UPDATE `servis` SET `status`='selesai' WHERE no_service='$_POST[no_service]'");
}
?>
<html>
<head>
    <!--<link rel="stylesheet" href="css/bootstrap.min.css">-->
    <title>Pembayaran</title></head>
<br><br>
<body>
    <form action="#" method="POST">
                <h2>PEMBAYARAN</h2>
            
               <label for="no_service">No service</label>
                <input type="text" name="no_service" value="<?=$show['no_service'];?>" readonly id="no_service">
          
            <label for="total">
               Total </label><input type="text" name="total" value="<?=$total_biaya;?>" readonly id="total">
 
                    
           <label for="bayar">
               Pembayaran</label><input type="text" name="bayar" id="bayar">
           
           <input type="submit" name="Bayar" value="BAYAR">
           
    </form>
    <?php
    if(isset($_POST['Bayar'])){
    ?>
    <div class="card col-sm-4">
        <div class="card-body">
               <label>Uang Yang Di bayarkan</label>
            
               Rp. <?=$bayar;?></div>
         <div class="card-body">
               <label>Kembalian</label>
               Rp. <?=$hasil;?></div>
            </div>
    <?php
}
    ?>
</body>
</html>
