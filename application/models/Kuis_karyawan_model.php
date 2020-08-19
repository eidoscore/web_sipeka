<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kuis_karyawan_model extends CI_Model
{
    public function getSoalActive()
    {
    }

    /*
    * get kotak masuk by id
    */
    function getKuisAktif($hari_ini, $hari_ke)
    {
        return $this->db->distinct()
            ->select('tbl_quesioner.*')->from('tbl_quesioner')
            ->where("tbl_quesioner.tanggal BETWEEN '$hari_ini' AND '$hari_ke'")
            ->get()
            ->result();
    }

    function getKuisUser($hari_ini, $hari_ke, $email)
    {
        return $this->db->distinct()
            ->select('tbl_quesioner.id as id_kuesioner,tbl_quesioner.tanggal as tanggal_kuesioner, tbl_quesioner.*,tbl_jawaban.*')->from('tbl_quesioner')
            ->join('tbl_jawaban', 'tbl_jawaban.id_kuis=tbl_quesioner.id', 'left')
            ->where("tbl_quesioner.tanggal BETWEEN '$hari_ini' AND '$hari_ke' AND tbl_jawaban.email='$email'")
            ->get()
            ->result();
    }

    public function getKuis($id)
    {
        return $this->db->get('tbl_quesioner')->result_array();
    }

    public function tambahJawaban($data_jawaban)
    {
        $this->db->insert('tbl_jawaban', $data_jawaban);
    }

    public function tambahDetailJawaban($x)
    {
        $this->db->insert('tbl_detail_jawaban', $x);
    }
}
