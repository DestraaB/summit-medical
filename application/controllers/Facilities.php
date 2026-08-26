<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Facilities extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Facility_model');
        $this->load->library('session');
    }

    // HALAMAN UNTUK PENGUNJUNG PUBLIK
    public function index()
    {
        $data['title'] = 'Fasilitas - Summit Medical Center';
        $data['facilities'] = $this->Facility_model->get_all();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar');
        $this->load->view('facilities/index', $data);
        $this->load->view('templates/footer');
    }

    // HALAMAN UNTUK ADMIN
    public function admin_index()
    {
        if (!$this->session->userdata('logged_in')) {
            redirect('auth');
        }

        $data['title'] = 'Data Fasilitas';
        $data['facilities'] = $this->Facility_model->get_all();

        $this->load->view('templates/admin/header', $data);
        $this->load->view('templates/admin/sidebar', $data);
        $this->load->view('templates/admin/navbar', $data);
        $this->load->view('admin/facilities/index', $data);
        $this->load->view('templates/admin/footer', $data);
    }

    public function create()
    {
        if (!$this->session->userdata('logged_in')) {
            redirect('auth');
        }

        if ($this->input->method() === 'post') {
            $data = [
                'name' => $this->input->post('name', TRUE),
                'description' => $this->input->post('description', TRUE)
            ];

            $this->Facility_model->insert($data);
            $this->session->set_flashdata('success', 'Fasilitas berhasil ditambahkan.');
            redirect('facilities/admin_index');
        }

        $data['title'] = 'Tambah Fasilitas';

        $this->load->view('templates/admin/header', $data);
        $this->load->view('templates/admin/sidebar', $data);
        $this->load->view('templates/admin/navbar', $data);
        $this->load->view('admin/facilities/create', $data);
        $this->load->view('templates/admin/footer', $data);
    }

    public function edit($id)
    {
        if (!$this->session->userdata('logged_in')) {
            redirect('auth');
        }

        $facility = $this->Facility_model->get_by_id($id);
        if (!$facility) {
            show_404();
        }

        if ($this->input->method() === 'post') {
            $data = [
                'name' => $this->input->post('name', TRUE),
                'description' => $this->input->post('description', TRUE)
            ];

            $this->Facility_model->update($id, $data);
            $this->session->set_flashdata('success', 'Fasilitas berhasil diperbarui.');
            redirect('facilities/admin_index');
        }

        $data['title'] = 'Edit Fasilitas';
        $data['facility'] = $facility;

        $this->load->view('templates/admin/header', $data);
        $this->load->view('templates/admin/sidebar', $data);
        $this->load->view('templates/admin/navbar', $data);
        $this->load->view('admin/facilities/edit', $data);
        $this->load->view('templates/admin/footer', $data);
    }

    public function delete($id)
    {
        if (!$this->session->userdata('logged_in')) {
            redirect('auth');
        }

        $facility = $this->Facility_model->get_by_id($id);
        if (!$facility) {
            show_404();
        }

        $this->Facility_model->delete($id);
        $this->session->set_flashdata('success', 'Fasilitas berhasil dihapus.');
        redirect('facilities/admin_index');
    }
}