<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Schedule_model extends CI_Model {
    
    // Mengambil semua jadwal dan digabung (JOIN) dengan tabel dokter untuk mengambil nama dokternya
    public function get_all() {
        $this->db->select('doctor_schedules.*, doctors.name as doctor_name');
        $this->db->from('doctor_schedules');
        $this->db->join('doctors', 'doctors.id = doctor_schedules.doctor_id', 'left');
        $this->db->order_by('doctors.name', 'ASC');
        return $this->db->get()->result();
    }

    // Menambah jadwal baru
    public function insert($data) {
        return $this->db->insert('doctor_schedules', $data);
    }

    // Menghapus jadwal
    public function delete($id) {
        $this->db->where('id', $id);
        return $this->db->delete('doctor_schedules');
    }
}