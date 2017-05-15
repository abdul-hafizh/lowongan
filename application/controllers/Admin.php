<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    var $title = 'Admin';

    public function __construct() {
        parent::__construct();
        
        $this->perusahaan = $this->session->userdata('perusahaan');
        $this->pengguna = $this->session->userdata('pengguna');
        $this->admin = $this->session->userdata('admin');
        if ($this->perusahaan != null) redirect ('perusahaan');
    }

    public function index() {
        if ($this->admin==null) redirect ('admin/login');
        
        $data['title'] = $this->title;

        $datacontent['admins'] = $this->Admin_model->tampilAdmin();
        $data['content'] = $this->load->view('admin/tampil', $datacontent, true);
        $this->load->view('template/home', $data);
    }

    public function tambah() {
        if ($this->admin==null) redirect ('admin/login');
        
        $data['title'] = $this->title;
        
        $data['content'] = $this->load->view('admin/tambah', null, true);
        $this->load->view('template/home', $data);
    }

    public function login() {
        $this->session->unset_userdata('admin', ['id_admin' => null]);
        $this->session->unset_userdata('perusahaan', ['id_perusahaan' => null]);
        $this->session->unset_userdata('pengguna', ['id_pengguna' => null]);
        
        $data['title'] = $this->title;

        $data['content'] = $this->load->view('admin/login', null, true);
        $this->load->view('template/home', $data);
    }

    public function ubah($id = null) {
        if ($this->admin==null) redirect ('admin/login');
        
        if (!$id) redirect();
        
        $data['title'] = $this->title;

        $datacontent['admin'] = $this->Admin_model->tampilAdmin($id);
        $data['content'] = $this->load->view('admin/ubah', $datacontent, true);
        $this->load->view('template/home', $data);
    }

    public function ubah_password() {
        if ($this->admin==null) redirect ('admin/login');
        
        $data['title'] = $this->title;

        $data['content'] = $this->load->view('admin/ubah_password', null, true);
        $this->load->view('template/home', $data);
    }

    public function simpan_tambah() {
        if ($this->admin==null) redirect ('admin/login');
        
        $data['nama_admin'] = $this->input->post('nama_admin');
        $data['email'] = $this->input->post('email');
        $data['password'] = $this->encrypt->encode($this->input->post('password')); // ambil password dan enkrip
        $hasil = $this->Admin_model->tambahAdmin($data);
        if ($hasil) {
            $this->session->set_flashdata('success_msg', 'Berhasil Menambah Admin');
        } else {
            $this->session->set_flashdata('fail_msg', 'Gagal Menambah Admin');
        }
        redirect(base_url("admin"));
    }

    public function simpan_ubah() {
        if ($this->admin==null) redirect ('admin/login');
        
        $id = $this->input->post('id');
        $data['id_admin'] = $this->input->post('id_admin');
        $data['nama_admin'] = $this->input->post('nama_admin');
        $data['email'] = $this->input->post('email');
        $hasil = $this->Admin_model->ubahAdmin($data, $id);
        if ($hasil) {
            $this->session->set_flashdata('success_msg', 'Berhasil Mengubah Admin');
        } else {
            $this->session->set_flashdata('fail_msg', 'Gagal Mengubah Admin');
        }
        redirect(base_url("admin"));
    }

    public function cek_login() {
        $data['email'] = $this->input->post('email');
        $data['password'] = $this->input->post('password'); // ambil password dan enkrip
        $admin = $this->Admin_model->tampilAdminByEmail($data['email']);
        if ($this->encrypt->decode($admin->password)==$data['password']) {
            $data = array(
                'id_admin' => $admin->id_admin,
                'email' => $admin->email,
                'nama_admin' => $admin->nama_admin
            );
            $this->session->set_userdata('admin', $data);
            $this->session->unset_userdata('perusahaan', ['id_perusahaan' => null]);
            redirect(base_url("home"));
        } else {
            $this->session->unset_userdata('admin', ['id_admin' => null]);
            $this->session->unset_userdata('perusahaan', ['id_perusahaan' => null]);
        $this->session->unset_userdata('pengguna', ['id_pengguna' => null]);
            $this->session->set_flashdata('fail_msg', 'Username / Password Salah!');
//            redirect(base_url("admin/login"));
        }
    }

    public function logout() {
        $this->session->unset_userdata('admin', ['id_admin' => null]);
        $this->session->unset_userdata('perusahaan', ['id_perusahaan' => null]);
        $this->session->unset_userdata('pengguna', ['id_pengguna' => null]);
        $this->session->set_flashdata('success_msg', 'Berhasil Logout!');
        redirect(base_url());
    }

    public function simpan_ubah_password() {
        if ($this->admin==null) redirect ('admin/login');
        
        $id = $this->input->post('id');
        $password = $this->input->post('password_lama');
        $password_baru = $this->input->post('password_baru');
        $ulangi_password = $this->input->post('ulangi_password_baru');
        if ($password_baru == $ulangi_password) {
            $hasil = $this->Admin_model->ubahPassword($this->encrypt->encode($password_baru), $this->encrypt->encode($password), $id);
            if ($hasil) {
                $this->session->set_flashdata('success_msg', 'Berhasil Mengubah Admin');
            } else {
                $this->session->set_flashdata('fail_msg', 'Gagal Mengubah Admin');
            }
        } else {
            $this->session->set_flashdata('fail_msg', 'Password Tidak Sama');
        }
        redirect(base_url("admin/ubah_password"));
    }

}
