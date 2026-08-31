<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Facility_model extends CI_Model
{
    private $table = 'facilities';

    public function getAll()
    {
        return $this->db->get($this->table)->result();
    }

    public function getById($id)
    {
        return $this->db->get_where($this->table, ['id' => $id])->row();
    }

    // Fungsi tambahan jika ingin menampilkan detail berdasarkan Slug di halaman publik
    public function getBySlug($slug)
    {
        return $this->db->get_where($this->table, ['slug' => $slug])->row();
    }

    public function insert($data)
    {
        return $this->db->insert($this->table, $data);
    }

    public function update($id, $data)
    {
        $this->db->where('id', $id);
        return $this->db->update($this->table, $data);
    }

    public function delete($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete($this->table);
    }
}