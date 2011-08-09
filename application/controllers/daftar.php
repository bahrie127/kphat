<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Daftar extends CI_Controller {

    var $codetagihan;
    var $codeuser;
    var $date;
    var $totalTagihan;

    function __construct() {
        parent::__construct();
        $this->load->helper('string');

        $this->load->helper('date');
        $this->load->model('model_user');
        $this->load->model('model_pendaftaran');
        $this->load->model('model_tagihan');
        $this->load->model('model_detail_tagihan');
        $this->load->model('model_join');
        $this->load->model('model_jadwal_event');
        $codetagihan = random_string('alnum', 8);
        $codeuser = random_string('numeric', 8);
    }

    public function index() {
        $data['data'] = $this->model_join->get_jadwal_event();
        $data['cek'] = "";
        $this->load->view('header');
        $this->load->view('utama/page');
        $this->load->view('utama/cont/daftarpeserta', $data);
        $this->load->view('footer');
    }

    function add() {
        $this->codeuser = random_string('numeric', 8);
        $this->codetagihan = random_string('alnum', 8);
        $datestring = "%Y-%m-%d";
        $time = time();
        $date = mdate($datestring, $time);
        $tahunlahir=$this->input->post('tahun');
        $bulanlahir=$this->input->post('bulan');
        $tanggallahir= $this->input->post('tanggal');
        $lahir="$tahunlahir-$bulanlahir-$tanggallahir";
        
       
        $dataUser = array(
            'codeuser' => $this->codeuser,
            'nama' => $this->input->post('name'),
            'alamat' => $this->input->post('alamat'),
            'jeniskelamin' => $this->input->post('ck'),
            'telepon' => $this->input->post('telp'),
            'email' => $this->input->post('email'),
            'tempatlahir' => $this->input->post('tempatlahir'),
            'tanggallahir' => $lahir,
            'pekerjaan' => $this->input->post('pekerjaan'),
            'instansi' => $this->input->post('instansi')
        );
        $this->model_user->add($dataUser);

        
        foreach ($this->input->post('event') as $row) {
            $this->hitungHarga($row);
            $dataPendaftaran = array(
                'codeuser' => $this->codeuser,
                'codejadwalevent' => $row,
                'tanggal' => $date
            );
            $this->model_pendaftaran->add($dataPendaftaran);
        }

        $dataTagihan = array(
            'codepembayaran' => $this->codetagihan,
            'codeuser' => $this->codeuser,
            'status' => "belum",
            'jumlahharga' => $this->totalTagihan
        );


        $this->model_tagihan->add($dataTagihan);
        foreach ($this->input->post('event') as $row) {
            $dataDetailTagihan = array(
                'codepembayaran' => $this->codetagihan,
                'codejadwalevent' => $row
            );
            $this->model_detail_tagihan->add($dataDetailTagihan);
        }
        // 
        $this->konfirmasi();
    }

    function hitungHarga($code) {
        $dataHarga = $this->model_jadwal_event->get_harga($code);
        
        $this->totalTagihan += end($dataHarga);
    }
    
    function konfirmasi(){
        $data['data'] = $this->totalTagihan;
        $data['cek'] = "";
        $this->load->view('header');
        $this->load->view('utama/page');
        $this->load->view('utama/cont/confirmPendaftaran', $data);
        $this->load->view('footer');
    }

}