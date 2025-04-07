<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_employees extends CI_Model
{
    protected $db_sqlsrv;

    public function __construct()
    {
        parent::__construct();
        $this->db_sqlsrv = $this->load->database('second_db', TRUE);
    }

    public function get_data_by_uniquecode($uniquecode)
    {
        return $this->db_sqlsrv
            ->get_where('Employees', ['UniqueCode' => $uniquecode])
            ->row_array();
    }

}
