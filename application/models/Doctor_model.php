<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Doctor_model extends CI_Model
{
    private $table = 'doctors';

    public function getAllDoctors()
    {
        $this->db->select('
            doctors.*,
            specialties.name AS specialty_name
        ');

        $this->db->from($this->table);

        $this->db->join(
            'specialties',
            'specialties.id = doctors.specialty_id',
            'left'
        );

        $this->db->order_by('doctors.id', 'DESC');

        return $this->db->get()->result();
    }


    public function getDoctorById($id)
    {
        $this->db->select('
            doctors.*,
            specialties.name AS specialty_name
        ');

        $this->db->from($this->table);

        $this->db->join(
            'specialties',
            'specialties.id = doctors.specialty_id',
            'left'
        );

        $this->db->where('doctors.id', $id);

        return $this->db->get()->row();
    }


    public function insertDoctor($data)
    {
        return $this->db->insert($this->table, $data);
    }


    public function updateDoctor($id, $data)
    {
        $this->db->where('id', $id);

        return $this->db->update($this->table, $data);
    }


    public function deleteDoctor($id)
    {
        $this->db->where('id', $id);

        return $this->db->delete($this->table);
    }
}