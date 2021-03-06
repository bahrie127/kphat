<?php

class Model_join extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->helper('date');
    }

    function get_data_by_no_sertifikat($no) {
        $this->db->select('sertifikat.codesertifikat as sertifikat_codesertifikat,sertifikat.nosertifikat as sertifikat_nosertifikat,user.nama as user_nama,user.alamat as user_alamat');
        $this->db->select(',user.jeniskelamin as user_jeniskelamin,user.email as user_email,user.tempatlahir as user_tempatlahir,user.tanggallahir as user_tanggallahir, event.namaevent as event_namaevent,jadwalevent.codejadwalevent as jadwalevent_codejadwalevent,jadwalevent.tanggal as jadwalevent_tanggal');
        $this->db->from('user');
        $this->db->join('sertifikat', 'user.codeuser=sertifikat.codeuser', 'INNER');
        $this->db->join('jadwalevent', 'sertifikat.codejadwalevent=jadwalevent.codejadwalevent', 'INNER');
        $this->db->join('event', 'jadwalevent.codeevent=event.codeivent', 'INNER');

        $this->db->like('sertifikat.nosertifikat', $no);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return null;
        }
    }

    function get_all_sertifikat() {
        $this->db->select('sertifikat.codesertifikat as sertifikat_codesertifikat,sertifikat.nosertifikat as sertifikat_nosertifikat,user.nama as user_nama,user.alamat as user_alamat');
        $this->db->select(',user.jeniskelamin as user_jeniskelamin,user.email as user_email,user.tempatlahir as user_tempatlahir,user.tanggallahir as user_tanggallahir, event.namaevent as event_namaevent,jadwalevent.codejadwalevent as jadwalevent_codejadwalevent,jadwalevent.tanggal as jadwalevent_tanggal');
        $this->db->from('user');
        $this->db->join('sertifikat', 'user.codeuser=sertifikat.codeuser', 'INNER');
        $this->db->join('jadwalevent', 'sertifikat.codejadwalevent=jadwalevent.codejadwalevent', 'INNER');
        $this->db->join('event', 'jadwalevent.codeevent=event.codeivent', 'INNER');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return FALSE;
        }
    }

    function get_jadwal_event() {

        $datestring = "%Y-%m-%d";
        $time = time();
        $date = mdate($datestring, $time);

        if ($this->db->get('jadwalevent')->num_rows() >= 4) {
            $this->db->select('jadwalevent.codejadwalevent as jadwalevent_codejadwalevent,jadwalevent.codenamaevent as jadwalevent_codenamaevent, pemateri.nama as pemateri_nama, tempat.namatempat as tempat_namatempat');

            $this->db->select(',tempat.alamat as tempat_alamat, tempat.telepon as tempat_telepon, event.gambar as event_gambar, event.materi as event_materi, event.praktek as event_praktek');
            $this->db->select(',event.namaevent as event_namaevent, jadwalevent.waktu as jadwalevent_waktu,jadwalevent.harga as jadwalevent_harga');
            $this->db->select(',jadwalevent.tanggal as jadwalevent_tanggal');
            $this->db->from('pemateri');
            $this->db->join('jadwalevent', 'pemateri.codepemateri=jadwalevent.codepemateri', 'INNER');
            $this->db->join('event', 'jadwalevent.codeevent=event.codeivent', 'INNER');
            $this->db->join('tempat', 'jadwalevent.codetempat=tempat.codetempat', 'INNER');
            $this->db->order_by('jadwalevent.tanggal', 'asc');
            $this->db->where('jadwalevent.tanggal >', $date);
            $query = $this->db->get();
            if ($query->num_rows() > 0) {
                return $query->result();
            } else {
                return FALSE;
            }
        } else {
            $this->db->select('jadwalevent.codejadwalevent as jadwalevent_codejadwalevent,jadwalevent.codenamaevent as jadwalevent_codenamaevent, pemateri.nama as pemateri_nama, tempat.namatempat as tempat_namatempat');

            $this->db->select(',tempat.alamat as tempat_alamat, tempat.telepon as tempat_telepon, event.gambar as event_gambar, event.materi as event_materi, event.praktek as event_praktek');
            $this->db->select(',event.namaevent as event_namaevent, jadwalevent.waktu as jadwalevent_waktu,jadwalevent.harga as jadwalevent_harga');
            $this->db->select(',jadwalevent.tanggal as jadwalevent_tanggal');
            $this->db->from('pemateri');
            $this->db->join('jadwalevent', 'pemateri.codepemateri=jadwalevent.codepemateri', 'INNER');
            $this->db->join('event', 'jadwalevent.codeevent=event.codeivent', 'INNER');
            $this->db->join('tempat', 'jadwalevent.codetempat=tempat.codetempat', 'INNER');
            $this->db->order_by('jadwalevent_tanggal', 'desc');
            //$this->db->limit(1,4,'desc');
            $query = $this->db->get();
            if ($query->num_rows() > 0) {
                return $query->result();
            } else {
                return FALSE;
            }
        }
    }

    function get_jadwal_event_admin() {
        $this->db->select('jadwalevent.tanggal as jadwalevent_tanggal,jadwalevent.codenamaevent as jadwalevent_codenamaevent, jadwalevent.codejadwalevent as jadwalevent_codejadwalevent');
        $this->db->select(',jadwalevent.harga as jadwalevent_harga,event.namaevent as event_namaevent,pemateri.nama as pemateri_nama');
        $this->db->select(',tempat.namatempat as tempat_namatempat,jadwalevent.waktu as jadwalevent_waktu');
        $this->db->from('event');
        $this->db->join('jadwalevent', 'event.codeivent=jadwalevent.codeevent', 'INNER');
        $this->db->join('pemateri', 'jadwalevent.codepemateri=pemateri.codepemateri', 'INNER');
        $this->db->join('tempat', 'jadwalevent.codetempat=tempat.codetempat');
        $this->db->order_by('jadwalevent_tanggal', 'desc');
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
        $this->db->select('tagihan.codepembayaran as tagihan_codepembayaran,tagihan.jumlahharga as tagihan_jumlahharga,tagihan.bayar as tagihan_bayar');
        $this->db->select(',tagihan.tanggal as tagihan_tanggal,tagihan.status as tagihan_status,user.nama as user_nama,user.codeuser as user_codeuser');
        //  $this->db->select(',batalpembayaran.jumlah as batalpembayaran_jumlah');
        $this->db->from('user');
        $this->db->join('tagihan', 'user.codeuser=tagihan.codeuser', 'INNER');
        //$this->db->join('batalpembayaran','tagihan.codepembayaran=batalpembayaran.codepembayaran','INNER');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return FALSE;
        }
    }

    function get_batal_bayar_admin() {
        $this->db->select('tagihan.codepembayaran as tagihan_codepembayaran,tagihan.jumlahharga as tagihan_jumlahharga');
        $this->db->select(',tagihan.tanggal as tagihan_tanggal,tagihan.status as tagihan_status,user.nama as user_nama,user.codeuser as user_codeuser');
        //  $this->db->select(',batalpembayaran.jumlah as batalpembayaran_jumlah');
        $this->db->from('user');
        $this->db->join('tagihan', 'user.codeuser=tagihan.codeuser', 'INNER');
        //$this->db->join('batalpembayaran','tagihan.codepembayaran=batalpembayaran.codepembayaran','INNER');
        $this->db->where('tagihan.status', 'bayar');

        $this->db->or_where('tagihan.status', 'batal');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return FALSE;
        }
    }

    function get_batal_admin() {
        $this->db->select('tagihan.codepembayaran as tagihan_codepembayaran,');
        $this->db->select(',user.nama as user_nama,user.codeuser as user_codeuser');
        $this->db->select(',batalpembayaran.jumlah as batalpembayaran_jumlah');
        $this->db->from('user');
        $this->db->join('tagihan', 'user.codeuser=tagihan.codeuser', 'INNER');
        $this->db->join('batalpembayaran', 'tagihan.codepembayaran=batalpembayaran.codepembayaran', 'INNER');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return FALSE;
        }
    }

    function get_peserta($id) {
        $this->db->select('user.nama as user_nama, user.alamat as user_alamat,user.email as user_email, tagihan.status as tagihan_status, event.namaevent as event_namaevent,pendaftaran.tanggal as pendaftaran_tanggal');
        $this->db->from('user');
        $this->db->join('tagihan', 'tagihan.codeuser=user.codeuser', 'INNER');
        $this->db->join('detailtagihan', 'tagihan.codepembayaran=detailtagihan.codepembayaran', 'INNER');
        $this->db->join('jadwalevent', 'detailtagihan.codejadwalevent=jadwalevent.codejadwalevent', 'INNER');
        $this->db->join('event', 'jadwalevent.codeevent=event.codeivent', 'INNER');
        $this->db->join('pendaftaran', 'jadwalevent.codejadwalevent=pendaftaran.codejadwalevent AND user.codeuser=pendaftaran.codeuser', 'INNER');
        $this->db->where('jadwalevent.codejadwalevent', $id);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return FALSE;
        }
    }

    function get_all_peserta() {
//        $this->db->select('user.nama as user_nama, user.alamat as user_alamat,user.email as user_email,user.telepon as user_telepon, tagihan.status as tagihan_status, event.namaevent as event_namaevent,pendaftaran.tanggal as pendaftaran_tanggal, jadwalevent.codejadwalevent as jadwalevent_codejadwalevent');
//        $this->db->from('user');
//        $this->db->join('tagihan', 'tagihan.codeuser=user.codeuser', 'INNER');
//      
//        $this->db->join('jadwalevent', 'detailtagihan.codejadwalevent=jadwalevent.codejadwalevent', 'INNER');
//        $this->db->join('event', 'jadwalevent.codeevent=event.codeivent', 'INNER');
//        $this->db->join('pendaftaran', 'jadwalevent.codejadwalevent=pendaftaran.codejadwalevent AND user.codeuser=pendaftaran.codeuser', 'INNER');
//         $this->db->select('event.namaevent as event_namaevent,jadwalevent.codejadwalevent as jadwalevent_codejadwalevent, user.nama as user_nama,user.codeuser as user_codeuser, user.alamat as user_alamat, user.telepon as user_telepon, user.email as user_email');
        $this->db->select('event.namaevent as event_namaevent,jadwalevent.codejadwalevent as jadwalevent_codejadwalevent, user.nama as user_nama,user.codeuser as user_codeuser, user.alamat as user_alamat, user.telepon as user_telepon, user.email as user_email');
        $this->db->from('user');
        $this->db->join('pendaftaran', 'pendaftaran.codeuser=user.codeuser', 'INNER');
        $this->db->join('jadwalevent', 'pendaftaran.codejadwalevent=jadwalevent.codejadwalevent', 'INNER');

        $this->db->join('event', 'jadwalevent.codeevent=event.codeivent', 'INNER');
        //$this->db->where('jadwalevent.codejadwalevent', $id);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return FALSE;
        }
    }

    function get_nama_event($id) {
        $this->db->select('user.nama as user_nama,user.codeuser as user_codeuser,tagihan.codepembayaran as tagihan_codepembayaran');
        $this->db->from('user');

        $this->db->join('tagihan', 'user.codeuser=tagihan.codeuser', 'INNER');
        $this->db->where('tagihan.codepembayaran', $id);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return FALSE;
        }
    }

    function get_detail_tagih($id) {
        $batal = "ikut";
        $this->db->select('user.codeuser as user_codeuser,event.namaevent as event_namaevent,jadwalevent.codejadwalevent as jadwalevent_codejadwalevent');
        $this->db->from('tagihan');
        $this->db->join('user', 'tagihan.codeuser=user.codeuser', 'INNER');
        $this->db->join('detailtagihan', 'tagihan.codepembayaran=detailtagihan.codepembayaran', 'INNER');
        $this->db->join('jadwalevent', 'jadwalevent.codejadwalevent=detailtagihan.codejadwalevent', 'INNER');
        $this->db->join('event', 'jadwalevent.codeevent=event.codeivent');
        $this->db->where('tagihan.codepembayaran', $id);
        $this->db->where('detailtagihan.status', $batal);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return FALSE;
        }
    }

    function get_peserta_by_event($code) {
        $this->db->select('event.namaevent as event_namaevent,jadwalevent.codejadwalevent as jadwalevent_codejadwalevent, user.nama as user_nama,user.codeuser as user_codeuser, user.alamat as user_alamat, user.telepon as user_telepon, user.email as user_email');
        $this->db->from('user');
        $this->db->join('pendaftaran', 'pendaftaran.codeuser=user.codeuser', 'INNER');
        $this->db->join('jadwalevent', 'pendaftaran.codejadwalevent=jadwalevent.codejadwalevent', 'INNER');

        $this->db->join('event', 'jadwalevent.codeevent=event.codeivent', 'INNER');

        $this->db->where('jadwalevent.codejadwalevent', $code);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return FALSE;
        }
    }

    function get_peserta_by_code_jadwal($code) {
        $this->db->select('user.nama as user_nama,user.telepon as user_telepon,event.namaevent as event_namaevent,pendaftaran.tanggal as pendaftaran_tanggal,user.alamat as user_alamat,user.email as user_email,tagihan.status as tagihan_status,jadwalevent.codejadwalevent as jadwalevent_codejadwalevent');
        $this->db->from('user');
        $this->db->join('tagihan', 'user.codeuser=tagihan.codeuser', 'INNER');
        $this->db->join('pendaftaran', 'user.codeuser=pendaftaran.codeuser', 'INNER');
        $this->db->join('jadwalevent', 'pendaftaran.codejadwalevent=jadwalevent.codejadwalevent', 'INNER');
        $this->db->join('event', 'jadwalevent.codeevent=event.codeivent', 'INNER');
        $this->db->where('jadwalevent.codejadwalevent', $code);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return FALSE;
        }
    }

}

?>
