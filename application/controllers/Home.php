<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function index()
    {
        $data['title'] = 'Home';
        $data['news_heading'] = 'Hungover';

        $this->load->helper('url');
        $this->load->view('layout/header', $data);
        $this->load->view('home', $data);
        $this->load->view('layout/footer', $data);


    }
}
