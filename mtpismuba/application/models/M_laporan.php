
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class M_laporan extends CI_Model{

    public function tampil_semua(){
        $query = $this->db->query("SELECT tbl_transaksi.id_sekolah, tbl_sekolah.nama_sekolah, COUNT(tbl_transaksi.id_sekolah) as banyak, sum(tbl_buku.harga_buku) as totalharga, tbl_kabupaten.nama_kabupaten 
        FROM tbl_kabupaten, tbl_transaksi, tbl_sekolah, tbl_buku WHERE tbl_transaksi.id_sekolah = tbl_sekolah.id_sekolah AND tbl_transaksi.id_barang = tbl_buku.id_buku AND tbl_sekolah.id_kabupaten = tbl_kabupaten.id_kabupaten GROUP BY id_sekolah");
        return $query->result();
    }

    public function total_buku_terjual(){
        $query = $this->db->query("SELECT count(id_barang) AS totalbukuterjual FROM tbl_transaksi");
        return $query->result();
    }

    public function total_pendapatan(){
        $query = $this->db->query("SELECT sum(tbl_buku.harga_buku) as totalharga
        FROM tbl_buku, tbl_transaksi
        WHERE tbl_buku.id_buku = tbl_transaksi.id_barang");
        return $query->result();
    }

    public function getkabupaten(){
        $query = $this->db->query("SELECT tbl_kabupaten.nama_kabupaten, tbl_sekolah.id_kabupaten
        FROM tbl_kabupaten, tbl_sekolah, tbl_transaksi
        WHERE tbl_transaksi.id_sekolah = tbl_sekolah.id_sekolah AND tbl_sekolah.id_kabupaten = tbl_kabupaten.id_kabupaten GROUP BY tbl_kabupaten.id_kabupaten");
        return $query->result();
    }

    public function sekolah_kabupaten(){
        $query = $this->db->query("SELECT tbl_sekolah.nama_sekolah, tbl_sekolah.id_kabupaten, count(tbl_transaksi.id_barang) as jumlahbarang, sum(tbl_buku.harga_buku) as totalharganya
        FROM tbl_kabupaten, tbl_sekolah, tbl_transaksi, tbl_buku
        WHERE tbl_transaksi.id_sekolah = tbl_sekolah.id_sekolah AND tbl_sekolah.id_kabupaten = tbl_kabupaten.id_kabupaten AND tbl_buku.id_buku = tbl_transaksi.id_barang GROUP BY tbl_sekolah.id_sekolah");
        return $query->result();
    }

    public function pilih_kabupaten(){
        $query = $this->db->query("SELECT tbl_kabupaten.nama_kabupaten, tbl_kabupaten.id_kabupaten
        FROM tbl_transaksi, tbl_sekolah, tbl_kabupaten
        WHERE tbl_transaksi.id_sekolah = tbl_sekolah.id_sekolah AND tbl_sekolah.id_kabupaten = tbl_kabupaten.id_kabupaten GROUP BY tbl_kabupaten.id_kabupaten");
        return $query->result();
    }

    public function cetak_buku(){
        return $this->db->get('tbl_buku')->result();
    }

    public function ambil_total(){
        for($i=0; $i<100; $i++){
        $query = $this->db->query("SELECT count(tbl_transaksi.id_barang) as jumlahbarang, tbl_kabupaten.id_kabupaten
        from tbl_transaksi, tbl_buku, tbl_sekolah, tbl_kabupaten 
        where tbl_transaksi.id_barang = tbl_buku.id_buku AND tbl_transaksi.id_sekolah = tbl_sekolah.id_sekolah AND tbl_sekolah.id_kabupaten = tbl_kabupaten.id_kabupaten AND tbl_kabupaten.id_kabupaten='$i'");
        return $query->result();
        }
    }


    // dibawah ini model buat cetak perkabupaten

    public function nama_sekolah_kabupaten($id_kabupaten, $bulandari, $tahundari, $bulansampai, $tahunsampai){
        $query = $this->db->query("SELECT tbl_sekolah.nama_sekolah
        FROM tbl_kabupaten, tbl_sekolah
        WHERE tbl_kabupaten.id_kabupaten = tbl_sekolah.id_kabupaten AND tbl_kabupaten.id_kabupaten='$id_kabupaten'");
        return $query->result();
    }

    public function total_buku_terjual_kab($id_kabupaten, $bulandari, $tahundari, $bulansampai, $tahunsampai){
        $query = $this->db->query("SELECT count(id_barang) AS totalbukuterjual, tbl_kabupaten.nama_kabupaten 
        FROM tbl_transaksi,tbl_sekolah, tbl_kabupaten 
        WHERE tbl_transaksi.id_sekolah = tbl_sekolah.id_sekolah AND tbl_sekolah.id_kabupaten = tbl_kabupaten.id_kabupaten AND tbl_kabupaten.id_kabupaten = '$id_kabupaten' AND month(tanggal)>='$bulandari' and year(tanggal)>='$tahundari' AND month(tanggal)<='$bulansampai' and year(tanggal)<='$tahunsampai'");
        return $query->result();
    }

    public function total_pendapatan_kab($id_kabupaten, $bulandari, $tahundari, $bulansampai, $tahunsampai){
        $query = $this->db->query("SELECT sum(tbl_buku.harga_buku) as totalharga
        FROM tbl_buku, tbl_transaksi, tbl_sekolah, tbl_kabupaten
        WHERE tbl_buku.id_buku = tbl_transaksi.id_barang AND tbl_sekolah.id_sekolah = tbl_transaksi.id_sekolah AND tbl_sekolah.id_kabupaten = tbl_kabupaten.id_kabupaten AND tbl_kabupaten.id_kabupaten = '$id_kabupaten' AND month(tanggal)>='$bulandari' and year(tanggal)>='$tahundari' AND month(tanggal)<='$bulansampai' and year(tanggal)<='$tahunsampai'");
        return $query->result();
    }

    public function tampil_semua_kab($id_kabupaten, $bulandari, $tahundari, $bulansampai, $tahunsampai){
        $query = $this->db->query("SELECT tbl_transaksi.id_sekolah, tbl_sekolah.nama_sekolah, COUNT(tbl_transaksi.id_sekolah) as banyak, sum(tbl_buku.harga_buku) as totalharga, tbl_kabupaten.nama_kabupaten 
        FROM tbl_kabupaten, tbl_transaksi, tbl_sekolah, tbl_buku 
        WHERE tbl_transaksi.id_sekolah = tbl_sekolah.id_sekolah AND tbl_transaksi.id_barang = tbl_buku.id_buku AND tbl_sekolah.id_kabupaten = tbl_kabupaten.id_kabupaten AND tbl_kabupaten.id_kabupaten = '$id_kabupaten' AND month(tanggal)>='$bulandari' and year(tanggal)>='$tahundari' AND month(tanggal)<='$bulansampai' and year(tanggal)<='$tahunsampai' GROUP BY id_sekolah");
        return $query->result();
    }
}