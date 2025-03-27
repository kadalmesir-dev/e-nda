<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function login()
	{
		$data['title'] = 'Admin Login';
        $this->load->view('template/login_header', $data);
		$this->load->view('auth/login');
        $this->load->view('template/login_footer');
	}

	public function register()
	{
		$data['title'] = 'Form Register';
        $this->load->view('template/login_header', $data);
		$this->load->view('auth/register');
        $this->load->view('template/login_footer');
	}
}