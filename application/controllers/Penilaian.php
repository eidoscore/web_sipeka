<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Penilaian extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Penilaian_model');
        $this->load->model('Karyawan_model');
        $this->load->model('Auth_model');
        $this->load->model('Kuis_karyawan_model');
        $this->load->model('Soal_model');

        // is_logged_in();
    }

    public function index()
    {
        $data['title'] = 'Kuesioner Karyawan';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['menu'] = $this->db->get('user_menu')->result_array();

        $data['karyawan'] = $this->Penilaian_model->getAllKaryawan();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('penilaian/index', $data);
        $this->load->view('templates/footer');
    }

    public function Detail_Kuesioner($email)
    {
        $data['title'] = 'Kuesioner';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        date_default_timezone_set("Asia/Jakarta");

        $data_email = str_replace('-', '@', $email);

        $data['kuesioner'] = $this->Penilaian_model->getKuisUser($data_email);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('penilaian/detail_penilaian', $data);
        $this->load->view('templates/footer');
    }

    public function TampilJawaban($id)
    {
        $data['title'] = 'Jawab Kuis';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $jawaban = $this->db->get_where('tbl_jawaban', ['tbl_jawaban.id' => $id])->row_array();

        $data['kuesioner'] = $this->db->get_where('tbl_quesioner', ['id' => $jawaban['id_kuis']])->row_array();

        $data['soal'] = $this->Soal_model->getDetailKuis($jawaban['id_kuis']);
        $data['jawaban'] = $this->db->get_where('tbl_detail_jawaban', ['tbl_detail_jawaban.id_jawaban' => $id])->result();

        $this->form_validation->set_rules('id_penilaian', 'Id_penilaian', 'required');

        $this->form_validation->set_rules('nilai', 'Nilai', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('penilaian/tampil_jawaban', $data);
            $this->load->view('templates/footer');
        } else {
            $data_nilai = [
                'id_penilaian'  => $this->input->post('id_penilaian'),
                'id_jawaban'    => $this->input->post('id_jawaban'),
                'nilai'         => $this->input->post('nilai'),
                'keterangan'    => "Sudah di jawab"
            ];

            $this->Penilaian_model->tambahNilai($data_nilai);

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Penilaian Added</div>');
            redirect('penilaian/');
        }
    }

    public function best_karyawan()
    {
        $data['title'] = 'Karyawan Terbaik';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        // $bulan      = date('m');
        // $tahun      = date('Y');
        // $data['karyawan_terbaik'] = $this->Penilaian_model->getKaryawanTerbaik($bulan, $tahun);

        $this->form_validation->set_rules('bulan', 'Bulan', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('penilaian/best_karyawan', $data);
            $this->load->view('templates/footer');
        } else {
            $bulan      = $this->input->post('bulan');
            $tahun      = $this->input->post('tahun');

            $data['karyawan_terbaik'] = $this->Penilaian_model->getKaryawanTerbaik($bulan, $tahun);
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('penilaian/best_karyawan', $data);
            $this->load->view('templates/footer');
        }
    }
}
