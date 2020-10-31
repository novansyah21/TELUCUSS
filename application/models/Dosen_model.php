<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Dosen_model extends CI_Model
{

    // public function index()
    // {
    // }
    public function daftar_dosen()
    {
        $query = "SELECT * FROM dosen WHERE id_status = 2 ";
        $sql = $this->db->query($query);
        return $sql->result_array();
    }

    public function daftar_dosenbaru()
    {
        $query = "SELECT * FROM dosen WHERE id_status = 1 ";
        $sql = $this->db->query($query);
        return $sql->result_array();
    }

    public function dosenBynip($nip)
    {
        $query = 'SELECT * FROM dosen WHERE nip = ' . $nip;
        $sql = $this->db->query($query)->row_array();
        return $sql;
    }

    public function additionalBynip($nip)
    {
        $query = 'SELECT * FROM dosen_additional WHERE nip = ' . $nip;
        $sql = $this->db->query($query)->row_array();
        return $sql;
    }

    public function hapus_dosen($nip)
    {
        $this->db->delete('dosen', ['nip' => $nip]);
    }

    public function acc_dosen($nip)
    {
        $query = "UPDATE dosen SET
        id_status = 2
        WHERE nip = $nip
        ";
        // var_dump($query);exit;
        $sql = $this->db->query($query);
    }

    function updateDosen($post, $nip)
    {
        $nip                = $this->db->escape($_POST['nip']);
        $jab_fungsional     = $this->db->escape($_POST['jab_fungsional']);
        $jab_struktural     = $this->db->escape($_POST['jab_struktural']);
        $kota_asal          = $this->db->escape($_POST['kota_asal']);
        $tanggal_lahir      = $this->db->escape($_POST['tanggal_lahir']);
        $alamat             = $this->db->escape($_POST['alamat']);
        $no_telp            = $this->db->escape($_POST['no_telp']);
        $query = "UPDATE dosen_additional SET
                    nip             = $nip,
                    jab_fungsional  = $jab_fungsional,
                    jab_struktural  = $jab_struktural,
                    kota_asal       = $kota_asal,
                    tanggal_lahir   = $tanggal_lahir,
                    alamat          = $alamat,
                    no_telp         = $no_telp
                    ";
        $sql = $this->db->query($query);
    }
}
