<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Specialty_model extends CI_Model
{
    private $table = 'specialties';

    // Digunakan oleh public controller & admin
    public function getAllSpecialties()
    {
        return $this->db->order_by('name', 'ASC')->get($this->table)->result();
    }

    // Digunakan oleh public controller (detail)
    public function getSpecialtyById($id)
    {
        return $this->db->get_where($this->table, ['id' => $id])->row();
    }

    // Digunakan untuk Admin (Tambah)
    public function insert($data)
    {
        return $this->db->insert($this->table, $data);
    }

    // Digunakan untuk Admin (Hapus)
    public function delete($id)
    {
        return $this->db->delete($this->table, ['id' => $id]);
    }
}