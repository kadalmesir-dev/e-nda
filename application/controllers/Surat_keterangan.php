<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Surat_keterangan extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_employees');
	}
	// Fungsi untuk konversi bulan ke angka Romawi
	private function getRomanMonth($bulan)
	{
		$romawi = ['I', 'II', 'III', 'IV', 'V', 'VI', 'VII', 'VIII', 'IX', 'X', 'XI', 'XII'];
		return $romawi[$bulan - 1];
	}

	// generate nomor surat urut per tahun
	private function generate_nomor_surat()
	{
		$tahun = date('Y');
		$bulan_romawi = $this->getRomanMonth(date('n'));

		$file_path = FCPATH . 'assets/nomor_surat_per_tahun/counter_' . $tahun . '.txt';

		// Ambil angka terakhir dari file jika ada
		if (file_exists($file_path)) {
			$angka_terakhir_file = (int)file_get_contents($file_path);
		} else {
			$angka_terakhir_file = 0;
		}

		// Ambil angka terakhir dari DB
		$angka_terakhir_db = $this->M_employees->get_last_nomor_surat($tahun);

		// Gunakan angka terbesar antara file dan DB
		$angka_baru = max($angka_terakhir_file, $angka_terakhir_db) + 1;

		if ($angka_baru > 5999) {
			show_error("Nomor surat sudah melebihi batas maksimal 6000 untuk tahun $tahun.");
		}

		// Simpan ke file untuk record
		file_put_contents($file_path, $angka_baru);

		// Format 4 digit
		$angka_formatted = str_pad($angka_baru, 4, '0', STR_PAD_LEFT);
		$nomor_surat = "{$angka_formatted}/DL-NDA-LGL/{$bulan_romawi}/{$tahun}";

		// Cek db apakah nomor sudha di pakai ?
		$this->db->where('nomor', $nomor_surat);
		$cek = $this->db->get('NdaEmployee')->num_rows();

		if ($cek > 0) {
			// Kalau sudah ada, ulangi proses generate
			return $this->generate_nomor_surat();
		}

		// Nomor aman digunakan
		return $nomor_surat;
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
			$nomor_surat = $this->generate_nomor_surat();
			$data['nomor'] = $nomor_surat;
			$data['judul'] = 'NON DISCLOSURE AGREEMENT KARYAWAN';
			$this->load->view('template/surat_header', $data);
			$this->load->view('surat_keterangan/surat_keterangan', $data);
			$this->load->view('template/surat_footer');
		} else {
			$data = $this->input->post();

			// Simpan tanda tangan
			if (!empty($data['signature'])) {
				// Ambil base64-nya dari input form
				$signature = str_replace(['data:image/png;base64,', ' '], ['', '+'], $data['signature']);
				$imageData = base64_decode($signature);

				// Buat nama file asli
				$rawFileName = 'signature_' . time() . '.png';

				// Simpan file ke folder
				$filePath = FCPATH . 'upload/signature/' . $rawFileName;
				file_put_contents($filePath, $imageData);

				// Encode nama file jadi base64
				$encodedFileName = base64_encode($rawFileName);

				// Gabungkan dengan path, simpan ke DB
				$data['signature'] = 'upload/signature/' . $encodedFileName;
				$data['signature_base64'] = 'data:image/png;base64,' . base64_encode($imageData);
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
