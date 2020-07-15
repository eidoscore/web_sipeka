<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        is_logged_in();
    }

    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['title'] = 'My Profile';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/index', $data);
        $this->load->view('templates/footer');
    }

    public function edit()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['title'] = 'Edit Profile';

        $this->form_validation->set_rules('name', 'Full Name', 'required|trim');


        if ($this->form_validation->run() == false) {

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('user/edit', $data);
            $this->load->view('templates/footer');
        } else {
            $name = $this->input->post('name');
            $email = $this->input->post('email');

            // cek jika ada gambar yang akan di upload
            $upload_image = $_FILES['image'];
            if ($upload_image) {
                $config['upload_path'] = './assets/img/profile';
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size']     = '2048';

                $this->load->library('upload', $config);

                // lakukan upload gambar 
                if ($this->upload->do_upload('image')) {
                    // cek nama gambar lama/default
                    $old_image = $data['user']['image'];
                    if ($old_image != 'default.jpg') {
                        unlink(FCPATH . 'assets/img/profile/' . $old_image);
                    }
                    // ganti gambar lama dengan gambar baru
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('image', $new_image);
                } else {
                    echo $this->upload->display_erros();
                }
            }

            $this->db->set('name', $name);
            $this->db->where('email', $email);
            $this->db->update('user');

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Your Profile has been Updated! </div>');
            redirect('user');
        }
    }


    public function changepassword()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['title'] = 'Change Password';

        $this->form_validation->set_rules('current_password', 'current password', 'required|trim');
        $this->form_validation->set_rules('new_password1', 'New Password', 'required|trim|min_length[5]|matches[new_password2]');
        $this->form_validation->set_rules('new_password2', ' Confirm New Password', 'required|trim|min_length[5]|matches[new_password1]');


        if ($this->form_validation->run() == false) {

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('user/changepassword', $data);
            $this->load->view('templates/footer');
        } else {
            // cek password yang sudah aktif sekarang
            $current_password = $this->input->post('current_password');
            $new_password = $this->input->post('new_password1');
            // jika password yang di inputkan salah
            if (!password_verify($current_password, $data['user']['password'])) {
                // menampilkan pesan error
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Wrong Current Password! </div>');
                redirect('user/changepassword');
            } else {
                //cek apakah password baru sama dengan password lama?
                if ($current_password == $new_password) {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            New Passoword Cannot be the same as current Password! </div>');
                    redirect('user/changepassword');
                } else {
                    // jika password benar/tidak sama dengan password lama jalankan
                    $password_hash = password_hash($new_password, PASSWORD_DEFAULT);

                    $this->db->set('password', $password_hash);
                    $this->db->where('email', $this->session->userdata('email'));
                    $this->db->update('user');

                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                    Password Changed! </div>');
                    redirect('user/changepassword');
                }
            }
        }
    }
}
