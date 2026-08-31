<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Facilities extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Facility_model');
        $this->load->library('session');
        $this->load->library('form_validation');
        $this->load->helper('url');
        $this->load->helper('text'); // Untuk slug
    }

    // =========================================
    // HAK AKSES: PUBLIC (PENGUNJUNG)
    // =========================================
    public function index()
    {
        $data['title'] = 'Fasilitas Kami';
        $data['facilities'] = $this->Facility_model->getAll();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar');
        $this->load->view('facilities/index', $data);
        $this->load->view('templates/footer');
    }

    public function detail($slug)
    {
        $data['facility'] = $this->Facility_model->getBySlug($slug);
        if (!$data['facility']) show_404();

        $data['title'] = $data['facility']->name;

        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar');
        $this->load->view('facilities/detail', $data);
        $this->load->view('templates/footer');
    }

    // =========================================
    // HAK AKSES: ADMIN (PENGELOLA)
    // =========================================
    public function admin_index()
    {
        if (!$this->session->userdata('logged_in')) redirect('auth');

        $data['title'] = 'Data Fasilitas';
        $data['facilities'] = $this->Facility_model->getAll();

        $this->load->view('templates/admin/header', $data);
        $this->load->view('templates/admin/sidebar', $data);
        $this->load->view('templates/admin/navbar', $data);
        $this->load->view('admin/facilities/index', $data);
        $this->load->view('templates/admin/footer', $data);
    }

    public function create()
    {
        if (!$this->session->userdata('logged_in')) redirect('auth');

        $data['title'] = 'Tambah Fasilitas';

        $this->load->view('templates/admin/header', $data);
        $this->load->view('templates/admin/sidebar', $data);
        $this->load->view('templates/admin/navbar', $data);
        $this->load->view('admin/facilities/create', $data);
        $this->load->view('templates/admin/footer', $data);
    }

    public function store()
    {
        if (!$this->session->userdata('logged_in')) redirect('auth');

        $this->form_validation->set_rules('name', 'Nama Fasilitas', 'required|trim');
        $this->form_validation->set_rules('short_description', 'Deskripsi Singkat', 'required|trim');
        $this->form_validation->set_rules('description', 'Deskripsi Lengkap', 'required|trim');
        $this->form_validation->set_rules('status', 'Status', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->create();
            return;
        }

        // Generate Slug dari Nama Fasilitas
        $slug = url_title($this->input->post('name', TRUE), 'dash', TRUE);

        // Upload Gambar
        $config['upload_path']   = './uploads/facilities/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size']      = 2048;
        $this->load->library('upload', $config);

        $image = null;
        if ($this->upload->do_upload('image')) {
            $uploadData = $this->upload->data();
            $image = $uploadData['file_name'];
        }

        $data = [
            'name'              => $this->input->post('name', TRUE),
            'slug'              => $slug,
            'image'             => $image,
            'short_description' => $this->input->post('short_description', TRUE),
            'description'       => $this->input->post('description', TRUE),
            'status'            => $this->input->post('status', TRUE),
            'created_at'        => date('Y-m-d H:i:s'),
            'updated_at'        => date('Y-m-d H:i:s')
        ];

        $this->Facility_model->insert($data);
        $this->session->set_flashdata('success', 'Data fasilitas berhasil ditambahkan.');
        redirect('facilities/admin_index');
    }

    public function edit($id)
    {
        if (!$this->session->userdata('logged_in')) redirect('auth');

        $data['title'] = 'Edit Fasilitas';
        $data['facility'] = $this->Facility_model->getById($id);

        $this->load->view('templates/admin/header', $data);
        $this->load->view('templates/admin/sidebar', $data);
        $this->load->view('templates/admin/navbar', $data);
        $this->load->view('admin/facilities/edit', $data);
        $this->load->view('templates/admin/footer', $data);
    }

    public function update($id)
    {
        if (!$this->session->userdata('logged_in')) redirect('auth');

        $this->form_validation->set_rules('name', 'Nama Fasilitas', 'required|trim');
        $this->form_validation->set_rules('short_description', 'Deskripsi Singkat', 'required|trim');
        $this->form_validation->set_rules('description', 'Deskripsi Lengkap', 'required|trim');
        $this->form_validation->set_rules('status', 'Status', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->edit($id);
            return;
        }

        $slug = url_title($this->input->post('name', TRUE), 'dash', TRUE);

        $data = [
            'name'              => $this->input->post('name', TRUE),
            'slug'              => $slug,
            'short_description' => $this->input->post('short_description', TRUE),
            'description'       => $this->input->post('description', TRUE),
            'status'            => $this->input->post('status', TRUE),
            'updated_at'        => date('Y-m-d H:i:s')
        ];

        // Cek jika ada upload gambar baru
        $config['upload_path']   = './uploads/facilities/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size']      = 2048;
        $this->load->library('upload', $config);

        if ($this->upload->do_upload('image')) {
            $old_facility = $this->Facility_model->getById($id);
            if (!empty($old_facility->image) && file_exists('./uploads/facilities/' . $old_facility->image)) {
                @unlink('./uploads/facilities/' . $old_facility->image);
            }
            $uploadData = $this->upload->data();
            $data['image'] = $uploadData['file_name'];
        }

        $this->Facility_model->update($id, $data);
        $this->session->set_flashdata('success', 'Data fasilitas berhasil diupdate.');
        redirect('facilities/admin_index');
    }

    public function delete($id)
    {
        if (!$this->session->userdata('logged_in')) redirect('auth');

        $facility = $this->Facility_model->getById($id);
        if (!empty($facility->image) && file_exists('./uploads/facilities/' . $facility->image)) {
            @unlink('./uploads/facilities/' . $facility->image);
        }

        $this->Facility_model->delete($id);
        $this->session->set_flashdata('success', 'Data fasilitas berhasil dihapus.');
        redirect('facilities/admin_index');
    }
}