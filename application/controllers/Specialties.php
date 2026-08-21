<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Specialties extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('Specialty_model');
    }

    public function index()
    {
        $data['title'] = 'Spesialisasi';
        $data['specialties'] = $this->Specialty_model->getAllSpecialties();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar');
        $this->load->view('specialties/index', $data);
        $this->load->view('templates/footer');
    }

    public function detail($id)
    {
        $data['specialty'] = $this->Specialty_model->getSpecialtyById($id);

        if (!$data['specialty']) {
            show_404();
        }

        $data['title'] = $data['specialty']->name;

        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar');
        $this->load->view('specialties/detail', $data);
        $this->load->view('templates/footer');
    }
}