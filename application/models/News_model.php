<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News_model extends CI_Model {
    
    // Ambil semua berita untuk tabel Admin
    public function get_all() {
        $this->db->select('news.*, users.name as author_name');
        $this->db->from('news');
        $this->db->join('users', 'users.id = news.user_id', 'left');
        $this->db->order_by('news.created_at', 'DESC');
        return $this->db->get()->result();
    }

    // Ambil HANYA berita yang statusnya 'published' untuk halaman Publik
    public function get_published() {
        $this->db->select('news.*, users.name as author_name');
        $this->db->from('news');
        $this->db->join('users', 'users.id = news.user_id', 'left');
        $this->db->where('news.status', 'published');
        $this->db->order_by('news.published_at', 'DESC');
        return $this->db->get()->result();
    }

    // Ambil detail berita berdasarkan URL (slug)
    public function get_by_slug($slug) {
        $this->db->select('news.*, users.name as author_name');
        $this->db->from('news');
        $this->db->join('users', 'users.id = news.user_id', 'left');
        $this->db->where('news.slug', $slug);
        return $this->db->get()->row();
    }

    // Ambil data untuk diedit oleh admin
    public function get_by_id($id) {
        return $this->db->get_where('news', ['id' => $id])->row();
    }

    public function insert($data) {
        return $this->db->insert('news', $data);
    }

    public function update($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update('news', $data);
    }

    public function delete($id) {
        $this->db->where('id', $id);
        return $this->db->delete('news');
    }
}