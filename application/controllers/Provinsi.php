<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Provinsi extends CI_Controller {
    var $title = 'Provinsi';

    public function __construct() {
        parent::__construct();
        
        $this->perusahaan = $this->session->userdata('perusahaan');
        $this->pengguna = $this->session->userdata('pengguna');
        $this->admin = $this->session->userdata('admin');
    }

    public function index() {
        $data['title'] = $this->title;
        
        $datacontent['provinsis'] = $this->Provinsi_model->tampilProvinsi();
        $data['content'] = $this->load->view('provinsi/tampil', $datacontent, true);
        $this->load->view('template/home', $data);
    }

    public function tambah() {
        $data['title'] = $this->title;
        $data['content'] = $this->load->view('provinsi/tambah', null, true);
        $this->load->view('template/home', $data);
    }

    public function ubah($id = null) {
        if (!$id)
            redirect('provinsi');
        $data['title'] = $this->title;
        
        $datacontent['provinsi'] = $this->Provinsi_model->tampilProvinsi($id);
        $data['content'] = $this->load->view('provinsi/ubah', $datacontent, true);
        $this->load->view('template/home', $data);
    }

    public function hapus($id = null) {
        if (!$id)
            redirect('provinsi');
    }

    public function simpan_tambah() {
        $data['nama_provinsi'] = $this->input->post('nama_provinsi');
        $hasil = $this->Provinsi_model->tambahProvinsi($data);
        if ($hasil) {
            $this->session->set_flashdata('success_msg', 'Berhasil Menambah Provinsi');
        } else {
            $this->session->set_flashdata('fail_msg', 'Gagal Menambah Provinsi');
        }
        redirect(base_url("provinsi"));
    }

    public function simpan_ubah() {
        $id = $this->input->post('id');
        $data['id_provinsi'] = $this->input->post('id_provinsi');
        $data['nama_provinsi'] = $this->input->post('nama_provinsi');
        $hasil = $this->Provinsi_model->ubahProvinsi($data, $id);
        if ($hasil) {
            $this->session->set_flashdata('success_msg', 'Berhasil Mengubah Provinsi');
        } else {
            $this->session->set_flashdata('fail_msg', 'Gagal Mengubah Provinsi');
        }
        redirect(base_url("provinsi"));
    }

}
