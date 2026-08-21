<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Doctors extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('Doctor_model');
        $this->load->model('Specialty_model');

        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title'] = 'Dokter';
        $data['doctors'] = $this->Doctor_model->getAllDoctors();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar');
        $this->load->view('doctors/index', $data);
        $this->load->view('templates/footer');
    }

    public function detail($id = null)
    {
        if (empty($id)) {
            show_404();
        }

        $data['doctor'] = $this->Doctor_model->getDoctorById($id);

        if (!$data['doctor']) {
            show_404();
        }

        $data['title'] = $data['doctor']->name;

        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar');
        $this->load->view('doctors/detail', $data);
        $this->load->view('templates/footer');
    }
    public function create()
    {
        $data['title'] = 'Tambah Dokter';
        $data['specialties'] = $this->Specialty_model->getAllSpecialties();

        $this->load->view('admin/doctors/create', $data);
    }
    public function store()
    {
        // =========================
        // VALIDASI
        // =========================

        $this->form_validation->set_rules(
            'specialty_id',
            'Specialty',
            'required'
        );

        $this->form_validation->set_rules(
            'name',
            'Nama Dokter',
            'required|trim'
        );

        $this->form_validation->set_rules(
            'education',
            'Pendidikan',
            'required|trim'
        );

        $this->form_validation->set_rules(
            'experience',
            'Pengalaman',
            'required|trim'
        );

        $this->form_validation->set_rules(
            'description',
            'Deskripsi',
            'required|trim'
        );

        $this->form_validation->set_rules(
            'status',
            'Status',
            'required'
        );


        // =========================
        // JIKA VALIDASI GAGAL
        // =========================

        if ($this->form_validation->run() == FALSE) {

            $this->create();

            return;
        }


        // =========================
        // DATA DOKTER
        // =========================

        $data = [
            'specialty_id' => $this->input->post('specialty_id', TRUE),
            'name'         => $this->input->post('name', TRUE),
            'education'    => $this->input->post('education', TRUE),
            'experience'   => $this->input->post('experience', TRUE),
            'description'  => $this->input->post('description', TRUE),
            'status'       => $this->input->post('status', TRUE),
            'created_at'   => date('Y-m-d H:i:s'),
            'updated_at'   => date('Y-m-d H:i:s')
        ];


        // =========================
        // SIMPAN
        // =========================

        $this->Doctor_model->insertDoctor($data);


        // =========================
        // PESAN BERHASIL
        // =========================

        $this->session->set_flashdata(
            'success',
            'Data dokter berhasil ditambahkan.'
        );


        // =========================
        // REDIRECT
        // =========================

        redirect('doctors');
    }
}