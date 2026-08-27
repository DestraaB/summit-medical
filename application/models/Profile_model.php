<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile_model extends CI_Model {
    
    public function get_profile() {
        return $this->db->get_where('profile', ['id' => 1])->row();
    }

    public function update_profile($data) {
        $this->db->where('id', 1);
        return $this->db->update('profile', $data);
    }
}