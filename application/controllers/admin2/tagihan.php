<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of tagihan
 *
 * @author phepen
 */
class Tagihan extends CI_Controller {

    //put your code here
    public function __construct() {
        parent::__construct();
        $this->load->library('auth');
        $this->auth->check_user_authentification();
        $this->load->model('model_join');
        $this->load->helper('date');
        $this->load->model('model_tagihan');
        $this->load->library('form_validation');
    }

    function index() {
        if ($this->model_join->get_tagih_admin() == FALSE) {
            $data['data'] = array();
        } else {
            $data['data'] = $this->model_join->get_tagih_admin();
        }
        $data['status']='';
        $this->load->view('admin2/header');
        $this->load->view('admin2/admin2view/ftagihan', $data);
        $this->load->view('admin2/footer');
    }

    function update() {
        $codeadmin = $this->session->userdata('SESS_ADMIN_CODE');
        $namaadmin = $this->session->userdata('SESS_NAME');
        $this->form_validation->set_rules('kurang', 'Full Name', 'required|xss_clean');
        if ($this->form_validation->run() == TRUE) {

            $datestring = "%Y-%m-%d";
            $time = time();
            $kurang = $this->input->post('kurang');
            $bayar = $this->input->post('bayar');
            $status = $this->input->post('status');
            $dp = $this->input->post('dp');
            $date = mdate($datestring, $time);
            if($kurang<$bayar){
                $status="invalid, bayar tidak boleh lebih dari harga";
                $data['data'] = $this->model_join->get_tagih_admin();
                $data['status']=$status;
            $this->load->view('admin2/admin2view/acaraView/showtabletagihan', $data);
                
            }else{
            if ($status == "dp") {
                if ($kurang == $bayar) {
                    $data = array(
                        'status' => "bayar",
                        'bayar' => $dp + $bayar,
                        'tanggal' => $date,
                        'codeadmin' => $codeadmin
                    );
                } else {
                    $data = array(
                        'status' => "dp",
                        'bayar' => $dp + $bayar,
                        'tanggal' => $date,
                        'codeadmin' => $codeadmin
                    );
                }
            } else {
                if ($kurang == $bayar) {
                    $data = array(
                        'status' => "bayar",
                        'bayar' => $kurang,
                        'tanggal' => $date,
                        'codeadmin' => $codeadmin
                    );
                } else {
                    $data = array(
                        'status' => "dp",
                        'bayar' => $bayar,
                        'tanggal' => $date,
                        'codeadmin' => $codeadmin
                    );
                }
            }
            $dataPemasukan = array(
                'codeuser' => $this->input->post('codeuser'),
                'tanggalmasuk' => $date,
                'nilaimasuk' => $bayar,
                'namaadmin' => $namaadmin
            );
            $this->model_tagihan->insert_to_pemasukan($dataPemasukan);

            $id = $this->input->post('id');
            $this->model_tagihan->update_data($id, $data);
            $data['data'] = $this->model_join->get_tagih_admin();
                 $data['status']='';
            $this->load->view('admin2/admin2view/acaraView/showtabletagihan', $data);
            }
        } else {
            redirect('admin2/tagihan');
        
        }
    }

    function all() {
        $codeadmin = $this->session->userdata('SESS_ADMIN_CODE');
        $namaadmin = $this->session->userdata('SESS_NAME');
        $this->form_validation->set_rules('kurang', 'Full Name', 'required|xss_clean');
        if ($this->form_validation->run() == TRUE) {

            $datestring = "%Y-%m-%d";
            $time = time();
            $kurang = $this->input->post('kurang');
//            $bayar=  $this->input->post('bayar');
//            $status=$this->input->post('status');
//            $dp=  $this->input->post('dp');
            $date = mdate($datestring, $time);




            $data = array(
                'status' => "bayar",
                'bayar' => $kurang,
                'tanggal' => $date,
                'codeadmin' => $codeadmin
            );

            $dataPemasukan = array(
                'codeuser' => $this->input->post('codeuser'),
                'tanggalmasuk' => $date,
                'namaadmin' => $namaadmin,
                'nilaimasuk' => $kurang
            );
            $this->model_tagihan->insert_to_pemasukan($dataPemasukan);

            $id = $this->input->post('id');
            $this->model_tagihan->update_data($id, $data);
            $data['data'] = $this->model_join->get_tagih_admin();
                 $data['status']='';
            $this->load->view('admin2/admin2view/acaraView/showtabletagihan', $data);
        } else {
            redirect('admin2/tagihan');
        }
    }

}

?>
