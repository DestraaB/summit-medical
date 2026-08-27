<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Services extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Service_model');
        $this->load->library('session');
    }

    // HALAMAN UNTUK PENGUNJUNG PUBLIK
    public function index()
    {
        $data['title'] = 'Layanan - Summit Medical Center';
        $data['services'] = $this->Service_model->get_all();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar');
        $this->load->view('services/index', $data);
        $this->load->view('templates/footer');
    }

    public function detail($id = null)
    {
        if (empty($id)) {
            show_404();
        }

        $service = $this->Service_model->get_by_id($id);

        if (!$service) {
            show_404();
        }

        $data['title'] = $service->name . ' - Summit Medical Center';
        $data['service'] = $service;

        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar');
        $this->load->view('services/detail', $data);
        $this->load->view('templates/footer');
    }

    // HALAMAN UNTUK ADMIN
    public function admin_index()
    {
        if (!$this->session->userdata('logged_in')) {
            redirect('auth');
        }

        $data['title'] = 'Data Layanan';
        $data['services'] = $this->Service_model->get_all();

        $this->load->view('templates/admin/header', $data);
        $this->load->view('templates/admin/sidebar', $data);
        $this->load->view('templates/admin/navbar', $data);
        $this->load->view('admin/services/index', $data);
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

            $this->Service_model->insert($data);
            $this->session->set_flashdata('success', 'Layanan berhasil ditambahkan.');
            redirect('services/admin_index');
        }

        $data['title'] = 'Tambah Layanan';

        $this->load->view('templates/admin/header', $data);
        $this->load->view('templates/admin/sidebar', $data);
        $this->load->view('templates/admin/navbar', $data);
        $this->load->view('admin/services/create', $data);
        $this->load->view('templates/admin/footer', $data);
    }

    public function edit($id)
    {
        if (!$this->session->userdata('logged_in')) {
            redirect('auth');
        }

        $service = $this->Service_model->get_by_id($id);
        if (!$service) {
            show_404();
        }

        if ($this->input->method() === 'post') {
            $data = [
                'name' => $this->input->post('name', TRUE),
                'description' => $this->input->post('description', TRUE)
            ];

            $this->Service_model->update($id, $data);
            $this->session->set_flashdata('success', 'Layanan berhasil diperbarui.');
            redirect('services/admin_index');
        }

        $data['title'] = 'Edit Layanan';
        $data['service'] = $service;

        $this->load->view('templates/admin/header', $data);
        $this->load->view('templates/admin/sidebar', $data);
        $this->load->view('templates/admin/navbar', $data);
        $this->load->view('admin/services/edit', $data);
        $this->load->view('templates/admin/footer', $data);
    }

    public function delete($id)
    {
        if (!$this->session->userdata('logged_in')) {
            redirect('auth');
        }

        $service = $this->Service_model->get_by_id($id);
        if (!$service) {
            show_404();
        }

        $this->Service_model->delete($id);
        $this->session->set_flashdata('success', 'Layanan berhasil dihapus.');
        redirect('services/admin_index');
    }
}