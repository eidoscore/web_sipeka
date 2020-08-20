<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Soal_model extends CI_Model
{

    public function getSoal()
    {
        return $this->db->get('tbl_soal')->result_array();
    }

    public function editSoal($data)
    {
        $this->db->from('tbl_soal');
        $this->db->where('id_soal', $this->input->post('id_soal'));
        $this->db->update('tbl_soal', $data);
    }

    public function hapusSoal($id)
    {
        $this->db->from('tbl_soal');
        $this->db->where('id', $id);
        $this->db->delete('tbl_soal');
    }

    public function tambahKuis($data_kuis)
    {
        $this->db->insert('tbl_quesioner', $data_kuis);
    }

    public function editKuis($data_kuis)
    {
        $this->db->from('tbl_quesioner');
        $this->db->where('id', $this->input->post('id_kuis'));
        $this->db->update('tbl_quesioner', $data_kuis);
    }

    public function hapusKuis($id)
    {
        $this->db->from('tbl_quesioner');
        $this->db->where('id', $id);
        $this->db->delete('tbl_quesioner');
    }
    public function hapusDetailKuis($id)
    {
        $this->db->from('tbl_kuis_detail');
        $this->db->where('id_kuis', $id);
        $this->db->delete('tbl_kuis_detail');
    }

    public function getDetailKuis($id)
    {
        $this->db->select('tbl_kuis_detail.*, tbl_soal.id as id_soal2 ,tbl_soal.*');
        $this->db->from('tbl_kuis_detail');
        $this->db->join('tbl_soal', 'tbl_kuis_detail.id_soal = tbl_soal.id_soal');
        $this->db->where('tbl_kuis_detail.id_kuis', $id);
        return $this->db->get()->result();
    }

    public function addDetailKuis($data)
    {
        $this->db->insert('tbl_kuis_detail', $data);
    }

    public function getSoalnotActive($id_kuis)
    {
        $this->db->select('tbl_soal.*')->from('tbl_soal')->where('id_soal not in (select id_soal from tbl_kuis_detail where tbl_kuis_detail.id_kuis=' . $id_kuis . ')');
        return $this->db->get()->result_array();
}
}