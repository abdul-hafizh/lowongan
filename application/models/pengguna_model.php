<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Pengguna_model
 *
 * @author user
 */
class Pengguna_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function tampilPengguna($id = null) {
        if ($id) {
            $query = $this->db->query("SELECT * FROM pengguna p 
                    LEFT JOIN provinsi pr ON p.id_provinsi=pr.id_provinsi
                    WHERE id_pengguna=$id");
            return $query->row();
        } else {
            $query = $this->db->query('SELECT * FROM pengguna p 
                    LEFT JOIN provinsi pr ON p.id_provinsi=pr.id_provinsi 
                    ORDER BY p.id_pengguna');
            return $query->result();
        }
    }

    public function tampilPenggunaByEmail($email = null) {
        $query = $this->db->query("SELECT * FROM pengguna WHERE email='$email'");
        return $query->row();
    }

    public function tambahPengguna($data) {
        return $this->db->insert('pengguna', $data);
    }

    public function ubahPengguna($data, $id) {
        return $this->db->update('pengguna', $data, array('id_pengguna' => $id));
    }

    function hapusPengguna($id) {
        return $this->db->delete($this->table_name, array('id_pengguna' => $id));
    }

    public function ubahPassword($password_baru, $password_lama, $id) {
        return $this->db->update('pengguna', array('password' => $password_baru), array('id_pengguna' => $id, 'password' => $password_lama));
    }
    
    public function hitungPengguna(){
        return $this->db->count_all('pengguna');
    }

}