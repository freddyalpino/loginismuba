<?php
class Laporan extends CI_Controller{
	function __construct(){
        parent::__construct();
        $this->load->model('m_transaksi');
        $this->load->model('m_laporan');
		$this->load->model('m_sekolah');
		$this->load->library('upload');
	}


	function index(){
        
        $data['tampilsemua'] = $this->m_laporan->tampil_semua();
        $data['totalbukuterjual'] = $this->m_laporan->total_buku_terjual();
        $data['totalpendapatanpenjualan'] = $this->m_laporan->total_pendapatan();
        $data['total']=$this->m_transaksi->banyak_transaksi();
        $data['kabupaten']=$this->m_laporan->getkabupaten();
        $data['sekolahkabupaten']=$this->m_laporan->sekolah_kabupaten();
        $data['pilihkabupaten'] = $this->m_laporan->pilih_kabupaten();
		$this->load->view('admin/laporan/v_tampil_laporan', $data);
    }

    function cetak_laporan(){
        $data['tampilsemua'] = $this->m_laporan->tampil_semua();
        $data['totalbukuterjual'] = $this->m_laporan->total_buku_terjual();
        $data['totalpendapatanpenjualan'] = $this->m_laporan->total_pendapatan();
        $data['total']=$this->m_transaksi->banyak_transaksi();
        $data['kabupaten']=$this->m_laporan->getkabupaten();
        $data['sekolahkabupaten']=$this->m_laporan->sekolah_kabupaten();
        $this->load->view('admin/laporan/v_cetak', $data);
    }

    function ambil_id_kabupaten($idkab){
        $this->m_laporan->ambil_total($idkab);
    }


    //semua di bawah ini function buat cetak laporan perkabupaten

    function cetak_laporan_kabupaten(){
        $idkabupten = $this->input->post("xidkabupaten");
        $bulandari = $this->input->post("xbulan1");
        $bulansampai = $this->input->post("xbulan2");
        $tahundari = $this->input->post("xtahun1");
        $tahunsampai = $this->input->post("xtahun2");
        $data['tampilsemua_kab'] = $this->m_laporan->tampil_semua_kab($idkabupten, $bulandari, $tahundari, $bulansampai, $tahunsampai);
        $data['nama_sekolah_kab'] = $this->m_laporan->nama_sekolah_kabupaten($idkabupten, $bulandari, $tahundari, $bulansampai, $tahunsampai);
        $data['totalbukuterjual_kab'] = $this->m_laporan->total_buku_terjual_kab($idkabupten, $bulandari, $tahundari, $bulansampai, $tahunsampai);
        $data['totalpendapatanpenjualan_kab'] = $this->m_laporan->total_pendapatan_kab($idkabupten, $bulandari, $tahundari, $bulansampai, $tahunsampai);
        $this->load->view("admin/laporan/v_cetak_laporan_kab.php", $data);
    }

    function filter() {

        $this->load->view("admin/laporan/v_filter.php");
    }

    
}