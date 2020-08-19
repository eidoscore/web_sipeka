<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Karyawan_model extends CI_Model
{
    public function tambahKaryawan($data_karyawan)
    {
        $this->db->insert('tbl_karyawan', $data_karyawan);
    }

    public function getKaryawan()
    {
        $this->db->order_by('user.id', 'ASC');
        return $this->db->from('user')
            ->join('tbl_karyawan', 'user.id=tbl_karyawan.id')
            ->get()
            ->result();
    }

    public function editUser($id, $data_user)
    {
        $this->db->from('user');
        $this->db->where('id', $id);
        $this->db->update('user', $data_user);
    }


    public function editKaryawan($id, $data_karyawan)
    {
        $this->db->from('tbl_karyawan');
        $this->db->where('id', $id);
        $this->db->update('tbl_karyawan', $data_karyawan);
    }

    public function hapusKaryawan($id)
    {
        $this->db->from('tbl_karyawan');
        $this->db->where('id', $id);
        $this->db->delete('tbl_karyawan');
    }
}
