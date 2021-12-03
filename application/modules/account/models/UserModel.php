<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserModel extends CI_Model{

    public function auth()
    {
        $data = array(
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password'),
        );

        $this->db->where($data)->get('users');
    }
}