<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends CI_Controller {

    public function index()
    {
        $data['title'] = 'Search';
        $data['news_heading'] = 'Hungover';

        $this->load->helper('url');
        $this->load->view('layout/header', $data);
        $this->load->view('search', $data);
        $this->load->view('layout/footer', $data);


    }
}
