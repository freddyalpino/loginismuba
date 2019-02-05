
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class M_Buku extends CI_Model{

    private $_table = "tbl_buku";

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function simpan_buku($judul, $kelas, $harga)
    {
        $tanggal = date("Y-m-d H:i:s");
        $querysimpanbuku = $this->db->query("INSERT INTO tbl_buku(nama_buku, kelas_buku, harga_buku) VALUES('$judul','$kelas','$harga')");
        return $querysimpanbuku;
    }

    public function edit_buku($where, $table){
        return $this->db->get_where($table, $where)->result();
    }

    public function update_buku($id, $nama, $kelas, $harga){
        $query = $this->db->query("UPDATE tbl_buku set nama_buku='$nama', kelas_buku='$kelas', harga_buku='$harga' WHERE id_buku='$id'");
        return $query;
    }

    public function hapus($where, $table){
        $this->db->where($where);
		$this->db->delete($table);
    }

    public function delete_buku($id){
        $query = $this->db->query("DELETE FROM tbl_buku WHERE id_buku = '$id'");
        return $query;
    }
}