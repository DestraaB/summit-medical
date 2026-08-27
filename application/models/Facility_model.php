<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Facility_model extends CI_Model {
    public function get_all() {
        return $this->db->get('facilities')->result();
    }

    public function get_active() {
        return $this->db->get_where('facilities', ['status' => 1])->result();
    }

    public function get_by_id($id) {
        return $this->db->get_where('facilities', ['id' => $id])->row();
    }

    public function get_by_slug($slug) {
        return $this->db->get_where('facilities', ['slug' => $slug, 'status' => 1])->row();
    }

    public function insert($data) {
        return $this->db->insert('facilities', $data);
    }

    public function update($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update('facilities', $data);
    }

    public function delete($id) {
        $this->db->where('id', $id);
        return $this->db->delete('facilities');
    }
}