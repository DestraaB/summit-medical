<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model
{
    private $table = 'users';

    public function getByEmail($email)
    {
        return $this->db
            ->where('email', $email)
            // ->where('is_active', 1) <--- Baris ini sudah dihapus agar tidak error
            ->get($this->table)
            ->row();
    }

    public function getById($id)
    {
        return $this->db
            ->where('id', $id)
            ->get($this->table)
            ->row();
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
}