<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Services extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Service_model');
    }

    public function index()
    {
        $data['title'] = 'Layanan - Summit Medical Center';
        $data['services'] = $this->Service_model->get_all();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar');
        $this->load->view('services/index', $data);
        $this->load->view('templates/footer');
    }
}