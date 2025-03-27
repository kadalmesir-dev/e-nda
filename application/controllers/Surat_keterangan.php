<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Surat_keterangan extends CI_Controller
{

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
			// API
			$api_url = 'https://danliris-hr-portal-attendance-service-dev.azurewebsites.net/v1/employees/powerapps-employee-unique-code?keyword=';
			$token_bearer = 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VybmFtZSI6IkFkbWluaXN0cmF0b3IiLCJlbXBsb3llZUlkZW50aXR5IjoiOTk5OTAwMDAwMSIsImFjY2Vzc1JvbGUiOiJVc2VyIEJpYXNhIiwidW5pdElkIjowLCJ1bml0TmFtZSI6bnVsbH0._d5G6CTH8QYcJHZWMAnFOtvQysNHBftAjnFYaL0gpuE';
			$uniqode = '2a35a8dff66a538326a5c603809b09b000f1ba0d';

			$curl = curl_init();

			curl_setopt_array($curl, [
				CURLOPT_URL => $api_url . urlencode($uniqode),
				CURLOPT_RETURNTRANSFER => true,
				CURLOPT_HTTPHEADER => [
					'Authorization: Bearer ' . $token_bearer,
					'Content-Type: application/json'
				],
			]);

			$response = curl_exec($curl);
			curl_close($curl);

			// Decode response JSON
			$api_data = json_decode($response, true);
			// var_dump($api_data); die();

			// Get Data API
			$employee = $api_data;

			// Data untuk dikirim ke view 
			$data = [
				'employee_name'   => $employee['Name'] ?? '',
				'employee_nik'    => $employee['CitizenshipIdentity'] ?? '',
				'employee_grade'  => $employee['EmployeeClass'] ?? '',
				'employee_unit'   => $employee['Section'] ?? '',
				'employee_address'=> $employee['Address'] ?? ''
			];

			// Kirim data ke view
			// var_dump($data);
			// die;
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



