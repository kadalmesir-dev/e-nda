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
}
