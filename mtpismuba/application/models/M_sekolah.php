<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class M_sekolah extends CI_Model{

    private $_table = "tbl_sekolah";
    
    function get_all_sekolah(){
        return $this->db->get($this->_table)->result();
    }

    function get_all_sekolah1(){
        $query = $this->db->query("SELECT tbl_sekolah.id_sekolah, tbl_sekolah.nama_sekolah, tbl_sekolah.alamat_sekolah, tbl_sekolah.id_kabupaten, tbl_kabupaten.nama_kabupaten 
        FROM tbl_kabupaten, tbl_sekolah WHERE tbl_sekolah.id_kabupaten = tbl_kabupaten.id_kabupaten");
        return $query->result();
    }

    function get_all_kabupaten(){
        $query = $this->db->query("SELECT * FROM tbl_kabupaten");
        return $query->result();
    }

    public function simpan_sekolah($namasekolah, $alamatsekolah, $idkabupaten){
        $query = $this->db->query("INSERT INTO tbl_sekolah(nama_sekolah, alamat_sekolah, id_kabupaten) VALUES ('$namasekolah', '$alamatsekolah', '$idkabupaten')");
        return $query;
    }

    public function delete_sekolah($idsekolah){
        $query = $this->db->query("DELETE FROM tbl_sekolah WHERE id_sekolah='$idsekolah'");
        return $query;
    }

    public function edit_sekolah($where, $table){
        return $this->db->get_where($table, $where);
    }

    public function update_sekolah($id, $nama, $alamat, $idkab){
        $query = $this->db->query("UPDATE tbl_sekolah set nama_sekolah='$nama', alamat_sekolah='$alamat', id_kabupaten='$idkab'
        WHERE id_sekolah='$id'");
        return $query;
    }


}