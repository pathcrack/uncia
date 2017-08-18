<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function signin()
	{
		$this->form_validation->set_rules('username', 'Username','required');
		$this->form_validation->set_rules('password', 'Password','required');

		if($this->form_validation->run())
		{
			$this->load->model('User_model');
			$username = $this->input->post('username');
			$pass = $this->input->post('password');
			$my_user = $this->User_model->signin($username,$pass);
			echo "<pre>";
			print_r($my_user);
			echo "</pre>";
			exit();
			if($my_user)
			{
				$session_data = array(
					'user_id' => $my_user->user_id,
					'username' => $my_user->username,
					'password' => $my_user->password,
					'email' => $my_user->email,
					'user_role_id' => $my_user->user_role_id,
					'mobile' => $my_user->mobile
					);
			}
		}
		else
		{
			$this->load->view('dashboard/login');
		}
	}
	public function signup()
	{
		$this->load->view('dashboard/register');
	}
}
