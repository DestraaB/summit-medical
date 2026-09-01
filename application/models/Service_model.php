<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Service_model extends CI_Model
{
    // Nama tabel di database Anda
    private $table = 'services'; 

    // Mengambil semua data layanan
    public function get_all()
    {
        return $this->db->get($this->table)->result();
    }

    // Mengambil data spesifik berdasarkan ID (untuk Edit & Hapus)
    public function get_by_id($id)
    {
        return $this->db->get_where($this->table, ['id' => $id])->row();
    }

    // Mengambil data spesifik berdasarkan Slug (untuk halaman detail Publik)
    public function get_by_slug($slug)
    {
        return $this->db->get_where($this->table, ['slug' => $slug])->row();
    }

    // Menyimpan data layanan baru
    public function insert($data)
    {
        return $this->db->insert($this->table, $data);
    }

    // Mengupdate data layanan yang sudah ada
    public function update($id, $data)
    {
        $this->db->where('id', $id);
        return $this->db->update($this->table, $data);
    }

    // Menghapus data layanan
    public function delete($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete($this->table);
    }
}