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
        doctors.name as doctor_name,
        specialties.name as specialty_name
    ');

    $this->db->from('doctor_schedules');

    $this->db->join(
        'doctors',
        'doctors.id = doctor_schedules.doctor_id',
        'left'
    );

    $this->db->join(
        'specialties',
        'specialties.id = doctors.specialty_id',
        'left'
    );

    // Urutkan berdasarkan hari
    $this->db->order_by("
        FIELD(
            doctor_schedules.day,
            'Senin',
            'Selasa',
            'Rabu',
            'Kamis',
            'Jumat',
            'Sabtu',
            'Minggu'
        )
    ", '', FALSE);

    // Jika hari sama, urutkan berdasarkan jam mulai
    $this->db->order_by(
        'doctor_schedules.start_time',
        'ASC'
    );

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