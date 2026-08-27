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
        if (!$this->session->userdata('logged_in')) {
            redirect('auth');
        }

        $data['title'] = 'Kelola About & Kontak';
        $data['profile'] = $this->Profile_model->get_profile();

        if ($this->input->method() === 'post') {
            $update_data = [
                'about_text' => $this->input->post('about_text', TRUE),
                'vision'     => $this->input->post('vision', TRUE),
                'mission'    => $this->input->post('mission', TRUE),
                'phone'      => $this->input->post('phone', TRUE),
                'email'      => $this->input->post('email', TRUE),
                'address'    => $this->input->post('address', TRUE)
            ];

            $this->Profile_model->update_profile($update_data);
            $this->session->set_flashdata('success', 'Data profil berhasil diperbarui.');
            redirect('about/admin_index');
        }

        $this->load->view('templates/admin/header', $data);
        $this->load->view('templates/admin/sidebar', $data);
        $this->load->view('templates/admin/navbar', $data);
        $this->load->view('admin/about/index', $data);
        $this->load->view('templates/admin/footer', $data);
    }
}