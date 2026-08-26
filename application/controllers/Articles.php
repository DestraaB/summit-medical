<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Articles extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Article_model');
        $this->load->library('session');
    }

    // =========================
    // HAK AKSES: PUBLIC (PENGUNJUNG)
    // =========================
    
    public function index()
    {
        $data['title'] = 'Artikel & Berita Kesehatan - Summit Medical Center';
        $data['articles'] = $this->Article_model->get_all();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar');
        $this->load->view('articles/index', $data);
        $this->load->view('templates/footer');
    }

    public function detail($slug = null)
    {
        if (empty($slug)) {
            show_404();
        }

        $article = $this->Article_model->get_by_slug($slug);

        if (!$article) {
            show_404();
        }

        $data['title'] = $article->title;
        $data['article'] = $article;

        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar');
        $this->load->view('articles/detail', $data);
        $this->load->view('templates/footer');
    }


    // =========================
    // HAK AKSES: ADMIN (PENGELOLA)
    // =========================
    
    public function admin_index()
    {
        if (!$this->session->userdata('logged_in')) {
            redirect('auth');
        }

        $data['title'] = 'Data Artikel';
        $data['articles'] = $this->Article_model->get_all();

        $this->load->view('templates/admin/header', $data);
        $this->load->view('templates/admin/sidebar', $data);
        $this->load->view('templates/admin/navbar', $data);
        $this->load->view('admin/articles/index', $data);
        $this->load->view('templates/admin/footer', $data);
    }

    public function create()
    {
        if (!$this->session->userdata('logged_in')) {
            redirect('auth');
        }

        if ($this->input->method() === 'post') {

            $data = [
                'title'      => $this->input->post('title', TRUE),
                'slug'       => $this->input->post('slug', TRUE),
                'content'    => $this->input->post('content', TRUE),
                'created_at' => date('Y-m-d H:i:s')
            ];

            $this->Article_model->insert($data);
            $this->session->set_flashdata('success', 'Artikel berhasil ditambahkan.');
            redirect('articles/admin_index');
        }

        $data['title'] = 'Tambah Artikel';

        $this->load->view('templates/admin/header', $data);
        $this->load->view('templates/admin/sidebar', $data);
        $this->load->view('templates/admin/navbar', $data);
        $this->load->view('admin/articles/create', $data);
        $this->load->view('templates/admin/footer', $data);
    }

    public function edit($id)
    {
        if (!$this->session->userdata('logged_in')) {
            redirect('auth');
        }

        $article = $this->Article_model->get_by_id($id);

        if (!$article) {
            show_404();
        }

        if ($this->input->method() === 'post') {

            $data = [
                'title'      => $this->input->post('title', TRUE),
                'slug'       => $this->input->post('slug', TRUE),
                'content'    => $this->input->post('content', TRUE),
                'updated_at' => date('Y-m-d H:i:s')
            ];

            $this->Article_model->update($id, $data);
            $this->session->set_flashdata('success', 'Artikel berhasil diupdate.');
            redirect('articles/admin_index');
        }

        $data['title'] = 'Edit Artikel';
        $data['article'] = $article;

        $this->load->view('templates/admin/header', $data);
        $this->load->view('templates/admin/sidebar', $data);
        $this->load->view('templates/admin/navbar', $data);
        $this->load->view('admin/articles/edit', $data);
        $this->load->view('templates/admin/footer', $data);
    }

    public function delete($id)
    {
        if (!$this->session->userdata('logged_in')) {
            redirect('auth');
        }

        $article = $this->Article_model->get_by_id($id);

        if (!$article) {
            show_404();
        }

        $this->Article_model->delete($id);
        $this->session->set_flashdata('success', 'Artikel berhasil dihapus.');
        redirect('articles/admin_index');
    }
}