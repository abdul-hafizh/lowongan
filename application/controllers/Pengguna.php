<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pengguna extends CI_Controller {

    var $title = 'Pengguna';

    public function __construct() {
        parent::__construct();

        $this->perusahaan = $this->session->userdata('perusahaan');
        $this->pengguna = $this->session->userdata('pengguna');
        $this->admin = $this->session->userdata('admin');
        if ($this->perusahaan != null)
            redirect(base_url('perusahaan'));
    }

    public function index() {
        $data['title'] = $this->title;

        $datacontent['penggunas'] = $this->Pengguna_model->tampilPengguna();
        $data['content'] = $this->load->view('pengguna/tampil', $datacontent, true);
        $this->load->view('template/home', $data);
    }

    public function daftar() {
        $data['title'] = $this->title;

        $datacontent['provinsis'] = $this->Provinsi_model->tampilProvinsi();
        $data['content'] = $this->load->view('pengguna/daftar', $datacontent, true);
        $this->load->view('template/home', $data);
    }

    public function login() {
        $data['title'] = $this->title;

        $data['content'] = $this->load->view('pengguna/login', null, true);
        $this->load->view('template/home', $data);
    }

    public function ubah($id = null) {
        if (!$id)
            redirect('pengguna');
        $data['title'] = $this->title;

        $datacontent['provinsis'] = $this->Provinsi_model->tampilProvinsi();
        $datacontent['pengguna'] = $this->Pengguna_model->tampilPengguna($id);
        $data['content'] = $this->load->view('pengguna/ubah', $datacontent, true);
        $this->load->view('template/home', $data);
    }

    public function ubah_password() {
        $data['title'] = $this->title;

        $data['content'] = $this->load->view('pengguna/ubah_password', null, true);
        $this->load->view('template/home', $data);
    }

    public function simpan_tambah() {
        $data['nama_pengguna'] = $this->input->post('nama_pengguna');
        $data['email'] = $this->input->post('email');
        $data['password'] = $this->encrypt->encode($this->input->post('password')); // ambil password dan enkrip
        $data['no_telp'] = $this->input->post('no_telp');
        $data['alamat'] = $this->input->post('alamat');
        $data['id_provinsi'] = $this->input->post('id_provinsi');
        $data['gaji_yang_diharapkan'] = $this->input->post('gaji_yang_diharapkan');
        $hasil = $this->Pengguna_model->tambahPengguna($data);
        if ($hasil) {
            $this->session->set_flashdata('success_msg', 'Berhasil Menambah Pengguna');
        } else {
            $this->session->set_flashdata('fail_msg', 'Gagal Menambah Pengguna');
        }
        redirect(base_url("pengguna/login"));
    }

    public function simpan_ubah() {
        $id = $this->input->post('id');
        $data['id_pengguna'] = $this->input->post('id_pengguna');
        $data['nama_pengguna'] = $this->input->post('nama_pengguna');
        $data['email'] = $this->input->post('email');
        $data['no_telp'] = $this->input->post('no_telp');
        $data['alamat'] = $this->input->post('alamat');
        $data['id_provinsi'] = $this->input->post('id_provinsi');
        $data['gaji_yang_diharapkan'] = $this->input->post('gaji_yang_diharapkan');
        $hasil = $this->Pengguna_model->ubahPengguna($data, $id);
        if ($hasil) {
            $this->session->set_flashdata('success_msg', 'Berhasil Mengubah Pengguna');
        } else {
            $this->session->set_flashdata('fail_msg', 'Gagal Mengubah Pengguna');
        }
        redirect(base_url("pengguna"));
    }

    public function cek_login() {
        $data['email'] = $this->input->post('email');
        $data['password'] = $this->input->post('password'); // ambil password dan enkrip
        $pengguna = $this->Pengguna_model->tampilPenggunaByEmail($data['email']);
        if ($this->encrypt->decode($pengguna->password) == $data['password']) {
            $data = array(
                'id_pengguna' => $pengguna->id_pengguna,
                'email' => $pengguna->email,
                'nama_pengguna' => $pengguna->nama_pengguna
            );
            $this->session->set_userdata('pengguna', $data);
            $this->session->unset_userdata('perusahaan', ['id_perusahaan' => null]);
            $this->session->unset_userdata('admin', ['id_admin' => null]);
            redirect(base_url("home"));
        } else {
            $this->session->unset_userdata('pengguna', ['id_pengguna' => null]);
            $this->session->unset_userdata('perusahaan', ['id_perusahaan' => null]);
            $this->session->unset_userdata('admin', ['id_admin' => null]);
            $this->session->set_flashdata('fail_msg', 'Username / Password Salah!');
            redirect(base_url("login"));
        }
        redirect(base_url("pengguna"));
    }

    public function logout() {
        $this->session->unset_userdata('pengguna', ['id_pengguna' => null]);
        $this->session->unset_userdata('perusahaan', ['id_perusahaan' => null]);
        $this->session->unset_userdata('admin', ['id_admin' => null]);
        $this->session->set_flashdata('success_msg', 'Berhasil Logout!');
        redirect(base_url());
    }

    public function simpan_ubah_password() {
        $id = $this->input->post('id');
        $password = $this->input->post('password_lama');
        $password_baru = $this->input->post('password_baru');
        $ulangi_password = $this->input->post('ulangi_password_baru');
        if ($password_baru == $ulangi_password) {
            $hasil = $this->Pengguna_model->ubahPassword($this->encrypt->encode($password_baru), $this->encrypt->encode($password), $id);
            if ($hasil) {
                $this->session->set_flashdata('success_msg', 'Berhasil Mengubah Pengguna');
            } else {
                $this->session->set_flashdata('fail_msg', 'Gagal Mengubah Pengguna');
            }
        } else {
            $this->session->set_flashdata('fail_msg', 'Password Tidak Sama');
        }
        redirect(base_url("pengguna/ubah_password"));
    }

    public function profil() {
        $data['title'] = $this->title;

        $datacontent['pengguna'] = $this->Pengguna_model->tampilPengguna($this->pengguna['id_pengguna']);
        $data['content'] = $this->load->view('pengguna/profil', $datacontent, true);
        $this->load->view('template/home', $data);
    }

}
