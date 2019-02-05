<?php
// membuat koneksi
$host = "localhost";
$username = "root";
$password = "";
$db_name = "hoteljumat";

$konek = new mysqli($host, $username, $password, $db_name);

// mengecek koneksi
if($konek->connect_error){
  die("Koneksi Gagal Karena : ". $konek->connect_error);
}

// membuat table kategori
$sql = "CREATE TABLE kategori(
  idkategori INT NOT NULL,
  kategori VARCHAR(50) NOT NULL,
  harga FLOAT NOT NULL,
  PRIMARY KEY (idkategori)
)";

if($konek->query($sql)){
  echo "Table Kategori BERHASIL dibuat!<br/>";
}else{
  echo "Table Kategori GAGAL dibuat : ".$konek->error;
}

// membuat table kamar
$sql = "CREATE TABLE kamar(
  idkamar INT NOT NULL,
  idkategori INT NOT NULL,
  namakamar VARCHAR(100) NOT NULL,
  lokasilantai CHAR(3) NOT NULL,
  keterangan TEXT NOT NULL,
  PRIMARY KEY (idkamar),
  FOREIGN KEY (idkategori) REFERENCES kategori(idkategori)
)";

if($konek->query($sql)){
  echo "Table Kamar BERHASIL dibuat!<br/>";
}else{
  echo "Table Kamar GAGAL dibuat : ".$konek->error;
}

// membuat table customer
$sql = "CREATE TABLE customer(
  idcustomer INT NOT NULL AUTO_INCREMENT,
  namacustomer VARcHAR(200) NOT NULL,
  alamatcustomer TEXT NOT NULL,
  notelpcustomer VARCHAR(15) NOT NULL,
  PRIMARY KEY (idcustomer)
)";

if($konek->query($sql)){
  echo "Table Customer BERHASIL dibuat!<br/>";
}else{
  echo "Table Customer GAGAL dibuat : ".$konek->error;
}

$sql = "CREATE TABLE pesan(
  idpesan INT NOT NULL AUTO_INCREMENT,
  idcustomer INT NOT NULL,
  idkamar INT NOT NULL,
  tglmasuk DATE NOT NULL,
  tglkeluar DATE NOT NULL,
  PRIMARY KEY (idpesan),
  FOREIGN KEY (idcustomer) REFERENCES customer(idcustomer),
  FOREIGN KEY (idkamar) REFERENCES kamar(idkamar)
)";

if($konek->query($sql)){
  echo "Table Pesan BERHASIL dibuat!<br/>";
}else{
  echo "Table Pesan GAGAL dibuat : ".$konek->error;
}

$konek->close();
?>
