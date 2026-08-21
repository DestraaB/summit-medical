<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Facilities extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Fasilitas';

        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar');
        $this->load->view('facilities/index');
        $this->load->view('templates/footer');
    }
}