<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('Article_model');
    }

    public function index()
    {
        $data['title'] = 'Summit Medical';
        $data['articles'] = $this->Article_model->get_latest(3);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar');
        $this->load->view('home/index', $data);
        $this->load->view('templates/footer');
    }
}