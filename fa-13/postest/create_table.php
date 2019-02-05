<?php
// membuat koneksi
$host = "localhost";
$username = "root";
$password = "";
$db_name = "akdmk";

$konek = new mysqli($host, $username, $password, $db_name);

// mengecek koneksi
if($konek->connect_error){
  die("Koneksi Gagal Karena : ". $konek->connect_error);
}

// membuat table mhs
$sql = "CREATE TABLE mhs(
  nim VARCHAR(10) NOT NULL,
  nama_mhs VARCHAR(50) NOT NULL,
  alamat_mhs VARCHAR(45) NOT NULL,
  PRIMARY KEY (nim)
)";

if($konek->query($sql)){
  echo "Table Mhs BERHASIL dibuat!<br/>";
}else{
  echo "Table Mhs GAGAL dibuat : ".$konek->error;
}

// membuat table mata kuliah
$sql = "CREATE TABLE mata_kuliah(
  kode_kul VARCHAR(8) NOT NULL,
  nama_kul VARCHAR(30) NOT NULL,
  sks INT(2) NOT NULL,
  semester CHAR(2) NOT NULL,
  PRIMARY KEY (kode_kul)
)";

if($konek->query($sql)){
  echo "Table Mata Kuliah BERHASIL dibuat!<br/>";
}else{
  echo "Table Mata Kuliah GAGAL dibuat : ".$konek->error;
}

// membuat table nilai
$sql = "CREATE TABLE nilai(
  nim VARCHAR(10) NOT NULL,
  kode_kul VARCHAR(8) NOT NULL,
  nilai INT(11) NOT NULL,
  FOREIGN KEY (nim) REFERENCES mhs(nim),
  FOREIGN KEY (kode_kul) REFERENCES mata_kuliah(kode_kul)
)";

if($konek->query($sql)){
  echo "Table Nilai BERHASIL dibuat!<br/>";
}else{
  echo "Table Nilai GAGAL dibuat : ".$konek->error;
}
$konek->close();
?>