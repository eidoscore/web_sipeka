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
            ->join('tbl_penilaian', 'tbl_jawaban.id=tbl_penilaian.id_jawaban', 'left')
            ->where("tbl_jawaban.email='$email' AND tbl_penilaian.keterangan is NULL")
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

    public function getKaryawanTerbaik($bulan, $tahun)
    {
        $this->db->select('SUM(tbl_penilaian.nilai) AS total_nilai, tbl_karyawan.*,user.*, tbl_jawaban.email')
            ->from('tbl_quesioner')
            ->join('tbl_jawaban', 'tbl_jawaban.id_kuis=tbl_quesioner.id', 'left')
            ->join('tbl_penilaian', 'tbl_penilaian.id_jawaban=tbl_jawaban.id', 'left')
            ->join('user', 'user.email=tbl_jawaban.email')
            ->join('tbl_karyawan', 'tbl_karyawan.id=user.id')
            ->where("MONTH(tbl_quesioner.tanggal) = '$bulan' AND YEAR(tbl_quesioner.tanggal) = '$tahun'")
            ->group_by("tbl_jawaban.email")
            ->order_by('total_nilai', 'DESC')
            ->limit(1);
        return $this->db->get()->result();
    }
}
