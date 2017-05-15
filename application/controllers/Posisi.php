<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Posisi extends CI_Controller {
    var $title = 'Posisi';

    public function __construct() {
        parent::__construct();
        
        $this->perusahaan = $this->session->userdata('perusahaan');
        $this->pengguna = $this->session->userdata('pengguna');
        $this->admin = $this->session->userdata('admin');
    }

    public function index() {
        $data['title'] = $this->title;
        
        $datacontent['posisis'] = $this->Posisi_model->tampilPosisi();
        $data['content'] = $this->load->view('posisi/tampil', $datacontent, true);
        $this->load->view('template/home', $data);
    }

    public function tambah() {
        $data['title'] = $this->title;
        $data['content'] = $this->load->view('posisi/tambah', null, true);
        $this->load->view('template/home', $data);
    }

    public function ubah($id = null) {
        if (!$id)
            redirect('posisi');
        $data['title'] = $this->title;
        
        $datacontent['posisi'] = $this->Posisi_model->tampilPosisi($id);
        $data['content'] = $this->load->view('posisi/ubah', $datacontent, true);
        $this->load->view('template/home', $data);
    }

    public function hapus($id = null) {
        if (!$id)
            redirect('posisi');
    }

    public function simpan_tambah() {
        $data['nama_posisi'] = $this->input->post('nama_posisi');
        $hasil = $this->Posisi_model->tambahPosisi($data);
        if ($hasil) {
            $this->session->set_flashdata('success_msg', 'Berhasil Menambah Posisi');
        } else {
            $this->session->set_flashdata('fail_msg', 'Gagal Menambah Posisi');
        }
        redirect(base_url("posisi"));
    }

    public function simpan_ubah() {
        $id = $this->input->post('id');
        $data['id_posisi'] = $this->input->post('id_posisi');
        $data['nama_posisi'] = $this->input->post('nama_posisi');
        $hasil = $this->Posisi_model->ubahPosisi($data, $id);
        if ($hasil) {
            $this->session->set_flashdata('success_msg', 'Berhasil Mengubah Posisi');
        } else {
            $this->session->set_flashdata('fail_msg', 'Gagal Mengubah Posisi');
        }
        redirect(base_url("posisi"));
    }

}
