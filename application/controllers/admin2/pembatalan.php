<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of pembatalan
 *
 * @author phepen
 */
class pembatalan extends CI_Controller {

    var $totalKembali;
    var $idpembatalan;

    //put your code here
    public function __construct() {
        parent::__construct();
        $this->load->library('auth');
        $this->auth->check_user_authentification();
        $this->load->model('model_join');
        $this->load->helper('string');
        $this->load->helper('date');
        $this->load->model('model_detail_pembatalan');
        $this->load->model('model_pembatalan');
        $this->load->model('model_jadwal_event');
    }

    function index() {
        if ($this->model_join->get_batal_bayar_admin() == FALSE) {
            $data['cek'] = array();
            if ($this->model_join->get_batal_admin() == FALSE) {
                $data['data'] = array();
            } else {
                $data['data'] = $this->model_join->get_batal_admin();
            }
        } else {
            $data['cek'] = $this->model_join->get_batal_bayar_admin();
            if ($this->model_join->get_batal_admin() == FALSE) {
                $data['data'] = array();
            } else {
                $data['data'] = $this->model_join->get_batal_admin();
            }
        }
        $this->load->view('admin2/header');
        $this->load->view('admin2/admin2view/fpembatalan', $data);
        $this->load->view('admin2/footer');
    }

    function batal($id) {
        $data['data'] = $this->model_join->get_nama_event($id);
        $data['cek'] = $this->model_join->get_detail_tagih($id);
        $this->load->view('admin2/header');
        $this->load->view('admin2/admin2view/acaraView/feditpembatalan', $data);
        $this->load->view('admin2/footer');
    }

    function add() {
        $this->idpembatalan = random_string('alnum', 8);
        $datestring = "%Y-%m-%d";
        $time = time();
        $date = mdate($datestring, $time);
        foreach ($this->input->post('cek') as $row) {
            $this->hitungHarga($row);
        }
        $databatal = array(
            'codebatalpembayaran' => $this->idpembatalan,
            'codepembayaran' => $this->input->post('codepembayaran'),
            'tanggal' => $date,
            'jumlah' => $this->totalKembali
        );
        $this->model_pembatalan->add($databatal);
        foreach ($this->input->post('cek') as $row) {
            $this->hitungHarga($row);
            $datadetailbatal = array(
                'codejadwalevent' => $row,
                'codebatalpembayaran' => $this->idpembatalan
            );
            $this->model_detail_pembatalan->add($datadetailbatal);
        }

        $datachange = array(
            'status' => 'batal'
        );
        $this->model_pembatalan->change_status($this->input->post('codepembayaran'), $datachange);
        $this->index();
    }

    function hitungHarga($code) {
        $dataHarga = $this->model_jadwal_event->get_harga($code);

        $this->totalKembali += end($dataHarga);
    }

}

?>
