<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}

	public function index()
	{

		$validation =  $this->form_validation;

		$validation->set_rules('username', 'Username', 'required|trim');
		$validation->set_rules('password', 'Password', 'required|trim');

		if ($validation->run() == false) {
			$data['title'] = 'Admin Login';
			$this->load->view('template/login_header', $data);
			$this->load->view('auth/login');
			$this->load->view('template/login_footer');
		} else {
			$this->login();
		}
	}

	private function login()
	{
		$username =  $this->input->post('username');
        $password = $this->input->post('password');

        $user =  $this->db->get_where('mst_nda_user', ['username' => $username])->row_array();

        if ($user) {
            // Jika Succes & lolos pengecekan
            if ($user['is_active'] == '1') {
                // Cek Password
                // if (password_verify($password, $user['password'])) {
                if ($password == $user['password']) {
                    
                    //Data di ambil dan disimpan ke session untuk validasi
                    $data = 
                    [
                        'username' => $user['username'],
                        'role_id' => $user['role_id']
                    ];
                    
                    $this->session->set_userdata($data);
                    if($user['role_id'] == 1)
                    {
                        redirect('dashboard_admin');
                        
                    } else {
                        redirect('dashboard_user');
                    }
                    

                } else {
                    $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Password yang anda masukkan salah!!</div>');
                    redirect('auth');
                }
            } else {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Email / Username ini belum di Aktivasi </div>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Email / Username Tidak ada, atau belum dibuat silahkan register untuk membuat akun baru !</div>');
            redirect('auth');
        }

	}

    // Function Logout
    public function logout()
    { 
        // Unset buat membersihkan session
        $this->session->unset_userdata('username'); 
        $this->session->unset_userdata('role_id');
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Kamu berhasil logout !</div>');
        redirect('auth');
    }
}
