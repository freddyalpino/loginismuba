
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class M_overview extends CI_Model{

    public function hitung_buku(){
        $query = $this->db->query("SELECT COUNT(*) as banyak_buku FROM tbl_buku");
        return $query->result();
    }

    public function hitung_pelanggan(){
        $query = $this->db->query("SELECT COUNT(*) as banyak_pelanggan FROM tbl_sekolah");
        return $query->result();
    }

}