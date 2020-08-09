<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Soal_model extends CI_Model
{

    public function getSoal()
    {
        return $this->db->get('tbl_soal')->result_array();
    }

    public function tambahSoal($data_soal)
    {
        $this->db->insert('tbl_soal', $data_soal);
    }
}
