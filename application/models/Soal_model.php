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
}
