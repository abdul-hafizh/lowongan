<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Jabatan_model
 *
 * @author user
 */
 
class Jabatan_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function getJabatan($id = null) {
        if ($id) {
            $this->db->where('id_posisi', $id);
            $query = $this->db->get('jabatan');
            return $query->row();
        } else {
            $this->db->order_by('id_lowongan', 'asc');
            $query = $this->db->get('jabatan');
            return $query->result();
        }
    }

    public function addJabatan($data) {
        return $this->db->insert('jabatan', $data);
    }

    public function editJabatan($data, $id) {
        return $this->db->update('jabatan', $data, array('id_jabatan' => $id));
    }

    function hapusJabatan($id) {
        return $this->db->delete($this->table_name, array('id_jabatan' => $id));
    }
}
