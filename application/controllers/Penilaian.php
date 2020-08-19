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

    public function Detail_Kuesioner()
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
}
