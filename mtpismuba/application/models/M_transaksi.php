<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class M_transaksi extends CI_Model{

    private $_table = "tbl_transaksi";

    function get_transaksi(){
        return $this->db->get($this->_table)->result();
    }

    function get_all_transaksi(){
        $query = $this->db->query("SELECT tbl_transaksi.id_transaksi, tbl_sekolah.nama_sekolah , tbl_buku.nama_buku, tbl_transaksi.id_sekolah, tbl_transaksi.tanggal, tbl_transaksi.banyak_barang, tbl_transaksi.total_harga 
        FROM tbl_transaksi, tbl_buku, tbl_sekolah
        WHERE tbl_transaksi.id_barang = tbl_buku.id_buku AND tbl_transaksi.id_sekolah = tbl_sekolah.id_sekolah");
        return $query->result();
    }

    function get_sekolah(){
        $query = $this->db->query("SELECT * FROM tbl_sekolah");
        return $query->result();
    }

    function get_buku(){
        $query = $this->db->query("SELECT * FROM tbl_buku");
        return $query->result();
    }

    function simpan_transaksi($idsekolah, $idbarang, $banyakbarang, $harga){
        $tanggal = date("Y-m-d H:i:s");
        $query = $this->db->query("INSERT INTO tbl_transaksi (id_sekolah, id_barang, banyak_barang, total_harga, tanggal) VALUES('$idsekolah', '$idbarang', '$banyakbarang','$harga'*'$banyakbarang','$tanggal')");
        return $query;
    }

    function delete_sekolah($id){
        $query = $this->db->query("DELETE FROM tbl_transaksi WHERE id_transaksi='$id'");
        return $query;
    }

    function transaksi_kecil(){
        $query = $this->db->query("SELECT tbl_transaksi.id_sekolah, tbl_sekolah.nama_sekolah,tbl_transaksi.tanggal, COUNT(tbl_transaksi.id_sekolah) as banyak 
        FROM tbl_transaksi, tbl_sekolah WHERE tbl_transaksi.id_sekolah = tbl_sekolah.id_sekolah GROUP BY id_sekolah");
        return $query->result();
    }

    function detail_transaksi($where){
        $query = $this->db->query("SELECT tbl_buku.kelas_buku, tbl_buku.harga_buku, tbl_transaksi.id_transaksi, tbl_transaksi.id_barang, tbl_transaksi.id_sekolah, 
        tbl_sekolah.nama_sekolah, tbl_buku.nama_buku, tbl_buku.harga_buku, tbl_transaksi.banyak_barang, tbl_transaksi.total_harga
        FROM tbl_transaksi, tbl_sekolah, tbl_buku
        WHERE tbl_transaksi.id_sekolah=tbl_sekolah.id_sekolah AND tbl_transaksi.id_barang = tbl_buku.id_buku AND tbl_sekolah.id_sekolah='$where'");
        return $query->result();
    }

    function detail_harga($where){
        $query = $this->db->query("SELECT sum(tbl_transaksi.total_harga) as totalharga 
        FROM tbl_transaksi
        WHERE id_sekolah='$where'");
        return $query->result();
    }

    function nama_sekolah($where){
        $query =$this->db->query("SELECT nama_sekolah as sekolah FROM tbl_sekolah WHERE id_sekolah='$where'");
        return $query->result();
    }

    function banyak_transaksi(){
        $query = $this->db->query("SELECT count(*) as totalnya FROM tbl_transaksi GROUP BY id_sekolah");
        return $query->result();
    }

    function ambil_harga($where){
        $query = $this->db->query("SELECT harga_buku AS harga FROM tbl_buku WHERE id_buku='$where'");
        return $query->row()->harga;
    }


}