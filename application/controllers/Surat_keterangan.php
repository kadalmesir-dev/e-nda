<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Surat_keterangan extends CI_Controller {

	
	public function index()
	{
        $this->load->view('template/surat_header');
		$this->load->view('surat_keterangan/surat_keterangan');
        $this->load->view('template/surat_footer');
	}
}
