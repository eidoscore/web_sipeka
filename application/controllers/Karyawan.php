<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Karyawan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Karyawan_model');
        $this->load->model('Auth_model');
        is_logged_in();
    }

    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['menu'] = $this->db->get('user_menu')->result_array();

        $data['karyawan'] = $this->Karyawan_model->getKaryawan();

        $data['title'] = 'List Karyawan';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('karyawan/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['menu'] = $this->db->get('user_menu')->result_array();

        $this->form_validation->set_rules('nip', 'nip', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[user.email]', [
            'is_unique' => 'Email has already registered!!'
        ]);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[5]|matches[password2]', [
            'matches' => 'password dont match!',
            'min_length' => 'password too short!'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Tambah Karyawan';
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('karyawan/tambah_karyawan');
            $this->load->view('templates/footer');
        } else {
            $data_user = [
                'id'    => $this->input->post('id'),
                'name' =>  htmlspecialchars($this->input->post('nama', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'image' => 'default.jpg',
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'role_id' => 2,
                'is_active' => 1,
                'date_created' => time()
            ];

            $hari       = $this->input->post('hari');
            $bulan      = $this->input->post('bulan');
            $tahun      = $this->input->post('tahun');
            $tahun_masuk  = $tahun . "-" . $bulan . "-" . $hari;

            $data_karyawan = array(
                'id'                    => $this->input->post('id'),
                'nip'                   => $this->input->post('nip'),
                'alamat'                => $this->input->post('alamat'),
                'jabatan'               => $this->input->post('jabatan'),
                'tahun_masuk'             => $tahun_masuk,
                'no_hp'              => $this->input->post('telepon')
            );


            $this->Auth_model->tambah_user($data_user);
            $this->Karyawan_model->tambahKaryawan($data_karyawan);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">New Karyawan Added</div>');
            redirect('karyawan');
        }
    }

    public function edit($id)
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['menu'] = $this->db->get('user_menu')->result_array();

        $data['karyawan'] = $this->db->get_where('user', ['id' => $id])->row_array();
        //user untuk get nama sama email berdasarkan id
        $data['karyawan2'] = $this->db->get_where('tbl_karyawan', ['id' => $id])->row_array();
        //karyawan buat sisanya
        $this->form_validation->set_rules('nama', 'Nama', 'required');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Edit Karyawan';
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('karyawan/edit_karyawan');
            $this->load->view('templates/footer');
        } else {
            $data_user = [
                'name' =>  htmlspecialchars($this->input->post('nama', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'image' => 'default.jpg',
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT)
            ];

            $hari       = $this->input->post('hari');
            $bulan      = $this->input->post('bulan');
            $tahun      = $this->input->post('tahun');
            $tahun_masuk  = $tahun . "-" . $bulan . "-" . $hari;

            $data_karyawan = array(
                'nip'                   => $this->input->post('nip'),
                'alamat'                => $this->input->post('alamat'),
                'jabatan'               => $this->input->post('jabatan'),
                'tahun_masuk'             => $tahun_masuk,
                'no_hp'              => $this->input->post('telepon')
            );


            $this->Karyawan_model->editUser($this->input->post('id'), $data_user);
            $this->Karyawan_model->editKaryawan($this->input->post('id'), $data_karyawan);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Karyawan Edited</div>');
            redirect('karyawan');
        }
    }

    public function hapus($id)
    {
        $this->Karyawan_model->hapusKaryawan($id);
        $this->session->set_flashdata('flash', 'DiHapus');
        redirect('karyawan');
    }
}
