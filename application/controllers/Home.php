<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    var $title = 'Home';

    public function __construct() {
        parent::__construct();

        $this->perusahaan = $this->session->userdata('perusahaan');
        $this->pengguna = $this->session->userdata('pengguna');
        $this->admin = $this->session->userdata('admin');
    }

    public function index() {
        $data['title'] = $this->title;
        $datacontent['jumlah_pengguna'] = $this->Pengguna_model->hitungPengguna();
        $datacontent['jumlah_perusahaan'] = $this->Perusahaan_model->hitungPerusahaan();
        $datacontent['jumlah_lowongan'] = $this->Lowongan_model->hitungLowongan();
        $datacontent['jumlah_posisi'] = $this->Posisi_model->hitungPosisi();
        if ($this->pengguna) {
            $datacontent['pengguna'] = $this->Pengguna_model->tampilPengguna($this->pengguna['id_pengguna']);
            $data['content'] = $this->load->view('home/tampil', $datacontent, true);
            $this->load->view('template/home', $data);
        } else if ($this->perusahaan) {
            $datacontent['perusahaan'] = $this->Perusahaan_model->tampilPerusahaan($this->perusahaan['id_perusahaan']);
            $data['content'] = $this->load->view('home/tampil', $datacontent, true);
            $this->load->view('template/home', $data);
        } else if ($this->admin) {
            $datacontent['admin'] = $this->Admin_model->tampilAdmin($this->admin['id_admin']);
            $data['content'] = $this->load->view('home/tampil', $datacontent, true);
            $this->load->view('template/home', $data);
        } else {
            $data['content'] = $this->load->view('home/tampil', $datacontent, true);
            $this->load->view('template/home', $data);
        }
    }
}
