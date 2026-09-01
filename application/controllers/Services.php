<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Services extends CI_Controller {

public function __construct()
    {
        parent::__construct();
        $this->load->model('Service_model');
        $this->load->library('session');
        
        // Menambahkan 'form' ke dalam helper agar fungsi set_value() bisa bekerja
        $this->load->helper(['url', 'text', 'form']); 
    }

    // =========================================
    // HALAMAN UNTUK PENGUNJUNG PUBLIK
    // =========================================
    public function index()
    {
        $data['title'] = 'Layanan - Summit Medical Center';
        $data['services'] = $this->Service_model->get_all();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar');
        $this->load->view('services/index', $data);
        $this->load->view('templates/footer');
    }

    // Mengubah parameter menjadi $slug agar URL lebih SEO Friendly
    public function detail($slug = null)
    {
        if (empty($slug)) {
            show_404();
        }

        $service = $this->Service_model->get_by_slug($slug);

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


    // =========================================
    // HALAMAN UNTUK ADMIN
    // =========================================
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
            // Membuat slug otomatis dari nama layanan
            $slug = url_title($this->input->post('name', TRUE), 'dash', TRUE);

            // Konfigurasi Upload Gambar
            $config['upload_path']   = './uploads/services/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size']      = 2048; // Maksimal 2MB
            $this->load->library('upload', $config);

            $image = null;
            if ($this->upload->do_upload('image')) {
                $uploadData = $this->upload->data();
                $image = $uploadData['file_name'];
            }

            // Menyusun array data sesuai tabel database baru
            $data = [
                'name'              => $this->input->post('name', TRUE),
                'slug'              => $slug,
                'icon'              => $this->input->post('icon', TRUE),
                'image'             => $image,
                'short_description' => $this->input->post('short_description', TRUE),
                'description'       => $this->input->post('description', TRUE),
                'status'            => $this->input->post('status', TRUE),
                'created_at'        => date('Y-m-d H:i:s'),
                'updated_at'        => date('Y-m-d H:i:s')
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
            $slug = url_title($this->input->post('name', TRUE), 'dash', TRUE);

            $data = [
                'name'              => $this->input->post('name', TRUE),
                'slug'              => $slug,
                'icon'              => $this->input->post('icon', TRUE),
                'short_description' => $this->input->post('short_description', TRUE),
                'description'       => $this->input->post('description', TRUE),
                'status'            => $this->input->post('status', TRUE),
                'updated_at'        => date('Y-m-d H:i:s')
            ];

            // Cek jika admin mengupload gambar baru saat Edit
            $config['upload_path']   = './uploads/services/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size']      = 2048;
            $this->load->library('upload', $config);

            if ($this->upload->do_upload('image')) {
                // Hapus gambar lama agar folder tidak penuh
                if (!empty($service->image) && file_exists('./uploads/services/' . $service->image)) {
                    @unlink('./uploads/services/' . $service->image);
                }
                $uploadData = $this->upload->data();
                $data['image'] = $uploadData['file_name'];
            }

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

        // Hapus file gambar fisik sebelum datanya dihapus dari database
        if (!empty($service->image) && file_exists('./uploads/services/' . $service->image)) {
            @unlink('./uploads/services/' . $service->image);
        }

        $this->Service_model->delete($id);
        $this->session->set_flashdata('success', 'Layanan berhasil dihapus.');
        redirect('services/admin_index');
    }
}