<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class M_kabupaten extends CI_Model{

    private $_table = "tbl_kabupaten";

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function simpan_kabupaten($nama, $provinsi)
    {
        $tanggal = date("Y-m-d H:i:s");
        $querysimpankabupaten = $this->db->query("INSERT INTO tbl_kabupaten(nama_kabupaten, provinsi) VALUES('$nama','$provinsi')");
        return $querysimpankabupaten;
    }

    public function edit_kabupaten($where, $table){
        return $this->db->get_where($table, $where)->result();
    }

    public function update_kabupaten($id, $nama, $provinsi){
        $query = $this->db->query("UPDATE tbl_kabupaten set nama_kabupaten='$nama', provinsi='$provinsi' WHERE id_kabupaten='$id'");
        return $query;
    }

    public function hapus($where, $table){
        $this->db->where($where);
		$this->db->delete($table);
    }

    public function delete_kabupaten($id){
        $query = $this->db->query("DELETE FROM tbl_kabupaten WHERE id_kabupaten = '$id'");
        return $query;
    }

    

}