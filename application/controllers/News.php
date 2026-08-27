<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('News_model');
        $this->load->library('session');
        $this->load->helper('url');
    }

    // ==========================================
    // 1. BAGIAN PUBLIK (PENGUNJUNG)
    // ==========================================
    
    public function index() {
        $data['title'] = 'Berita & Informasi - Summit Medical Center';
        $data['news_list'] = $this->News_model->get_published();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar');
        $this->load->view('news/index', $data);
        $this->load->view('templates/footer');
    }

    public function detail($slug = null) {
        if (empty($slug)) { show_404(); }
        
        $news = $this->News_model->get_by_slug($slug);
        if (!$news) { show_404(); }

        $data['title'] = $news->title;
        $data['news'] = $news;

        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar');
        $this->load->view('news/detail', $data);
        $this->load->view('templates/footer');
    }


    // ==========================================
    // 2. BAGIAN ADMIN (PENGELOLA)
    // ==========================================
    
    public function admin_index() {
        if (!$this->session->userdata('logged_in')) { redirect('auth'); }

        $data['title'] = 'Data Berita & Artikel';
        $data['news_list'] = $this->News_model->get_all();

        $this->load->view('templates/admin/header', $data);
        $this->load->view('templates/admin/sidebar', $data);
        $this->load->view('templates/admin/navbar', $data);
        $this->load->view('admin/news/index', $data);
        $this->load->view('templates/admin/footer');
    }

    public function create() {
        if (!$this->session->userdata('logged_in')) { redirect('auth'); }

        if ($this->input->method() === 'post') {
            $title = $this->input->post('title', TRUE);
            $status = $this->input->post('status', TRUE);
            
            $data = [
                // Mengambil ID dari session, default 1 jika belum ada
                'user_id' => $this->session->userdata('id') ?? 1, 
                'title' => $title,
                'slug' => url_title($title, 'dash', TRUE),
                'content' => $this->input->post('content'),
                'status' => $status,
                'published_at' => ($status === 'published') ? date('Y-m-d H:i:s') : NULL,
                'created_at' => date('Y-m-d H:i:s')
            ];

            $this->News_model->insert($data);
            $this->session->set_flashdata('success', 'Berita berhasil ditambahkan.');
            redirect('news/admin_index');
        }

        $data['title'] = 'Tambah Berita';
        $this->load->view('templates/admin/header', $data);
        $this->load->view('templates/admin/sidebar', $data);
        $this->load->view('templates/admin/navbar', $data);
        $this->load->view('admin/news/create', $data);
        $this->load->view('templates/admin/footer');
    }

    public function edit($id) {
        if (!$this->session->userdata('logged_in')) { redirect('auth'); }

        $news = $this->News_model->get_by_id($id);
        if (!$news) { show_404(); }

        if ($this->input->method() === 'post') {
            $title = $this->input->post('title', TRUE);
            $status = $this->input->post('status', TRUE);
            
            $data = [
                'title' => $title,
                'slug' => url_title($title, 'dash', TRUE),
                'content' => $this->input->post('content'),
                'status' => $status,
                'updated_at' => date('Y-m-d H:i:s')
            ];

            // Jika status diubah jadi published dan tanggal publish masih kosong, isi dengan tanggal sekarang
            if ($status === 'published' && empty($news->published_at)) {
                $data['published_at'] = date('Y-m-d H:i:s');
            }

            $this->News_model->update($id, $data);
            $this->session->set_flashdata('success', 'Berita berhasil diperbarui.');
            redirect('news/admin_index');
        }

        $data['title'] = 'Edit Berita';
        $data['news'] = $news;
        $this->load->view('templates/admin/header', $data);
        $this->load->view('templates/admin/sidebar', $data);
        $this->load->view('templates/admin/navbar', $data);
        $this->load->view('admin/news/edit', $data);
        $this->load->view('templates/admin/footer');
    }

    public function delete($id) {
        if (!$this->session->userdata('logged_in')) { redirect('auth'); }
        
        $this->News_model->delete($id);
        $this->session->set_flashdata('success', 'Berita berhasil dihapus.');
        redirect('news/admin_index');
    }
}