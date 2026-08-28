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

    public function admin_index()
    {
        if (!$this->session->userdata('logged_in')) {
            redirect('auth');
        }

        $data['title'] = 'Kelola Spesialisasi';
        $data['specialties'] = $this->Specialty_model->getAllSpecialties();

        $this->load->library('form_validation');
        $this->form_validation->set_rules('name', 'Nama Spesialisasi', 'required|trim');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/admin/header', $data);
            $this->load->view('templates/admin/sidebar', $data);
            $this->load->view('templates/admin/navbar', $data);
            $this->load->view('admin/specialties/index', $data);
            $this->load->view('templates/admin/footer', $data);
        } else {
            $insert_data = [
                'name' => $this->input->post('name', TRUE)
            ];
            $this->Specialty_model->insert($insert_data);
            $this->session->set_flashdata('success', 'Spesialisasi berhasil ditambahkan.');
            redirect('specialties/admin_index');
        }
    }

    public function delete($id)
    {
        if (!$this->session->userdata('logged_in')) {
            redirect('auth');
        }

        $this->Specialty_model->delete($id);
        $this->session->set_flashdata('success', 'Spesialisasi berhasil dihapus.');
        redirect('specialties/admin_index');
    }
}