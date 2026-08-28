<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact_message_model extends CI_Model {
    
    // Menyimpan pesan baru dari publik
    public function insert($data) {
        return $this->db->insert('contact_messages', $data);
    }

    // Mengambil semua pesan untuk admin (urut terbaru)
    public function get_all() {
        $this->db->order_by('created_at', 'DESC');
        return $this->db->get('contact_messages')->result();
    }

    // Ambil detail pesan
    public function get_by_id($id) {
        return $this->db->get_where('contact_messages', ['id' => $id])->row();
    }

    // Update status (unread, read, replied)
    public function update_status($id, $status) {
        $this->db->where('id', $id);
        return $this->db->update('contact_messages', ['status' => $status]);
    }

    // Hapus pesan
    public function delete($id) {
        $this->db->where('id', $id);
        return $this->db->delete('contact_messages');
    }
}