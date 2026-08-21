<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Articles extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('Article_model');
    }

    // =========================
    // ADMIN - DAFTAR ARTIKEL
    // =========================
    public function index()
    {
        $data['title'] = 'Artikel';
        $data['articles'] = $this->Article_model->get_all();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar');
        $this->load->view('articles/index', $data);
        $this->load->view('templates/footer');
    }


    // =========================
    // ADMIN - TAMBAH ARTIKEL
    // =========================
    public function create()
    {
        if ($this->input->method() === 'post') {

            $data = [
                'title'      => $this->input->post('title', TRUE),
                'slug'       => $this->input->post('slug', TRUE),
                'content'    => $this->input->post('content', TRUE),
                'created_at' => date('Y-m-d H:i:s')
            ];

            $this->Article_model->insert($data);

            redirect('articles');
        }

        $data['title'] = 'Tambah Artikel';

        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar');
        $this->load->view('articles/create', $data);
        $this->load->view('templates/footer');
    }


    // =========================
    // ADMIN - EDIT ARTIKEL
    // =========================
    public function edit($id)
    {
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

            redirect('articles');
        }

        $data['title'] = 'Edit Artikel';
        $data['article'] = $article;

        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar');
        $this->load->view('articles/edit', $data);
        $this->load->view('templates/footer');
    }


    // =========================
    // ADMIN - HAPUS ARTIKEL
    // =========================
    public function delete($id)
    {
        $article = $this->Article_model->get_by_id($id);

        if (!$article) {
            show_404();
        }

        $this->Article_model->delete($id);

        redirect('articles');
    }


    // =========================
    // FRONTEND - DETAIL ARTIKEL
    // =========================
    public function detail($slug)
    {
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
}