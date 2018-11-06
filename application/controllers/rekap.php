<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rekap extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->library('pdf');
		$this->load->model('model_surat');
	}
	public function index()
	{
		$this->keamanan->Security();
		$isi['content'] = "rekap/surat-masuk";
		$isi['judul']   = "Rekap";
		$isi['subJudul']= "Rekap Surat Masuk";
		$isi['data'] = $this->session->userdata("nama");
		$this->load->view('index',$isi);
	}
	public function surat($key)
	{
		$this->keamanan->Security();
		$key = $this->uri->segment(3);
		$isi['content'] = "rekap/surat";
		$isi['judul']   = "Rekap";
		if ($key == 1) {
			$isi['subJudul']= "Rekap Surat Masuk";
		}else{
			$isi['subJudul']= "Rekap Surat keluar";
		}
		$isi['key'] = $key;
		$isi['data'] = $this->session->userdata("nama");
		$this->load->view('index',$isi);
	}
	public function laporan($id)
	{
		$this->keamanan->Security();
		$id = $this->uri->segment(3);
		$query = $this->model_surat->getDataById($id);
		$isi['data'] = $query->result_array();
		$this->load->view('laporan',$isi);
	}
	public function cetakperiode($key)
	{
		$this->keamanan->Security();
		$key = $this->uri->segment(3);
		$awal = $this->input->post('tglawal');
		$akhir = $this->input->post('tglakhir');
		$query = $this->model_surat->getPeriode($awal,$akhir,$key);
		$isi['data'] = $query->result_array();
		$this->load->view('laporan_periode',$isi);
	}
}