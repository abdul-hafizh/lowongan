<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Perusahaan_model
 *
 * @author user
 */
class Perusahaan_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function tampilPerusahaan($id = null) {
        if ($id) {
            $this->db->where('id_perusahaan', $id);
            $query = $this->db->query("SELECT * FROM perusahaan p 
                LEFT JOIN provinsi pr ON p.id_provinsi=pr.id_provinsi
                WHERE id_perusahaan=$id");
            return $query->row();
        } else {
            $query = $this->db->query('SELECT * FROM perusahaan p 
                LEFT JOIN provinsi pr ON p.id_provinsi=pr.id_provinsi 
                ORDER BY p.id_perusahaan');
            return $query->result();
        }
    }

    public function tampilPerusahaanByEmail($email = null) {
        $query = $this->db->query("SELECT * FROM perusahaan WHERE email='$email'");
        return $query->row();
    }

    public function tambahPerusahaan($data) {
        return $this->db->insert('perusahaan', $data);
    }

    public function ubahPerusahaan($data, $id) {
        return $this->db->update('perusahaan', $data, array('id_perusahaan' => $id));
    }

    function hapusPerusahaan($id) {
        return $this->db->delete($this->table_name, array('id_perusahaan' => $id));
    }
    
    function hitungPerusahaan(){
        return $this->db->count_all('perusahaan');
    }

}