<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Article_model');
        $this->load->model('Doctor_model');
        $this->load->model('Service_model'); // Memuat model layanan
    }

    public function index()
    {
        $data['title'] = 'Beranda - Summit Medical Center';
        
        // Mengambil data untuk beranda
        $data['latest_articles'] = $this->Article_model->get_latest(3);
        $data['services'] = $this->Service_model->get_latest(3); // Ambil 3 layanan
        
        $this->db->limit(4);
        $data['doctors'] = $this->Doctor_model->getAllDoctors();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar');
        $this->load->view('home/index', $data);
        $this->load->view('templates/footer');
    }
}