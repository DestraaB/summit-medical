<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile_model extends CI_Model {
    
    public function get_profile() {
        // Mengambil data dari tabel baru: hospital_profile
        // Jika tabel kosong, kita hindari error dengan mengembalikan object kosong
        $query = $this->db->get_where('hospital_profile', ['id' => 1]);
        if ($query->num_rows() > 0) {
            return $query->row();
        } else {
            return (object) [
                'name' => 'Summit Medical Center',
                'address' => 'Alamat belum diatur',
                'phone' => '-',
                'email' => '-',
                'whatsapp' => '-',
                'google_maps' => ''
            ];
        }
    }

    public function update($data) {
        // Cek dulu apakah data dengan ID 1 sudah ada
        $query = $this->db->get_where('hospital_profile', ['id' => 1]);
        if ($query->num_rows() == 0) {
            $data['id'] = 1;
            return $this->db->insert('hospital_profile', $data);
        } else {
            $this->db->where('id', 1);
            return $this->db->update('hospital_profile', $data);
        }
    }
}