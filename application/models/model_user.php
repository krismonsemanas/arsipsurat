<?php
	/**
	 * 
	 */
	class Model_user extends CI_Model
	{
		
		public function cekUser($user)
		{
			$this->db->select('password');
			$this->db->where('username',$user);
			$query = $this->db->get('tb_user');
			return $query;
		}
	}
?>