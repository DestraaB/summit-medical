<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Service_model extends CI_Model
{
    private $table = 'services';

    public function get_all()
    {
        return $this->db
            ->order_by('id', 'ASC')
            ->get($this->table)
            ->result();
    }

    public function get_latest($limit = 3)
    {
        return $this->db
            ->order_by('id', 'ASC')
            ->limit($limit)
            ->get($this->table)
            ->result();
    }

    public function get_by_id($id)
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

    public function delete($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete($this->table);
    }
}