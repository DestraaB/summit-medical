<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        // Load model user
        $this->load->model('User_model');

        // Load library
        $this->load->library('session');
        $this->load->library('form_validation');
    }

    public function index()
    {
        // Jika sudah login, langsung ke admin
        if ($this->session->userdata('logged_in')) {
            redirect('admin');
        }

        $data['title'] = 'Login';

        $this->load->view('templates/auth/header', $data);
        $this->load->view('auth/login', $data);
        $this->load->view('templates/auth/footer', $data);
    }

    public function login()
    {
        // Jika sudah login
        if ($this->session->userdata('logged_in')) {
            redirect('admin');
        }

        // Validasi email
        $this->form_validation->set_rules(
            'email',
            'Email',
            'required|trim|valid_email'
        );

        // Validasi password
        $this->form_validation->set_rules(
            'password',
            'Password',
            'required|trim'
        );

        // Jika validasi gagal
        if ($this->form_validation->run() == FALSE) {

            $data['title'] = 'Login';

            $this->load->view('templates/auth/header', $data);
            $this->load->view('auth/login', $data);
            $this->load->view('templates/auth/footer', $data);

            return;
        }

        // Ambil data dari form
        $email = $this->input->post('email', TRUE);
        $password = $this->input->post('password');

        // Cari user berdasarkan email
        $user = $this->User_model->getByEmail($email);

        // Jika user tidak ditemukan
        if (!$user) {

            $this->session->set_flashdata(
                'error',
                'Email atau password salah.'
            );

            redirect('auth');
        }

        // Cek password
        if (!password_verify($password, $user->password)) {

            $this->session->set_flashdata(
                'error',
                'Email atau password salah.'
            );

            redirect('auth');
        }

        // Buat session
        $session_data = [
            'user_id'   => $user->id,
            'name'      => $user->name,
            'email'     => $user->email,
            'role'      => $user->role,
            'logged_in' => TRUE
        ];

        $this->session->set_userdata($session_data);

        // Masuk ke admin
        redirect('admin');
    }

    public function logout()
    {
        // Hapus session
        $this->session->sess_destroy();

        // Kembali ke login
        redirect('auth');
    }
    public function bikin_admin()
    {
        // Data akun admin baru
        $data = [
            'name'     => 'Super Admin',
            'email'    => 'admin@summit.com',
            'password' => password_hash('admin123', PASSWORD_DEFAULT) // Password dienkripsi otomatis
        ];

        // Masukkan ke tabel users
        $this->db->insert('users', $data);
        
        echo "<h3>Akun admin baru berhasil dibuat!</h3>";
        echo "Email: <b>admin@summit.com</b><br>";
        echo "Password: <b>admin123</b><br><br>";
        echo "<a href='".base_url('auth')."'>Klik di sini untuk Login</a>";
    }
}