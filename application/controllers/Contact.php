<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Kontak';

        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar');
        $this->load->view('contact/index');
        $this->load->view('templates/footer');
    }
}