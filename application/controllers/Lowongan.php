<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Lowongan extends CI_Controller {

    var $title = 'Lowongan';

    public function __construct() {
        parent::__construct();
//        if (!$this->session->userdata('perusahaan')) {
//            $this->session->set_flashdata('info_msg', 'Harap Login Terlebih Dahulu!');
//            redirect('login');
//        }
        $this->perusahaan = $this->session->userdata('perusahaan');
        $this->pengguna = $this->session->userdata('pengguna');
        $this->admin = $this->session->userdata('admin');
    }

    public function index() {
        $data['title'] = $this->title;

        if ($this->perusahaan) {
            $datacontent['lowongans'] = $this->Lowongan_model->tampilLowonganByPerusahaan($this->perusahaan['id_perusahaan']);
            $data['content'] = $this->load->view('lowongan/perusahaan/tampil', $datacontent, true);
            $this->load->view('template/home', $data);
        } else if ($this->pengguna) {
            $datacontent['lowongans'] = $this->Lowongan_model->tampilLowonganByPengguna($this->pengguna['id_pengguna']);
            $data['content'] = $this->load->view('lowongan/pengguna/tampil', $datacontent, true);
            $this->load->view('template/home', $data);
        } else {
            redirect();
        }
    }

    public function tambah() {
        $data['title'] = $this->title;

        if ($this->perusahaan) {
            $datacontent['posisis'] = $this->Posisi_model->tampilPosisi();
            $datacontent['provinsis'] = $this->Provinsi_model->tampilProvinsi();
            $data['content'] = $this->load->view('lowongan/perusahaan/tambah', $datacontent, true);
            $this->load->view('template/home', $data);
        } else {
            redirect();
        }
    }

    public function ubah($id = null) {
        if (!$id)
            redirect('lowongan');
        $data['title'] = $this->title;

        $datacontent['posisis'] = $this->Posisi_model->tampilPosisi();
        $datacontent['provinsis'] = $this->Provinsi_model->tampilProvinsi();
        $datacontent['lowongan'] = $this->Lowongan_model->tampilLowongan($id);
        $data['content'] = $this->load->view('lowongan/perusahaan/ubah', $datacontent, true);
        $this->load->view('template/home', $data);
    }

    public function hapus($id = null) {
        if (!$id)
            redirect('lowongan');
    }

    public function simpan_tambah() {
        if ($this->perusahaan == null)
            redirect();

        $data['nama_lowongan'] = $this->input->post('nama_lowongan');
        $data['id_perusahaan'] = $this->perusahaan['id_perusahaan'];
        $data['id_provinsi'] = $this->input->post('id_provinsi');
        $data['id_posisi'] = $this->input->post('id_posisi');
        $data['tanggal_post'] = date('Y-m-d');
        $data['tanggal_kedaluwarsa'] = date('y-m-d', strtotime('+1 month'));
        $data['gaji_min'] = $this->input->post('gaji_min');
        $data['gaji_max'] = $this->input->post('gaji_max');
        $data['persyaratan'] = $this->input->post('persyaratan');
        $data['deskripsi'] = $this->input->post('deskripsi');
        $hasil = $this->Lowongan_model->tambahLowongan($data);
        if ($hasil) {
            $this->session->set_flashdata('success_msg', 'Berhasil Menambah Lowongan');
        } else {
            $this->session->set_flashdata('fail_msg', 'Gagal Menambah Lowongan');
        }
        redirect(base_url("lowongan"));
    }

    public function simpan_ubah() {
        $id = $this->input->post('id');
        $data['id_lowongan'] = $this->input->post('id_lowongan');
        $data['nama_lowongan'] = $this->input->post('nama_lowongan');
        $data['id_perusahaan'] = $this->perusahaan['id_perusahaan'];
        $data['id_provinsi'] = $this->input->post('id_provinsi');
        $data['id_posisi'] = $this->input->post('id_posisi');
        $data['gaji_min'] = $this->input->post('gaji_min');
        $data['gaji_max'] = $this->input->post('gaji_max');
        $data['persyaratan'] = $this->input->post('persyaratan');
        $data['deskripsi'] = $this->input->post('deskripsi');
        $hasil = $this->Lowongan_model->ubahLowongan($data, $id);
        if ($hasil) {
            $this->session->set_flashdata('success_msg', 'Berhasil Mengubah Lowongan');
        } else {
            $this->session->set_flashdata('fail_msg', 'Gagal Mengubah Lowongan');
        }
        redirect(base_url("lowongan"));
    }

    public function cari() {
        $data['title'] = $this->title;


        $datacontent['posisis'] = $this->Posisi_model->tampilPosisi();
        $datacontent['provinsis'] = $this->Provinsi_model->tampilProvinsi();
        $data['content'] = $this->load->view('lowongan/cari', $datacontent, true);
        $this->load->view('template/home', $data);
    }

    public function hasil_cari() {
        $data['title'] = $this->title;

        $nama_lowongan = $this->input->post('nama_lowongan');
        $id_provinsi = $this->input->post('id_provinsi');
        $id_posisi = $this->input->post('id_posisi');
        $gaji_yang_diharapkan = $this->input->post('gaji_yang_diharapkan');
        $datacontent['lowongans'] = $this->Lowongan_model->cariLowongan($nama_lowongan, $id_provinsi, $id_posisi, $gaji_yang_diharapkan);

        $data['content'] = $this->load->view('lowongan/hasil_cari', $datacontent, true);
        $this->load->view('template/home', $data);
    }

    public function detail($id = null) {
        if ($id == null)
            redirect();

        $data['title'] = $this->title;

        $datacontent['lowongan'] = $this->Lowongan_model->tampilLowongan($id);

        $data['content'] = $this->load->view('lowongan/detail', $datacontent, true);
        $this->load->view('template/home', $data);
    }

    public function berdasarkan_perusahaan($id = null) {
        if ($id == null)
            redirect();

        $data['title'] = $this->title;

        $datacontent['lowongans'] = $this->Lowongan_model->tampilLowonganByPerusahaan($id);
        $data['content'] = $this->load->view('lowongan/berdasarkan_perusahaan', $datacontent, true);
        $this->load->view('template/home', $data);
    }

}
