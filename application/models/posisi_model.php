<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Posisi_model
 *
 * @author user
 */
class Posisi_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function tampilPosisi($id = null) {
        if ($id) {
            $this->db->where('id_posisi', $id);
            $query = $this->db->get('posisi');
            return $query->row();
        } else {
            $this->db->order_by('id_posisi', 'asc');
            $query = $this->db->get('posisi');
            return $query->result();
        }
    }

    public function tambahPosisi($data) {
        return $this->db->insert('posisi', $data);
    }

    public function ubahPosisi($data, $id) {
        return $this->db->update('posisi', $data, array('id_posisi' => $id));
    }

    function hapusPosisi($id) {
        return $this->db->delete($this->table_name, array('id_posisi' => $id));
    }
    
    public function hitungPosisi(){
        return $this->db->count_all('posisi');
    }

}
