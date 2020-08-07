<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth_model extends CI_Model
{
    public function tambah_user($data_user)
    {
        $this->db->insert('user', $data_user);
    }
}
