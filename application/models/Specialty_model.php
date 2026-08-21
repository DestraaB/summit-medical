<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Specialty_model extends CI_Model
{
    public function getAllSpecialties()
    {
        return $this->db
            ->where('status', 1)
            ->order_by('id', 'ASC')
            ->get('specialties')
            ->result();
    }

    public function getSpecialtyById($id)
    {
        return $this->db
            ->where('id', $id)
            ->where('status', 1)
            ->get('specialties')
            ->row();
    }
}