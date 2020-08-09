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
        $data['title'] = 'Submenu Management';
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

    // public function add()
    // {


    //         $id = $this->input->post('id');
    //         $soal = $this->input->post('soal');

    //         $hari       = $this->input->post('hari');
    //         $bulan      = $this->input->post('bulan');
    //         $tahun      = $this->input->post('tahun');
    //         $tanggal  = $tahun . "-" . $bulan . "-" . $hari;

    //         $data_soal = array(
    //             'id'    => $id,
    //             'soal' =>  $soal,
    //             'date_created' => $tanggal()

    // }
}
