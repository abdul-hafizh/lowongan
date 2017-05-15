<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Perusahaan extends CI_Controller {
    var $title = 'Perusahaan';

    public function __construct() {
        parent::__construct();
        
        $this->perusahaan = $this->session->userdata('perusahaan');
        $this->pengguna = $this->session->userdata('pengguna');
        $this->admin = $this->session->userdata('pengguna');
    }

    public function index() {
        $data['title'] = $this->title;
        
        if ($this->pengguna){            
            $datacontent['perusahaans'] = $this->Perusahaan_model->tampilPerusahaan();
            $data['content'] = $this->load->view('perusahaan/pengguna/tampil', $datacontent, true);
            $this->load->view('template/home', $data);
        } else {
            $datacontent['perusahaans'] = $this->Perusahaan_model->tampilPerusahaan();
            $data['content'] = $this->load->view('perusahaan/tampil', $datacontent, true);
            $this->load->view('template/home', $data);
        }
        
    }

    public function daftar() {
        $data['title'] = $this->title;
        
        $datacontent['provinsis'] = $this->Provinsi_model->tampilProvinsi();
        $data['content'] = $this->load->view('perusahaan/daftar', $datacontent, true);
        $this->load->view('template/home', $data);
    }

    public function login() {
        $data['title'] = $this->title;

        $data['content'] = $this->load->view('perusahaan/login', null, true);
        $this->load->view('template/home', $data);
    }

    public function ubah($id = null) {
        if (!$id)
            redirect('perusahaan');
        $data['title'] = $this->title;
        
        $datacontent['provinsis'] = $this->Provinsi_model->tampilProvinsi();
        $datacontent['perusahaan'] = $this->Perusahaan_model->tampilPerusahaan($id);
        $data['content'] = $this->load->view('perusahaan/ubah', $datacontent, true);
        $this->load->view('template/home', $data);
    }

    public function hapus($id = null) {
        if (!$id)
            redirect('perusahaan');
    }

    public function simpan_tambah() {
        $data['nama_perusahaan'] = $this->input->post('nama_perusahaan');
        $data['nama_penanggung_jawab'] = $this->input->post('nama_penanggung_jawab');
        $data['email'] = $this->input->post('email');
        $data['password'] = $this->encrypt->encode($this->input->post('password')); // ambil password dan enkrip
        $data['no_telp'] = $this->input->post('no_telp');
        $data['alamat'] = $this->input->post('alamat');
        $data['id_provinsi'] = $this->input->post('id_provinsi');
        $hasil = $this->Perusahaan_model->tambahPerusahaan($data);
        if ($hasil) {
            $this->session->set_flashdata('success_msg', 'Berhasil Menambah Perusahaan');
        } else {
            $this->session->set_flashdata('fail_msg', 'Gagal Menambah Perusahaan');
        }
        redirect(base_url("perusahaan/login"));
    }

    public function simpan_ubah() {
        $id = $this->input->post('id');
        $data['id_perusahaan'] = $this->input->post('id_perusahaan');
        $data['nama_perusahaan'] = $this->input->post('nama_perusahaan');
        $data['nama_penanggung_jawab'] = $this->input->post('nama_penanggung_jawab');
        $data['email'] = $this->input->post('email');
        $data['no_telp'] = $this->input->post('no_telp');
        $data['alamat'] = $this->input->post('alamat');
        $data['id_provinsi'] = $this->input->post('id_provinsi');
        $hasil = $this->Perusahaan_model->ubahPerusahaan($data, $id);
        if ($hasil) {
            $this->session->set_flashdata('success_msg', 'Berhasil Mengubah Perusahaan');
        } else {
            $this->session->set_flashdata('fail_msg', 'Gagal Mengubah Perusahaan');
        }
        redirect(base_url("perusahaan"));
    }

    public function cek_login() {
        $data['email'] = $this->input->post('email');
        $data['password'] = $this->input->post('password'); // ambil password dan enkrip
        $perusahaan = $this->Perusahaan_model->tampilPerusahaanByEmail($data['email']);
        if ($this->encrypt->decode($perusahaan->password)==$data['password']) {
            $data = array(
                'id_perusahaan' => $perusahaan->id_perusahaan,
                'email' => $perusahaan->email,
                'nama_perusahaan' => $perusahaan->nama_perusahaan
            );
            $this->session->set_userdata('perusahaan', $data);
            $this->session->unset_userdata('pengguna', ['id_pengguna' => null]);
            $this->session->unset_userdata('admin', ['id_admin' => null]);
            redirect(base_url("home"));
        } else {
            $this->session->unset_userdata('admin', ['id_admin' => null]);
            $this->session->unset_userdata('pengguna', ['id_pengguna' => null]);
            $this->session->unset_userdata('perusahaan', ['id_perusahaan' => null]);
            $this->session->set_flashdata('fail_msg', 'Username / Password Salah!');
            redirect(base_url("perusahaan/login"));
        }
    }

    public function logout() {
        $this->session->unset_userdata('pengguna', ['id_pengguna' => null]);
        $this->session->unset_userdata('perusahaan', ['id_perusahaan' => null]);
        $this->session->unset_userdata('admin', ['id_admin' => null]);
        $this->session->set_flashdata('success_msg', 'Berhasil Logout!');
        redirect(base_url());
    }

    public function profil() {
        $data['title'] = $this->title;

        $datacontent['perusahaan'] = $this->Perusahaan_model->tampilPerusahaan($this->perusahaan['id_perusahaan']);
        $data['content'] = $this->load->view('perusahaan/profil', $datacontent, true);
        $this->load->view('template/home', $data);
    }

}