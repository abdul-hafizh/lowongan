<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Admin_model
 *
 * @author user
 */
class Admin_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function tampilAdmin($id = null) {
        if ($id) {
            $this->db->where('id_admin', $id);
            $query = $this->db->get('admin');
            return $query->row();
        } else {
            $this->db->order_by('id_admin');
            $query = $this->db->get('admin');
            return $query->result();
        }
    }

    public function tampilAdminByEmail($email = null) {
        $query = $this->db->query("SELECT * FROM admin WHERE email='$email'");
        return $query->row();
    }

    public function tambahAdmin($data) {
        return $this->db->insert('admin', $data);
    }

    public function ubahAdmin($data, $id) {
        return $this->db->update('admin', $data, array('id_admin' => $id));
    }

    function hapusAdmin($id) {
        return $this->db->delete($this->table_name, array('id_admin' => $id));
    }

    public function ubahPassword($password_baru, $password_lama, $id) {
        return $this->db->update('admin', array('password' => $password_baru), array('id_admin' => $id, 'password' => $password_lama));
    }

}