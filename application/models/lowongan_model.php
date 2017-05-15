<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Lowongan_model
 *
 * @author user
 */
class Lowongan_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function tampilLowongan($id = null) {
        if ($id) {
            $query = $this->db->query("SELECT * FROM lowongan l 
                LEFT JOIN perusahaan per ON l.id_perusahaan=per.id_perusahaan
                LEFT JOIN posisi pos ON l.id_posisi=pos.id_posisi
                LEFT JOIN provinsi pro ON l.id_provinsi=pro.id_provinsi
                WHERE id_lowongan=$id");
            return $query->row();
        } else {
            $this->db->order_by('id_lowongan', 'asc');
            $query = $this->db->get('lowongan');
            return $query->result();
        }
    }

    public function tambahLowongan($data) {
        return $this->db->insert('lowongan', $data);
    }

    public function ubahLowongan($data, $id) {
        return $this->db->update('lowongan', $data, array('id_lowongan' => $id));
    }

    function hapusLowongan($id) {
        return $this->db->delete($this->table_name, array('id_lowongan' => $id));
    }

    public function tampilLowonganByPerusahaan($id_perusahaan = null) {
        $query = $this->db->query("SELECT * FROM lowongan l JOIN perusahaan p ON l.id_perusahaan=p.id_perusahaan 
                JOIN provinsi pr ON l.id_provinsi=pr.id_provinsi JOIN posisi pos ON l.id_posisi=pos.id_posisi
                WHERE l.id_perusahaan=$id_perusahaan");
        return $query->result();
    }

    public function tampilLowonganByPengguna($id_pengguna = null) {
        $query = $this->db->query("SELECT * FROM lowongan l LEFT JOIN perusahaan p ON l.id_perusahaan=p.id_perusahaan 
                LEFT JOIN provinsi pr ON l.id_provinsi=pr.id_provinsi LEFT JOIN posisi pos ON l.id_posisi=pos.id_posisi
                WHERE l.id_provinsi = (SELECT id_provinsi FROM pengguna WHERE id_pengguna=$id_pengguna) 
                AND gaji_min <= (SELECT gaji_yang_diharapkan FROM pengguna WHERE id_pengguna=$id_pengguna)
                AND gaji_max >= (SELECT gaji_yang_diharapkan FROM pengguna WHERE id_pengguna=$id_pengguna)");
        return $query->result();
    }

    public function cariLowongan($nama_lowongan, $id_provinsi, $id_posisi, $gaji_yang_diharapkan) {        
        $query = "SELECT * FROM lowongan l JOIN perusahaan p ON l.id_perusahaan=p.id_perusahaan 
                JOIN provinsi pr ON l.id_provinsi=pr.id_provinsi JOIN posisi pos ON l.id_posisi=pos.id_posisi
                WHERE l.nama_lowongan LIKE '%$nama_lowongan%' ";        
        if ($id_provinsi > 0){
            $query .= " AND l.id_provinsi='$id_provinsi' ";
        }        
        if ($id_posisi > 0){
            $query .= " AND l.id_posisi='$id_posisi' ";
        }        
        if ($gaji_yang_diharapkan > 0){            
            $query .= " AND gaji_max>='$gaji_yang_diharapkan'";
        }
        $result = $this->db->query($query);
        return $result->result();
    }
    
    public function hitungLowongan(){
        return $this->db->count_all('lowongan');
    }
}
