<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Controller {

    public function __construct()
        {
            parent::__construct();
            $this->load->model('News_model');
            $this->load->helper(['url', 'form']);
            $this->load->library(['session', 'form_validation']);
        }

    // ==========================================
    // BAGIAN PUBLIK (FRONT-END)
    // ==========================================

    // Menampilkan daftar berita di sisi publik
    public function index()
        {
            $data['title'] = 'Berita & Artikel Kesehatan';
            $data['news'] = $this->News_model->get_published_news();

            $this->load->view('templates/header', $data);
            $this->load->view('templates/navbar');
            $this->load->view('news/index', $data); // Buat file view ini nanti
            $this->load->view('templates/footer');
        }

    // Menampilkan detail berita berdasarkan slug
    public function detail($slug = NULL)
        {
            if (empty($slug)) {
                redirect('news');
            }

            $data['news'] = $this->News_model->get_by_slug($slug);

            if (empty($data['news'])) {
                show_404();
            }

            $data['title'] = $data['news']->title;

            $this->load->view('templates/header', $data);
            $this->load->view('templates/navbar');
            $this->load->view('news/detail', $data); // Buat file view ini nanti
            $this->load->view('templates/footer');
        }

        // ==========================================
        // BAGIAN PANEL ADMIN (BACK-END)
        // ==========================================

        // Menampilkan tabel manajemen berita di admin
        public function admin_index()
            {
                if (!$this->session->userdata('logged_in')) {
                    redirect('auth');
                }

                $data['title'] = 'Kelola Berita';
                // Ubah dari 'news' menjadi 'news_list' agar sesuai dengan view admin Anda
                $data['news_list'] = $this->News_model->get_all_news(); 

                $this->load->view('templates/admin/header', $data);
                $this->load->view('templates/admin/sidebar', $data);
                $this->load->view('templates/admin/navbar', $data);
                $this->load->view('admin/news/index', $data);
                $this->load->view('templates/admin/footer', $data);
            }

        // Proses Tambah Berita
        public function store()
        {
            if (!$this->session->userdata('logged_in')) {
                redirect('auth');
            }

            $this->form_validation->set_rules('title', 'Judul Berita', 'required|trim');
            $this->form_validation->set_rules('content', 'Isi Konten', 'required');

            if ($this->form_validation->run() == FALSE) {
                $this->admin_index();
            } else {
                $title = $this->input->post('title', TRUE);
                
                // Konfigurasi Upload Thumbnail (opsional/sesuaikan folder)
                $thumbnail = '';
                if (!empty($_FILES['thumbnail']['name'])) {
                    $config['upload_path']   = './uploads/news/';
                    $config['allowed_types'] = 'jpg|jpeg|png|webp';
                    $config['max_size']      = 2048; // 2MB
                    $config['file_name']     = time();

                    $this->load->library('upload', $config);

                    if ($this->upload->do_upload('thumbnail')) {
                        $thumbnail = $this->upload->data('file_name');
                    }
                }

                $data = [
                    'user_id'      => $this->session->userdata('user_id') ?? 1, // Default ke ID 1 jika session kosong
                    'title'        => $title,
                    'slug'         => url_title($title, 'dash', TRUE), // Membuat slug otomatis
                    'thumbnail'    => $thumbnail,
                    'content'      => $this->input->post('content'),
                    'status'       => $this->input->post('status', TRUE) ?? 'draft',
                    'published_at' => ($this->input->post('status') == 'published') ? date('Y-m-d H:i:s') : NULL,
                    'created_at'   => date('Y-m-d H:i:s')
                ];

                $this->News_model->insert($data);
                $this->session->set_flashdata('success', 'Berita berhasil ditambahkan.');
                redirect('news/admin_index');
            }
        }

        public function create()
    {
        if (!$this->session->userdata('logged_in')) {
            redirect('auth');
        }

        $data['title'] = 'Tambah Berita Baru';

        $this->load->view('templates/admin/header', $data);
        $this->load->view('templates/admin/sidebar', $data);
        $this->load->view('templates/admin/navbar', $data);
        $this->load->view('admin/news/create', $data);
        $this->load->view('templates/admin/footer', $data);
    }

    // Proses Hapus Berita
    public function delete($id)
        {
            if (!$this->session->userdata('logged_in')) {
                redirect('auth');
            }

            // Ambil data untuk hapus file gambar fisiknya jika ada
            $news = $this->News_model->get_by_id($id);
            if ($news && !empty($news->thumbnail)) {
                $file_path = './uploads/news/' . $news->thumbnail;
                if (file_exists($file_path)) {
                    unlink($file_path);
                }
            }

            $this->News_model->delete($id);
            $this->session->set_flashdata('success', 'Berita berhasil dihapus.');
            redirect('news/admin_index');
        }
        public function edit($id)
            {
                if (!$this->session->userdata('logged_in')) {
                    redirect('auth');
                }

                $data['title'] = 'Edit Berita';
                $data['news'] = $this->News_model->get_by_id($id);

                if (empty($data['news'])) {
                    show_404();
                }

                $this->load->view('templates/admin/header', $data);
                $this->load->view('templates/admin/sidebar', $data);
                $this->load->view('templates/admin/navbar', $data);
                $this->load->view('admin/news/edit', $data);
                $this->load->view('templates/admin/footer', $data);
            }

            public function update($id)
                {
                    if (!$this->session->userdata('logged_in')) {
                        redirect('auth');
                    }

                    $title = $this->input->post('title', TRUE);
                    $status = $this->input->post('status', TRUE);
                    $news_data = $this->News_model->get_by_id($id);

                    $thumbnail = $news_data->thumbnail;
                    if (!empty($_FILES['thumbnail']['name'])) {
                        $config['upload_path']   = './uploads/news/';
                        $config['allowed_types'] = 'jpg|jpeg|png|webp';
                        $config['max_size']      = 2048;
                        $config['file_name']     = time();

                        $this->load->library('upload', $config);

                        if ($this->upload->do_upload('thumbnail')) {
                            if (!empty($news_data->thumbnail) && file_exists('./uploads/news/' . $news_data->thumbnail)) {
                                unlink('./uploads/news/' . $news_data->thumbnail);
                            }
                            $thumbnail = $this->upload->data('file_name');
                        }
                    }

                    $published_at = $news_data->published_at;
                    if ($status == 'published' && empty($news_data->published_at)) {
                        $published_at = date('Y-m-d H:i:s');
                    }

                    $data = [
                        'title'        => $title,
                        'slug'         => url_title($title, 'dash', TRUE),
                        'thumbnail'    => $thumbnail,
                        'content'      => $this->input->post('content'),
                        'status'       => $status,
                        'published_at' => $published_at,
                        'updated_at'   => date('Y-m-d H:i:s')
                    ];

                    $this->News_model->update($id, $data);
                    $this->session->set_flashdata('success', 'Berita berhasil diperbarui.');
                    redirect('news/admin_index');
                }
}