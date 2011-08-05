<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Daftar extends CI_Controller {

    var $codetagihan;
    var $codeuser;
    var $date;

    function __construct() {
        parent::__construct();
        $this->load->helper('string');

        $this->load->helper('date');
        $this->load->model('model_user');
        $this->load->model('model_pendaftaran');
        $this->load->model('model_tagihan');
        $this->load->model('model_detail_tagihan');
        $codetagihan = random_string('alnum', 8);
        $codeuser = random_string('numeric', 8);
    }

    public function index() {
        $this->load->view('header');
        $this->load->view('utama/page');
        $this->load->view('utama/cont/daftarpeserta');
        $this->load->view('footer');
    }

    function add() {
        $this->codeuser = random_string('numeric', 8);
        $this->codetagihan = random_string('alnum', 8);
        $datestring = "%Y-%m-%d";
        $time = time();
        $date = mdate($datestring, $time);
        $dataUser = array(
            'codeuser' => $this->codeuser,
            'nama' => $this->input->post('name'),
            'alamat' => $this->input->post('alamat'),
            'jeniskelamin' => $this->input->post('ck'),
            'telepon' => $this->input->post('telp'),
            'email' => $this->input->post('email'),
            'tempatlahir' => $this->input->post('tempatlahir'),
            'tanggallahir' => $this->input->post('tanggal') + "-" + $this->input->post('bulan') + "-" + $this->input->post('tahun'),
            'pekerjaan' => $this->input->post('pekerjaan'),
            'instansi' => $this->input->post('instansi')
        );
        $this->model_user->add($dataUser);
        $dataTagihan = array(
            'codepembayaran' => $this->codetagihan,
            'codeuser' => $this->codeuser,
            'status' => "belum",
            'jumlahharga' => "5000000"
        );



        foreach ($this->input->post('event') as $row) {
            $dataPendaftaran = array(
                'codeuser' => $this->codeuser,
                'codejadwalevent' => $row,
                'tanggal' => $date
            );
            $this->model_pendaftaran->add($dataPendaftaran);
        }


        $this->model_tagihan->add($dataTagihan);
        foreach ($this->input->post('event') as $row) {
            $dataDetailTagihan = array(
                'codepembayaran' => $this->codetagihan,
                'codejadwalevent' => $row
            );
            $this->model_detail_tagihan->add($dataDetailTagihan);
        }
        // 
        $this->index();
    }

    function hitungHarga() {
        
    }

}