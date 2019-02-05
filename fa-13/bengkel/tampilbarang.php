<?php
// membuat koneksi
$server="localhost";
$username="root";
$password="";
$database="servicemotor";

  $coba =mysqli_connect($server, $username, $password, $database);


$nosr =$_GET['idservice'];

$tampil= mysqli_query($coba, 'SELECT * FROM service WHERE idservice = "$nosr"');

$sql = mysqli_fetch_assoc($tampil);
// mengecek koneksi
if($coba->connect_error){
  die("Koneksi Gagal Karena : ". $coba->connect_error);
}
$tampilbarang = mysqli_query($coba, 'SELECT * FROM `sparepart`');
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>PRPL</title>
  </head>
  <body>
    <a href="TPPRPL.html">Kembali ke menu</a>
    <h1>Tambah Data Sparepart</h1>
    <form action="saveebarang.php" method="post">
      <table>
		<tr>
   
          <!--<td>NOMOR SERVICE</td><td>:</td><td><input type="text" name="No_service" value="<?=$_GET//['No_service'];?>" readonly></td></tr>  -->
          <tr><td>NO. SERVICE</td><td>:</td><td><center><input type="text" name="No_service" size="30" maxlength="30" required="" id="No_service" value="<?=$_GET['No_service'];?>" readonly></center></td></tr>
		<tr>
          <td>NAMA BARANG</td><td>:</td><td><select name='Idbarang'>
          <select name='Idbarang[]' Id="barang" multiple="multiple" style="width:300%;">
      <?php
			while($sparepart= mysqli_fetch_assoc($tampilbarang)){
				
				echo '<option value="'.$sparepart[kodesparepart].'">'.$sparepart[namasparepart].'</option>';
			}
		  ?>
		  </select>
		  </td>
        </tr>
 
        
          <td colspan="2"></td>
          <td><input type="submit" value="Submit"></td>
        </tr>
      </table>
    </form>
    <script type="text/javascript">
      $('%barang').select2();
    </script>
  </body>
</html>
