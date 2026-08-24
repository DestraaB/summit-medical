<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Doctor_model extends CI_Model
{
    public function getAllDoctors()
    {
        return $this->db
            ->order_by('id', 'DESC')
            ->get('doctors')
            ->result();
    }

    public function getDoctorById($id)
    {
        return $this->db
            ->where('id', $id)
            ->get('doctors')
            ->row();
    }

    public function insertDoctor($data)
    {
        return $this->db->insert('doctors', $data);
    }

    public function updateDoctor($id, $data)
    {
        $this->db->where('id', $id);
        return $this->db->update('doctors', $data);
    }

    public function deleteDoctor($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('doctors');
    }
}