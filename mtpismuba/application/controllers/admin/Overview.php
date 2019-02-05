<?php

class Overview extends CI_Controller {
    public function __construct()
    {
	parent::__construct();
	$this->load->model('m_transaksi');
	$this->load->model('m_overview');
	$this->load->library('form_validation');
	}

	public function index()
	{
	$data['hitungbuku'] = $this->m_overview->hitung_buku();
	$data['hitungpelanggan'] = $this->m_overview->hitung_pelanggan();
	$data['total']=$this->m_transaksi->banyak_transaksi();
        // load view admin/overview.php
        $this->load->view("admin/overview", $data);
	}
}
