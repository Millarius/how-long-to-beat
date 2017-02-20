<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function index()
    {
        $this->load->helper('url');

        if ($this->input->server('REQUEST_METHOD') == 'GET') {

            $data['title'] = 'Login';
            $data['news_heading'] = 'Hungover';

            $this->load->view('layout/header', $data);
            $this->load->view('login', $data);
            $this->load->view('layout/footer', $data);

        } else if ($this->input->server('REQUEST_METHOD') == 'POST') {

            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $this->load->database();
            $query = $this->db->get_where('user', array('username' => $username));
            $result =  $query->row();
            var_dump($result);

            if (isset($result) && strcmp($result->password, $password) == 0) {
                $data['username'] = $username;
                redirect('search');
            } else {
                $data['title'] = 'Login';
                $data['news_heading'] = 'Hungover';

                $this->load->view('layout/header', $data);
                $this->load->view('login', $data);
                $this->load->view('layout/footer', $data);
            }
        }
    }
}
