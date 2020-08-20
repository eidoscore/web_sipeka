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

    public function getDetailJawabanKaryawan($id)
    {
        $this->db->order_by('tbl_detail_jawaban.id', 'ASC');
        return $this->db->from('tbl_detail_jawaban')
            ->get()
            ->result();
    }

    function getKuisUser($email)
    {
        return $this->db->distinct()
            ->select('tbl_quesioner.id as id_kuesioner,tbl_quesioner.tanggal as tanggal_kuesioner, tbl_quesioner.*,tbl_jawaban.*')->from('tbl_quesioner')
            ->join('tbl_jawaban', 'tbl_jawaban.id_kuis=tbl_quesioner.id', 'left')
            ->where("tbl_jawaban.email='$email'")
            ->get()
            ->result();
    }

    public function getJawaban()
    {
        $this->db->order_by('user.id', 'ASC');
        return $this->db->from('user')
            ->join('tbl_karyawan', 'user.id=tbl_karyawan.id')
            ->get()
            ->result();
    }

    public function tambahNilai($data_nilai)
    {
        $this->db->insert('tbl_penilaian', $data_nilai);
    }
}
