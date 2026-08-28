<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Profile_model');
        $this->load->library('session');
    }

    public function index()
    {
        $data['title'] = 'Tentang Kami - Summit Medical Center';
        $data['profile'] = $this->Profile_model->get_profile();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar');
        $this->load->view('about/index', $data);
        $this->load->view('templates/footer');
    }

    public function admin_index()
    {
        // Pengecekan login
        if (!$this->session->userdata('logged_in')) {
            redirect('auth');
        }

        $data['title'] = 'Kelola Profil & Kontak';
        $data['profile'] = $this->Profile_model->get_profile();

        // Jika form disubmit
        if ($this->input->method() === 'post') {
            
            // Kita sesuaikan nama kolomnya dengan struktur tabel hospital_profile
            $update_data = [
                'name'        => $this->input->post('name', TRUE), // Opsional jika ingin ganti nama RS
                'description' => $this->input->post('description', TRUE), // Menggantikan about_text
                'history'     => $this->input->post('history', TRUE), // Tambahan untuk halaman About
                'vision'      => $this->input->post('vision', TRUE),
                'mission'     => $this->input->post('mission', TRUE),
                'address'     => $this->input->post('address', TRUE),
                'phone'       => $this->input->post('phone', TRUE),
                'whatsapp'    => $this->input->post('whatsapp', TRUE),
                'email'       => $this->input->post('email', TRUE),
                'google_maps' => $this->input->post('google_maps', TRUE)
            ];

            // Panggil fungsi update() dari Profile_model
            $this->Profile_model->update($update_data);
            
            $this->session->set_flashdata('success', 'Data profil rumah sakit berhasil diperbarui.');
            redirect('about/admin_index');
        }

        // Tampilan Admin
        $this->load->view('templates/admin/header', $data);
        $this->load->view('templates/admin/sidebar', $data);
        $this->load->view('templates/admin/navbar', $data);
        $this->load->view('admin/about/index', $data);
        $this->load->view('templates/admin/footer', $data);
    }
}