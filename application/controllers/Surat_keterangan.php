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

			// Kondisi
			if(!empty($uniqode)) {
				$employee = $this->M_employees->get_data_by_uniquecode($uniqode);
			}

			$data = [
				'employee_name'    => trim(($employee['Firstname'] ?? '') . ' ' . ($employee['Lastname'] ?? '')),
				'employee_nik'     => $employee['CitizenshipIdentity'] ?? '',
				'employee_grade'   => $employee['EmploymentClass'] ?? '',
				'employee_unit'    => $employee['EmploymentClass'] ?? '',
				'employee_address' => $employee['Address'] ?? '',
			];


			$this->load->view('template/surat_header');
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
			$this->db->insert('NdaEmployee', $data);
			redirect('surat_keterangan/index');
		}
	}
}
