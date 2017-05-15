<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Jabatan extends CI_Controller {

    public function __construct() {
        parent::__construct();
        
        $this->perusahaan = $this->session->userdata('perusahaan');
        $this->pengguna = $this->session->userdata('pengguna');
        $this->admin = $this->session->userdata('admin');
    }

    public function index() {
        $data['content'] = $this->load->view('jabatan/index', null, true);
        $this->load->view('template/home', $data);
    }

}
