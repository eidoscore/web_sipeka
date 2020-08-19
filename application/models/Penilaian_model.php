<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Penilaian_model extends CI_Model
{
    public function getAllKaryawan()
    {
        $this->db->order_by('user.id', 'ASC');
        return $this->db->from('user')
            ->join('tbl_karyawan', 'user.id=tbl_karyawan.id')
            ->get()
            ->result();
    }
}
