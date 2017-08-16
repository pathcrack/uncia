<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function signin()
	{
		$this->load->view('dashboard/login');
	}
	public function signup()
	{
		$this->load->view('dashboard/register');
	}
}
