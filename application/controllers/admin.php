<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        if (!$this->session->userdata('logged_in')) {
            redirect('auth');
        }
    }

    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['user'] = $this->session->userdata();

        // Mengubah 'articles' menjadi 'news' sesuai dengan tabel database yang baru
        $data['total_articles'] = $this->db->count_all('news');

        $this->load->view('templates/admin/header', $data);
        $this->load->view('templates/admin/navbar', $data);
        $this->load->view('admin/dashboard', $data);
        $this->load->view('templates/admin/footer', $data);
    }
}