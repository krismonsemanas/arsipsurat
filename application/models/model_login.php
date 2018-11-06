<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_login extends CI_Model {
	public function getlogin($user,$pass)
	{
		$pwd = md5($pass);
		$this->db->where('username', $user);
		$this->db->where('password', $pwd);
		$query = $this->db->get('tb_user');
		if($query -> num_rows() > 0 ){
			foreach ($query->result() as $row) {
				$sess = array('username' => $row->username ,
							  'nama' 	 => $row->nama,
							  'level'	 => $row->level );
				$this->session->set_userdata($sess);
				redirect(base_url('home'));
			}
		}else{
			$this->session->set_flashdata('info', '<div class="alert alert-danger" role="alert">Username atau Password salah</div>');
			redirect(base_url('login'));
		} 
	}
}
