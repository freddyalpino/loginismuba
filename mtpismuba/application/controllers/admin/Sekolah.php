<?php
class Sekolah extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_sekolah');
		$this->load->library('upload');
	}


	function index(){
        $data['sekolah']=$this->m_sekolah->get_all_sekolah1();

		$this->load->view('admin/sekolah/v_tampil_sekolah',$data);
    }
    
    public function add(){
        $data['kabupaten'] = $this->m_sekolah->get_all_kabupaten();
        $this->load->view('admin/sekolah/v_tambah_sekolah', $data);
    }

    public function simpan_sekolah(){
        $nama_sekolah = $this->input->post('xnamasekolah');
        $alamat_sekolah = $this->input->post('xalamatsekolah');
        $idkabupaten = $this->input->post('xidkabupaten');
        $this->m_sekolah->simpan_sekolah($nama_sekolah, $alamat_sekolah, $idkabupaten);
        redirect('admin/sekolah');
    }
    
    public function delete_sekolah(){
        $idsekolah = $this->input->post("xid");
        $this->m_sekolah->delete_sekolah($idsekolah);
        redirect('admin/sekolah/','refresh');
    }

    public function edit($id){
        $where = array('id_sekolah'=>$id);
        $data['kabupaten']=$this->m_sekolah->get_all_kabupaten();
        $data['sekolah']=$this->m_sekolah->edit_sekolah($where, 'tbl_sekolah')->result();
        $this->load->view("admin/sekolah/v_edit_sekolah", $data);
    }

    public function update_sekolah(){
        $id = $this->input->post('xid');
        $nama = $this->input->post('xnama');
        $alamat = $this->input->post('xalamat');
        $idkab = $this->input->post('xidkab');
        $this->m_sekolah->update_sekolah($id, $nama, $alamat, $idkab);
        redirect('admin/sekolah');
    }
}