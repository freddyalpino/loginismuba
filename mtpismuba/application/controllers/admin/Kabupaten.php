<?php
class Kabupaten extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_kabupaten');
		$this->load->library('form_validation');
	}


	function index(){
        $data["kabupaten"] = $this->m_kabupaten->getAll();
        $this->load->view("admin/kabupaten/v_tampil_kabupaten", $data);
	}

	public function add(){
        $this->load->view("admin/kabupaten/v_tambah_kabupaten");
    }

    public function edit($id){
        $where = array('id_kabupaten'=>$id);
        $data['kabupaten']=$this->m_kabupaten->edit_kabupaten($where, 'tbl_kabupaten');
        $this->load->view("admin/kabupaten/v_edit_kabupaten", $data);
    }

    public function update_kabupaten(){
        $id=$this->input->post('xid');
        $nama=$this->input->post('xnama');
        $provinsi = $this->input->post('xprovinsi');
        $this->m_kabupaten->update_kabupaten($id, $nama, $provinsi);
        redirect('admin/kabupaten/');
        
    }

    public function hapus($id){
        $where = array('id_kabupaten'=>$id);
        $this->m_kabupaten->hapus($where, 'kabupaten');
        redirect('admin/kabupaten/');
        
    }

    public function simpan_kabupaten(){
        $nama = $this->input->post("xnama");
        $provinsi = $this->input->post("xprovinsi");
        $this->m_kabupaten->simpan_kabupaten($nama, $provinsi);
        $this->session->set_flashdata('success', 'Berhasil disimpan');
        redirect('admin/kabupaten/');
    }

    public function delete_kabupaten(){
        $id = $this->input->post('xid');
        $this->m_kabupaten->delete_kabupaten($id);
        redirect('admin/kabupaten/');
    }

}