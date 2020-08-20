<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Soal extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Soal_model');
        is_logged_in();
    }

    public function index()
    {
        $data['title'] = 'List Soal';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->model('Soal_model', 'menu');

        $data['soal'] = $this->db->get('tbl_soal')->result_array();

        $this->form_validation->set_rules('soal', 'Soal', 'required');


        if ($this->form_validation->run() == false) {

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('soal/index', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'id_soal' => $this->input->post('id_soal'),
                'soal' => $this->input->post('soal'),
                'date_created' => $this->input->post('date')
            ];

            $this->db->insert('tbl_soal', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">New Soal Added</div>');
            redirect('soal/index');
        }
    }

    public function edit()
    {
        $data['title'] = 'List Soal';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->model('Soal_model', 'menu');

        $data['soal'] = $this->db->get('tbl_soal')->result_array();

        $this->form_validation->set_rules('soal', 'Soal', 'required');


        if ($this->form_validation->run() == false) {

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('soal/index', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'id_soal' => $this->input->post('id_soal'),
                'soal' => $this->input->post('soal')
            ];

            $this->Soal_model->editSoal($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Soal Edited</div>');
            redirect('soal/index');
        }
    }

    public function hapus($id)
    {
        $this->Soal_model->hapusSoal($id);
        $this->session->set_flashdata('flash', 'DiHapus');
        redirect('soal');
    }

    public function kuesioner()
    {
        $data['title'] = 'List Kuis';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->model('Soal_model', 'menu');

        $data['kuis'] = $this->db->get('tbl_quesioner')->result_array();

        $this->form_validation->set_rules('keterangan', 'Keterangan', 'required');


        if ($this->form_validation->run() == false) {

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('soal/kuis', $data);
            $this->load->view('templates/footer');
        } else {

            $hari       = $this->input->post('hari');
            $bulan      = $this->input->post('bulan');
            $tahun      = $this->input->post('tahun');
            $tanggal_kuis  = $tahun . "-" . $bulan . "-" . $hari;

            $data_kuis = [
                'id' => $this->input->post('id_kuis'),
                'tanggal' => $tanggal_kuis,
                'keterangan' => $this->input->post('keterangan')
            ];

            $this->Soal_model->tambahKuis($data_kuis);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Kuis Added</div>');
            redirect('soal/kuesioner');
        }
    }

    public function editkuis()
    {
        $data['title'] = 'List Kuis';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->model('Soal_model', 'menu');

        $data['kuis'] = $this->db->get('tbl_quesioner')->result_array();

        $this->form_validation->set_rules('keterangan', 'Keterangan', 'required');


        if ($this->form_validation->run() == false) {

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('soal/kuis', $data);
            $this->load->view('templates/footer');
        } else {

            $hari       = $this->input->post('hari');
            $bulan      = $this->input->post('bulan');
            $tahun      = $this->input->post('tahun');
            $tanggal_kuis  = $tahun . "-" . $bulan . "-" . $hari;

            $data_kuis = [
                'id' => $this->input->post('id_kuis'),
                'tanggal' => $tanggal_kuis,
                'keterangan' => $this->input->post('keterangan')
            ];

            $this->Soal_model->editKuis($data_kuis);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Kuis Edited</div>');
            redirect('soal/kuesioner');
        }
    }

    public function hapuskuis($id)
    {
        $this->Soal_model->hapusKuis($id);
        $this->Soal_model->hapusDetailKuis($id);
        $this->session->set_flashdata('flash', 'DiHapus');
        redirect('soal/kuesioner');
    }

    public function detail_kuis($id)
    {
        $data['title'] = 'Detail Kuis';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['kuesioner'] = $this->db->get_where('tbl_quesioner', ['id' => $id])->row_array();

        $data['list_kuis'] = $this->Soal_model->getDetailKuis($id);


        $data['soal'] = $this->Soal_model->getSoalnotActive($id);

        // $data['kuis_detail'] = $this->Soal_model->getDetailKuis($id);

        $this->form_validation->set_rules('id_soal', 'id_soal', 'required');


        if ($this->form_validation->run() == false) {

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('soal/kuis_detail', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'id' => $this->input->post('id'),
                'id_kuis' => $this->input->post('id_kuis'),
                'id_soal' => $this->input->post('id_soal')
            ];

            $this->Soal_model->addDetailKuis($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Kuis Added</div>');
            redirect('soal/detail_kuis/' . $id);
        }
    }
}
