<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_pegawai extends CI_Model
{
    public function get_by_id($id)
    {
        return $this->db->get_where('NdaEmployee', ['id' => $id])->row_array();
    }
}
