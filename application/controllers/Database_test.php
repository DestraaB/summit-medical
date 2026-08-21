<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Database_test extends CI_Controller
{
    public function index()
    {
        $this->load->database();

        if ($this->db->conn_id) {
            echo "Koneksi database berhasil!";
        } else {
            echo "Koneksi database gagal!";
        }
    }
}