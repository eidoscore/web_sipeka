<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kuis_karyawan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Kuis_karyawan_model');
        $this->load->model('Soal_model');
        // is_logged_in();
    }

    public function index()
    {
        $data['title'] = 'Kuesioner';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        date_default_timezone_set("Asia/Jakarta");
        $hari_ini = date('Y-m-d');
        $hari_ke = date('Y-m-d', strtotime('+6 days', strtotime($hari_ini)));
        $data['kuesioner'] = $this->Kuis_karyawan_model->getKuisAktif($hari_ini, $hari_ke);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('kuesioner/index', $data);
        $this->load->view('templates/footer');
    }


    public function jawab($id)
    {
        $data['title'] = 'Jawab Kuis';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();


        $data['kuesioner'] = $this->db->get_where('tbl_quesioner', ['id' => $id])->row_array();

        $data['soal'] = $this->Soal_model->getDetailKuis($id);

        $total_soal = $this->input->post('total_soal');
        $this->form_validation->set_rules('id', 'id', 'required');

        if ($this->form_validation->run() == false) {

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('kuesioner/jawaban', $data);
            $this->load->view('templates/footer');
        } else {
            $data_jawaban = [
                'id'        => $this->input->post('id'),
                'id_kuis'   => $this->input->post('id_kuis'),
                'email'     => $data['user']['email'],
                'tanggal'   => date('Y-m-d')
            ];

            $this->Kuis_karyawan_model->tambahJawaban($data_jawaban);

            for ($i = 1; $i <= $total_soal; $i++) {
                $x = $i;
                $x = [
                    'id_jawaban'        => $this->input->post('id'),
                    'id_detail_soal'    => $this->input->post('id_detail_soal' . $i),
                    'jawaban'           => $this->input->post('jawaban' . $i)
                ];

                $this->Kuis_karyawan_model->tambahDetailJawaban($x);
            }

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">New Submenu Added</div>');
            redirect('kuis_karyawan');
        }
    }
}
