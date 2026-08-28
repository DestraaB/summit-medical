<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Schedule extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Schedule_model');
        $this->load->model('Doctor_model'); // Load model dokter untuk mengambil daftar dokter
        $this->load->library('session');
    }

    // =====================================
    // HALAMAN PUBLIK (Pengunjung)
    // =====================================
    public function index()
    {
        $data['title'] = 'Jadwal Praktik Dokter - Summit Medical Center';
        $data['schedules'] = $this->Schedule_model->get_all();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar');
        $this->load->view('schedule/index', $data); // Tampilan publik
        $this->load->view('templates/footer');
    }

    // =====================================
    // HALAMAN ADMIN
    // =====================================
    public function admin_index()
    {
        if (!$this->session->userdata('logged_in')) { redirect('auth'); }

        $data['title'] = 'Kelola Jadwal Dokter';
        $data['schedules'] = $this->Schedule_model->get_all();
        // Menggunakan getAllDoctors() sesuai dengan perbaikan kita sebelumnya
        $data['doctors'] = $this->Doctor_model->getAllDoctors(); 

        // Jika form tambah jadwal disubmit
        if ($this->input->method() === 'post') {
            $insert_data = [
                'doctor_id'  => $this->input->post('doctor_id', TRUE),
                'day'        => $this->input->post('day', TRUE),
                'start_time' => $this->input->post('start_time', TRUE),
                'end_time'   => $this->input->post('end_time', TRUE)
            ];
            $this->Schedule_model->insert($insert_data);
            $this->session->set_flashdata('success', 'Jadwal praktik berhasil ditambahkan.');
            redirect('schedule/admin_index');
        }

        $this->load->view('templates/admin/header', $data);
        $this->load->view('templates/admin/sidebar', $data);
        $this->load->view('templates/admin/navbar', $data);
        $this->load->view('admin/schedules/index', $data);
        $this->load->view('templates/admin/footer', $data);
    }

    public function delete($id)
    {
        if (!$this->session->userdata('logged_in')) { redirect('auth'); }
        $this->Schedule_model->delete($id);
        $this->session->set_flashdata('success', 'Jadwal berhasil dihapus.');
        redirect('schedule/admin_index');
    }
}