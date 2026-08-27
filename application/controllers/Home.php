<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Service_model');
        $this->load->model('Doctor_model');
        $this->load->model('News_model');
    }

    public function index()
    {
        $data['title'] = 'Beranda - Summit Medical Center';
        $data['services'] = $this->Service_model->get_all();
        $data['doctors']  = $this->Doctor_model->getAllDoctors();
        $data['news_list'] = $this->News_model->get_published();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar');
        $this->load->view('home/index', $data);
        $this->load->view('templates/footer');
    }
}