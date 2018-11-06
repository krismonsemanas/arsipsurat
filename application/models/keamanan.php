<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Keamanan extends CI_Model {
	public function Security()
	{
		$username = $this->session->userdata("username");
		if (empty($username)) {
			$this->session->sess_destroy();
			redirect(base_url('login'));
		}
	}
}
