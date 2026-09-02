<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Schedule_model extends CI_Model
{
    // =====================================
    // MENGAMBIL SEMUA JADWAL UNTUK PUBLIK
    // =====================================
    public function get_all()
    {
        $this->db->select('
            doctor_schedules.*,
            doctors.name AS doctor_name,
            doctors.photo AS doctor_photo,
            specialties.name AS specialty_name
        ');

        $this->db->from('doctor_schedules');

        // JOIN TABLE DOCTORS
        $this->db->join(
            'doctors',
            'doctors.id = doctor_schedules.doctor_id',
            'left'
        );

        // JOIN TABLE SPECIALTIES
        $this->db->join(
            'specialties',
            'specialties.id = doctors.specialty_id',
            'left'
        );

        // Urutkan berdasarkan nama dokter
        $this->db->order_by('doctors.name', 'ASC');

        return $this->db->get()->result();
    }


    // =====================================
    // MENAMBAH JADWAL
    // =====================================
    public function insert($data)
    {
        return $this->db->insert('doctor_schedules', $data);
    }


    // =====================================
    // MENGHAPUS JADWAL
    // =====================================
    public function delete($id)
    {
        $this->db->where('id', $id);

        return $this->db->delete('doctor_schedules');
    }
}