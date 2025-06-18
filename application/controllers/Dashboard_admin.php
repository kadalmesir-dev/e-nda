<?php
defined('BASEPATH') or exit('No direct script access allowed');

require_once FCPATH . 'vendor/autoload.php';

use Mpdf\Mpdf;

class Dashboard_admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_pegawai');
    }

    public function index()
    {
        $data['user'] = $this->db->get_where('mst_nda_user', ['username' => $this->session->userdata('username')])->row_array();
        $data['judul_website'] = 'Dashboard Admin';
        // $query = $this->db->query("SELECT COUNT(*) as jumlah_user from user");
        // $data['jumlah_user'] = $query->row()->jumlah_user;
        // $last_update = $this->db->query("SELECT MAX(created_at) as update_terakhir from user");
        // $get_last_update = $last_update->row()->update_terakhir;
        // $data['update_terakhir'] = date('d-m-Y', $get_last_update);
        $this->load->view('template/dashboard_header', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('template/dashboard_topbar', $data);
        $this->load->view('template/dashboard_footer');
    }

    public function data_pegawai()
    {
        $data['judul_website'] = 'Data Pegawai';
        $data['user'] = $this->db->get_where('mst_nda_user', ['username' => $this->session->userdata('username')])->row_array();
        $data['data_pegawai'] =  $this->db->get('NdaEmployee')->result_array();

        $this->load->view('template/dashboard_header', $data);
        $this->load->view('admin/data_pegawai', $data);
        $this->load->view('template/dashboard_topbar', $data);
        $this->load->view('template/dashboard_footer');
    }

    public function cetak_pdf($id)
    {
        $data['pegawai'] = $this->M_pegawai->get_by_id($id);


        if (!$data['pegawai']) {
            show_error("Data pegawai dengan ID $id tidak ditemukan.", 404, 'Data Tidak Ada');
            return;
        }

        $mpdf = new \Mpdf\Mpdf([
            'mode' => 'utf-8',
            'format' => 'A4',
            'orientation' => 'P',
            'margin_left' => 10,
            'margin_right' => 10,
            'margin_top' => 10,
            'margin_bottom' => 10,
            'margin_header' => 5,
            'margin_footer' => 5
        ]);

        $html = $this->load->view('admin/cetak/cetak_pegawai', $data, TRUE);
        $mpdf->WriteHTML($html);
        $mpdf->Output("pegawai_{$id}.pdf", 'I');
        exit;
    }

    
}
