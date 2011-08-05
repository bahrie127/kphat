<?php

class Model_join extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function get_data_by_no_sertifikat($no) {
        $this->db->select('sertifikat.nosertifikat, user.nama, user.alamat, user.jeniskelamin, user.email,user.tempatlahir, user.tanggallahir');
        $this->db->from('user');
        $this->db->join('sertifikat', 'user.codeuser=sertifikat.codeuser', 'INNER');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->row_array();
        } else {
            return FALSE;
        }
    }

    function get_jadwal_event() {
        $this->db->select('jadwalevent.codejadwalevent as jadwalevent_codejadwalevent, pemateri.nama as pemateri_nama, tempat.namatempat as tempat_namatempat');

        $this->db->select(',tempat.alamat as tempat_alamat, tempat.telepon as tempat_telepon, event.gambar as event_gambar, event.materi as event_materi, event.praktek as event_praktek');
        $this->db->select(',event.namaevent as event_namaevent, jadwalevent.waktu as jadwalevent_waktu,jadwalevent.harga as jadwalevent_harga');
        $this->db->select(',jadwalevent.tanggal as jadwalevent_tanggal');
        $this->db->from('pemateri');
        $this->db->join('jadwalevent', 'pemateri.codepemateri=jadwalevent.codepemateri', 'INNER');
        $this->db->join('event', 'jadwalevent.codeevent=event.codeivent', 'INNER');
        $this->db->join('tempat', 'jadwalevent.codetempat=tempat.codetempat', 'INNER');
        $this->db->order_by('jadwalevent_tanggal','asc');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return FALSE;
        }
    }

    function get_jadwal_event_admin() {
        $this->db->select('jadwalevent.tanggal as jadwalevent_tanggal, jadwalevent.codejadwalevent as jadwalevent_codejadwalevent');
        $this->db->select(',jadwalevent.harga as jadwalevent_harga,event.namaevent as event_namaevent,pemateri.nama as pemateri_nama');
        $this->db->select(',tempat.namatempat as tempat_namatempat');
        $this->db->from('event');
        $this->db->join('jadwalevent', 'event.codeivent=jadwalevent.codeevent', 'INNER');
        $this->db->join('pemateri', 'jadwalevent.codepemateri=pemateri.codepemateri', 'INNER');
        $this->db->join('tempat', 'jadwalevent.codetempat=tempat.codetempat');
        $this->db->order_by('jadwalevent_tanggal','desc');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return FALSE;
        }
    }

    function get_pendaftar_admin() {
        $this->db->select('pendaftaran.codependaftaran as pendaftaran_codependaftaran,user.nama as user_nama');
        $this->db->select(',event.namaevent as event_namaevent, pendaftaran.tanggal as pendaftaran_tanggal');
        $this->db->from('user');
        $this->db->join('pendaftaran', 'user.codeuser=pendaftaran.codeuser', 'INNER');
        $this->db->join('jadwalevent', 'pendaftaran.codejadwalevent=jadwalevent.codejadwalevent', 'INNER');
        $this->db->join('event', 'jadwalevent.codeevent=event.codeivent');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return FALSE;
        }
    }

    function get_tagih_admin() {
        $this->db->select('tagihan.codepembayaran as tagihan_codepembayaran,tagihan.jumlahharga as tagihan_jumlahharga');
        $this->db->select(',tagihan.status as tagihan_status,user.nama as user_nama');
        $this->db->from('user');
        $this->db->join('tagihan', 'user.codeuser=tagihan.codeuser', 'INNER');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return FALSE;
        }
    }

}

?>