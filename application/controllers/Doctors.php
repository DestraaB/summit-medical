<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Doctors extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('Doctor_model');
        $this->load->model('Specialty_model');

        $this->load->library('session');
        $this->load->library('form_validation');
    }

    // =========================================
    // HAK AKSES: PUBLIC (PENGUNJUNG)
    // =========================================

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


    // =========================================
    // HAK AKSES: ADMIN (PENGELOLA)
    // =========================================

    public function admin_index()
    {
        if (!$this->session->userdata('logged_in')) {
            redirect('auth');
        }

        $data['title'] = 'Data Dokter';
        $data['doctors'] = $this->Doctor_model->getAllDoctors();

        $this->load->view('templates/admin/header', $data);
        $this->load->view('templates/admin/sidebar', $data);
        $this->load->view('templates/admin/navbar', $data);
        $this->load->view('admin/doctors/index', $data);
        $this->load->view('templates/admin/footer', $data);
    }

    public function create()
    {
        if (!$this->session->userdata('logged_in')) {
            redirect('auth');
        }

        $data['title'] = 'Tambah Dokter';
        $data['specialties'] = $this->Specialty_model->getAllSpecialties();

        $this->load->view('templates/admin/header', $data);
        $this->load->view('templates/admin/sidebar', $data);
        $this->load->view('templates/admin/navbar', $data);
        $this->load->view('admin/doctors/create', $data);
        $this->load->view('templates/admin/footer', $data);
    }

    public function store()
    {
        if (!$this->session->userdata('logged_in')) {
            redirect('auth');
        }

        $this->form_validation->set_rules('specialty_id', 'Specialty', 'required');
        $this->form_validation->set_rules('name', 'Nama Dokter', 'required|trim');
        $this->form_validation->set_rules('education', 'Pendidikan', 'required|trim');
        $this->form_validation->set_rules('experience', 'Pengalaman', 'required|trim');
        $this->form_validation->set_rules('description', 'Deskripsi', 'required|trim');
        $this->form_validation->set_rules('status', 'Status', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->create();
            return;
        }

        // Konfigurasi Upload Foto
        $config['upload_path']   = './uploads/doctors/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size']      = 2048;

        $this->load->library('upload', $config);

        $photo = null;
        if ($this->upload->do_upload('photo')) {
            $uploadData = $this->upload->data();
            $photo = $uploadData['file_name'];
        }

        $data = [
            'specialty_id' => $this->input->post('specialty_id', TRUE),
            'name'         => $this->input->post('name', TRUE),
            'photo'        => $photo,
            'education'    => $this->input->post('education', TRUE),
            'experience'   => $this->input->post('experience', TRUE),
            'description'  => $this->input->post('description', TRUE),
            'status'       => $this->input->post('status', TRUE),
            'created_at'   => date('Y-m-d H:i:s'),
            'updated_at'   => date('Y-m-d H:i:s')
        ];

        $this->Doctor_model->insertDoctor($data);

        $this->session->set_flashdata('success', 'Data dokter berhasil ditambahkan.');

        redirect('doctors/admin_index');
    }

    public function edit($id)
    {
        if (!$this->session->userdata('logged_in')) {
            redirect('auth');
        }

        $data['title'] = 'Edit Dokter';
        $data['doctor'] = $this->Doctor_model->getDoctorById($id);
        $data['specialties'] = $this->Specialty_model->getAllSpecialties();

        $this->load->view('templates/admin/header', $data);
        $this->load->view('templates/admin/sidebar', $data);
        $this->load->view('templates/admin/navbar', $data);
        $this->load->view('admin/doctors/edit', $data);
        $this->load->view('templates/admin/footer', $data);
    }

    public function update($id)
    {
        if (!$this->session->userdata('logged_in')) {
            redirect('auth');
        }

        $this->form_validation->set_rules('specialty_id', 'Specialty', 'required');
        $this->form_validation->set_rules('name', 'Nama Dokter', 'required|trim');
        $this->form_validation->set_rules('education', 'Pendidikan', 'required|trim');
        $this->form_validation->set_rules('experience', 'Pengalaman', 'required|trim');
        $this->form_validation->set_rules('description', 'Deskripsi', 'required|trim');
        $this->form_validation->set_rules('status', 'Status', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->edit($id);
            return;
        }

        $data = [
            'specialty_id' => $this->input->post('specialty_id', TRUE),
            'name'         => $this->input->post('name', TRUE),
            'education'    => $this->input->post('education', TRUE),
            'experience'   => $this->input->post('experience', TRUE),
            'description'  => $this->input->post('description', TRUE),
            'status'       => $this->input->post('status', TRUE),
            'updated_at'   => date('Y-m-d H:i:s')
        ];

        // Konfigurasi Upload Foto untuk Update
        $config['upload_path']   = './uploads/doctors/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size']      = 2048;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('photo')) {
            // Hapus foto lama jika ada
            $old_doctor = $this->Doctor_model->getDoctorById($id);
            if (!empty($old_doctor->photo) && file_exists('./uploads/doctors/' . $old_doctor->photo)) {
                @unlink('./uploads/doctors/' . $old_doctor->photo);
            }

            $uploadData = $this->upload->data();
            $data['photo'] = $uploadData['file_name'];
        }

        $this->Doctor_model->updateDoctor($id, $data);

        $this->session->set_flashdata('success', 'Data dokter berhasil diupdate.');

        redirect('doctors/admin_index');
    }

    public function delete($id)
    {
        if (!$this->session->userdata('logged_in')) {
            redirect('auth');
        }

        // Hapus file foto fisik saat data dokter dihapus
        $doctor = $this->Doctor_model->getDoctorById($id);
        if (!empty($doctor->photo) && file_exists('./uploads/doctors/' . $doctor->photo)) {
            @unlink('./uploads/doctors/' . $doctor->photo);
        }

        $this->Doctor_model->deleteDoctor($id);

        $this->session->set_flashdata('success', 'Data dokter berhasil dihapus.');

        redirect('doctors/admin_index');
    }
}