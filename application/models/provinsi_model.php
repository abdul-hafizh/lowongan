<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Provinsi_model
 *
 * @author user
 */
class Provinsi_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function tampilProvinsi($id = null) {
        if ($id) {
            $this->db->where('id_provinsi', $id);
            $query = $this->db->get('provinsi');
            return $query->row();
        } else {
            $this->db->order_by('id_provinsi', 'asc');
            $query = $this->db->get('provinsi');
            return $query->result();
        }
    }

    public function tambahProvinsi($data) {
        return $this->db->insert('provinsi', $data);
    }

    public function ubahProvinsi($data, $id) {
        return $this->db->update('provinsi', $data, array('id_provinsi' => $id));
    }

    function hapusProvinsi($id) {
        return $this->db->delete($this->table_name, array('id_provinsi' => $id));
    }

}
