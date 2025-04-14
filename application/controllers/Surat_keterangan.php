<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Surat_keterangan extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_employees');
	}


	public function index()
	{
		// Form Validation
		$form = $this->form_validation;

		$form->set_rules('employee_name', 'Nama', 'required');
		$form->set_rules('employee_nik', 'Nik', 'required');
		$form->set_rules('employee_grade', 'Jabatan', 'required');
		$form->set_rules('employee_unit', 'Bagian', 'required');
		$form->set_rules('employee_address', 'Alamat', 'required');

		// Jika validasi gagal, tampilkan form dengan data dari API
		if ($form->run() == false) {

			// GET Data Request from URL
			$uniqode = $this->input->get('keyword');
			$employee  = [];
			$get_data = $this->M_employees->get_data_tanggal($uniqode);

			// Kondisi
			if (!empty($get_data['uniquecode']) && $get_data['uniquecode'] == $uniqode && $get_data['employee_years'] ==  date('Y')) {
				redirect('surat_keterangan/end_page_2?keyword=' . $uniqode);
			}
			
			if (!empty($uniqode)) {
				$employee = $this->M_employees->get_data_by_uniquecode($uniqode);
			}


			$data = ['employee' => $employee];
			$data['uniquecode'] = $uniqode;
			$data['judul'] = 'NON DISCLOSURE AGREEMENT KARYAWAN';
			$this->load->view('template/surat_header', $data);
			$this->load->view('surat_keterangan/surat_keterangan', $data);
			$this->load->view('template/surat_footer');
		} else {
			$data = $this->input->post();

			// Simpan tanda tangan
			if (!empty($data['signature'])) {
				$signature = str_replace(['data:image/png;base64,', ' '], ['', '+'], $data['signature']);
				$imageData = base64_decode($signature);

				$fileName = 'signature_' . time() . '.png';
				$filePath = FCPATH . 'upload/signature/' . $fileName;

				// Simpan gambar
				file_put_contents($filePath, $imageData);

				// Simpan path file ke database
				$data['signature'] = 'upload/signature/' . $fileName;
			}

			// Insert ke database
			$data['signature_date'] = date('Y-m-d H:i:s');
			$data['employee_years'] = date('Y');
			$this->db->insert('NdaEmployee', $data);
			$this->session->set_flashdata('success', 'Data Berhasil Disimpan!');
			redirect('surat_keterangan/end_page');
		}
	}

	public function end_page()
	{
		$data['judul'] = 'Thanks You';
		$uniqode = $this->input->get('keyword');
		$data['get_tanggal'] = $this->M_employees->get_data_tanggal($uniqode);
		$this->load->view('template/surat_header', $data);
		$this->load->view('surat_keterangan/end_page', $data);
		$this->load->view('template/surat_footer');
	}

	public function end_page_2()
	{
		$data['judul'] = 'Oops !';
		$uniqode = $this->input->get('keyword');
		$data['get_data'] = $this->M_employees->get_data_tanggal($uniqode);
		$this->load->view('template/surat_header', $data);
		$this->load->view('surat_keterangan/end_page_2', $data);
		$this->load->view('template/surat_footer');
	}
}
