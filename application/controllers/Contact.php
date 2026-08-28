<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Profile_model'); // Model untuk info alamat & telepon
        $this->load->model('Contact_message_model');
        $this->load->library('session');
        $this->load->library('form_validation');
    }

    // =====================================
    // HALAMAN PUBLIK
    // =====================================
    public function index()
    {
        // Atur aturan form
        $this->form_validation->set_rules('name', 'Nama', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('message', 'Pesan', 'required');

        if ($this->form_validation->run() == FALSE) {
            $data['title'] = 'Hubungi Kami - Summit Medical Center';
            $data['profile'] = $this->Profile_model->get_profile();

            $this->load->view('templates/header', $data);
            $this->load->view('templates/navbar');
            $this->load->view('contact/index', $data);
            $this->load->view('templates/footer');
        } else {
            // Jika form diisi dan valid, simpan ke database
            $data = [
                'name' => $this->input->post('name', TRUE),
                'email' => $this->input->post('email', TRUE),
                'subject' => $this->input->post('subject', TRUE),
                'message' => $this->input->post('message', TRUE),
                'status' => 'unread',
                'created_at' => date('Y-m-d H:i:s')
            ];

            $this->Contact_message_model->insert($data);
            $this->session->set_flashdata('success_msg', 'Terima kasih! Pesan Anda berhasil dikirim dan akan segera kami proses.');
            redirect('contact');
        }
    }

    // =====================================
    // HALAMAN ADMIN
    // =====================================
    public function admin_index()
    {
        if (!$this->session->userdata('logged_in')) { redirect('auth'); }

        $data['title'] = 'Pesan Masuk dari Pengunjung';
        $data['messages'] = $this->Contact_message_model->get_all();

        $this->load->view('templates/admin/header', $data);
        $this->load->view('templates/admin/sidebar', $data);
        $this->load->view('templates/admin/navbar', $data);
        $this->load->view('admin/contact/messages', $data);
        $this->load->view('templates/admin/footer');
    }

    public function detail($id)
    {
        if (!$this->session->userdata('logged_in')) { redirect('auth'); }

        $message = $this->Contact_message_model->get_by_id($id);
        if (!$message) { show_404(); }

        // Jika statusnya masih unread, otomatis ubah jadi read saat admin membukanya
        if ($message->status == 'unread') {
            $this->Contact_message_model->update_status($id, 'read');
            $message->status = 'read'; 
        }

        $data['title'] = 'Detail Pesan';
        $data['message'] = $message;

        $this->load->view('templates/admin/header', $data);
        $this->load->view('templates/admin/sidebar', $data);
        $this->load->view('templates/admin/navbar', $data);
        $this->load->view('admin/contact/detail', $data);
        $this->load->view('templates/admin/footer');
    }

    public function mark_replied($id)
    {
        if (!$this->session->userdata('logged_in')) { redirect('auth'); }
        
        $this->Contact_message_model->update_status($id, 'replied');
        $this->session->set_flashdata('success', 'Pesan ditandai sebagai telah dibalas.');
        redirect('contact/detail/' . $id);
    }

    public function delete($id)
    {
        if (!$this->session->userdata('logged_in')) { redirect('auth'); }
        
        $this->Contact_message_model->delete($id);
        $this->session->set_flashdata('success', 'Pesan berhasil dihapus.');
        redirect('contact/admin_index');
    }
}