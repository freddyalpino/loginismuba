<?php
class Buku1 extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_buku');
		$this->load->library('form_validation');
	}


	function index(){
        $data["buku"] = $this->m_buku->getAll();
        $this->load->view("admin/buku/v_tampil_buku", $data);
	}
    
    public function add(){
        $this->load->view("admin/buku/v_tambah_buku");
    }

    public function edit($id){
        $where = array('id_buku'=>$id);
        $data['buku']=$this->m_buku->edit_buku($where, 'tbl_buku');
        $this->load->view("admin/buku/v_edit_buku", $data);
    }

    public function update_buku(){
        $id=$this->input->post('xid');
        $nama=$this->input->post('xnama');
        $kelas = $this->input->post('xkelas');
        $harga = $this->input->post('xharga');
        $this->m_buku->update_buku($id, $nama, $kelas, $harga);
        redirect('admin/buku1/');
        
    }

    public function hapus($id){
        $where = array('id_buku'=>$id);
        $this->m_buku->hapus($where, 'buku');
        redirect('admin/buku1/');
        
    }

    public function simpan_buku(){
        $nama = $this->input->post("xnama");
        $kelas = $this->input->post("xkelas");
        $harga = $this->input->post("xharga");
        $this->m_buku->simpan_buku($nama, $kelas, $harga);
        $this->session->set_flashdata('success', 'Berhasil disimpan');
        redirect('admin/buku1/');
    }

    public function delete_buku(){
        $id = $this->input->post('xid');
        $this->m_buku->delete_buku($id);
        redirect('admin/buku1/');
    }

}