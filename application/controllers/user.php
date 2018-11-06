<?php
	class User extends CI_Controller {
		function __construct($foo = null)
		{
			parent::__construct();
			$this->load->model('model_user');
		}
		public function index()
		{
			$this->keamanan->Security();
			$isi['content'] = "user/profile.php";
			$isi['judul']   = "Profile";
			$isi['subJudul'] = "Your Profile";
			$isi['error'] = null;
			$this->load->view('index',$isi);
		}
		public function getuser()
		{
			$this->keamanan->Security();
			$user = $this->session->userdata("username");
			$old = $this->input->post('oldpass');
			$new = $this->input->post('newpass');
			$renew = $this->input->post('repass');  
		}
	}