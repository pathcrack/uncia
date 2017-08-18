<?php
class User_model extends CI_Model {

	public function signin($username,$password)
	{
		$query = $this->db->where(['username' => $username,'password' => $password])->get('users');
		if($query->num_rows() > 0)
		{
			return $query->num_rows();
		}
	}
	public function signup()
	{
		$this->load->view('dashboard/register');
	}
}
