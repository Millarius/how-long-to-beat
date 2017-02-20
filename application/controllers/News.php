<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Controller {

    public function index()
    {
        $data['title'] = 'News';
        $data['news_heading'] = 'Hungover';

        $this->load->helper('url');
        $this->load->view('layout/header', $data);
        $this->load->view('news', $data);
        $this->load->view('layout/footer', $data);


    }
}
