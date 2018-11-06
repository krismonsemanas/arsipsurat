<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function index()
	{
		$this->keamanan->Security();
		$isi['content'] = "content";
		$isi['judul']   = "Dashboard";
		$isi['subJudul']= "Dashboard";
		$isi['data'] = $this->session->userdata("nama");
		$this->load->view('index',$isi);
	}
	public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}
	
}
