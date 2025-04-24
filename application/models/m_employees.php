<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_employees extends CI_Model
{
    protected $db_sqlsrv;

    public function __construct()
    {
        parent::__construct();
        $this->db_sqlsrv = $this->load->database('second_db', TRUE);
    }

    public function get_data_by_uniquecode($uniqode)
    {

        $sql = "
        SELECT * 
        FROM dbo.ViewEmployee
        WHERE uniquecode = ?
    ";

        return $this->db_sqlsrv->query($sql, [$uniqode])->row_array();
    }

    public function get_data_tanggal($uniqode)
    {
        $sql = "
            SELECT TOP 1 signature_date, uniquecode, employee_years, employee_name
            FROM dbo.NdaEmployee
            WHERE uniquecode = ?
            AND YEAR(employee_years) = YEAR(GETDATE())
            ORDER BY signature_date DESC
        ";
    
        return $this->db->query($sql, [$uniqode])->row_array();
    }

    public function get_last_nomor_surat($tahun)
    {
        $sql = "
        SELECT TOP 1 nomor
        FROM dbo.NdaEmployee 
        WHERE nomor LIKE ?
        ORDER BY nomor DESC
    ";

        $likePattern = '%/' . $tahun;
        $result = $this->db->query($sql, [$likePattern])->row_array();

        if ($result && isset($result['nomor'])) {
            $pecah = explode('/', $result['nomor']);
            return (int) ($pecah[0] ?? 0);
        }

        return 0;
    }
    
}
