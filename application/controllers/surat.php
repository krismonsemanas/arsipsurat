<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Surat extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('model_surat');
	}
	public function index()
	{
		$this->keamanan->Security();
		$isi['content'] = "surat-masuk/surat";
		$isi['judul']   = "Surat";
		$isi['subJudul'] = "Data Surat Masuk & Surat Keluar";
		$isi['key'] = null;
		$query = $this->model_surat->getdata();	
		$isi['data'] = $query->result_array();
		$this->load->view('index',$isi);
	}
	public function tampil($id)
	{
		$this->keamanan->Security();
		$id = $this->uri->segment(3);
		$isi['content'] = "surat-masuk/surat";
		$isi['judul']   = "Surat";
		if ($id == 1) {
			$isi['subJudul']= "Surat Masuk";
		}else if($id == 2){
			$isi['subJudul']= "Surat keluar";
		}
		$isi['key'] = $id;
		$query = $this->model_surat->getDataById($id);
		$isi['data'] = $query->result_array();
		$this->load->view('index',$isi);
	}
	public function tambah($id)
	{
		$this->keamanan->Security();
		$id = $this->uri->segment(3);
		$isi['content'] = "surat-masuk/form-tambah";
		$isi['judul']   = "Surat";
		if ($id == 1) {
			$isi['subJudul']= "Tambah Surat Masuk";
		}else{
			$isi['subJudul']= "Tambah Surat keluar";
		}
		$isi['key'] = $id;
		$query = $this->model_surat->getJenis();
		$isi['data'] = $query->result_array();
		$this->load->view('index',$isi);
	}
	public function simpan()
	{
		$this->keamanan->Security();
		$input = $this->input->post(null, TRUE);
		$this->model_surat->add($input);
	}
	public function edit($id = null)
	{
		$this->keamanan->Security();
		$id = $this->uri->segment(3);
		$query = $this->model_surat->getdata($id);
		$isi['content'] = "surat-masuk/form-edit";
		$isi['judul']   = "Surat";
		$isi['subJudul']= "Edit surat";
		$jenis = $this->model_surat->getJenis();
		$isi['jenis'] = $jenis->result_array();
		$isi['data']    = $query->row();
		$this->load->view('index',$isi);
	}
	public function proses_edit()
	{
		$this->keamanan->Security();
		$input = $this->input->post(null, TRUE);
		$this->model_surat->edit($input);
	}
	public function hapus($id)
	{
		$this->keamanan->Security();
		$key = $this->uri->segment(3);
		$query = $this->model_surat->getDataById($id);
		$isi['key'] = $query->result_array();
		$this->model_surat->getHapus($key);
	}
}
