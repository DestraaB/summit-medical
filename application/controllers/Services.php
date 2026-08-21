<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Services extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Layanan';

        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar');
        $this->load->view('services/index');
        $this->load->view('templates/footer');
    }
}