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
        $this->load->library('form_validation');
        $this->load->model('model_detail_pembatalan');
        $this->load->model('model_pembatalan');
        $this->load->model('model_jadwal_event');
        $this->load->model('model_setting_potongan');
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
        if ($this->model_setting_potongan->get_nominal_by_nama('potongan pembatalan') == TRUE) {
            $potongan = $this->model_setting_potongan->get_nominal_by_nama('potongan pembatalan');
        } else {
            $potongan = 0;
        }

        $b = 0;
        $this->form_validation->set_rules('codepembayaran', 'Full Name', 'required|xss_clean');
        if ($this->form_validation->run() == TRUE) {
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
                'jumlah' => $this->totalKembali * ((100 - $potongan['nominal']) / 100)
            );
            $dataPengeluaran = array(
                'codeuser' => $this->input->post('codeuser'),
                'tanggalkeluar' => $date,
                'nilaikeluar' => $this->totalKembali * ((100 - $potongan['nominal']) / 100)
            );
            $this->model_pembatalan->insert_to_pengeluaran($dataPengeluaran);

            $this->model_pembatalan->add($databatal);
            foreach ($this->input->post('cek') as $row) {
                $b++;
                $this->hitungHarga($row);
                $datadetailbatal = array(
                    'codejadwalevent' => $row,
                    'codebatalpembayaran' => $this->idpembatalan
                );
                $this->model_detail_pembatalan->add($datadetailbatal);
                $databataldetailtagihan = array(
                    'status' => 'batal'
                );

                $this->model_detail_pembatalan->change_status_detail_tagih($this->input->post('codepembayaran'), $row, $databataldetailtagihan);
            }
            if ($this->input->post('jumlahcek') == $b) {
                $datachange = array(
                    'status' => 'batal'
                );
                $this->model_pembatalan->change_status($this->input->post('codepembayaran'), $datachange);
            }
            redirect('admin2/pembatalan');
        } else {
            
        }
        redirect('admin2/pembatalan');
    }

    function hitungHarga($code) {
        $dataHarga = $this->model_jadwal_event->get_harga($code);

        $this->totalKembali += end($dataHarga);
    }

}

?>
