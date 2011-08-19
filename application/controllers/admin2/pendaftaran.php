<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of pendaftaran
 *
 * @author phepen
 */
class pendaftaran extends CI_Controller {

    //put your code here
    public function __construct() {
        parent::__construct();
        $this->load->library('auth');
        $this->auth->check_user_authentification();

        $this->load->model('model_join');
    }

    function index() {
        if ($this->model_join->get_all_peserta() == FALSE) {

            $data['data'] = array();
        } else {
            $data['event'] = $this->model_join->get_jadwal_event();
            $data['cek'] = array();
            $data['kategori'] = array();
            $data['data'] = $this->model_join->get_all_peserta();
        }

        $this->load->view('admin2/header');
        $this->load->view('admin2/admin2view/fpendaftaran', $data);
        $this->load->view('admin2/footer');
    }

    function get_by_event() {
        $kategori = $this->input->post('kategori');
        if ($this->model_join->get_peserta_by_code_jadwal($kategori) == TRUE) {
            $data['data'] = $this->model_join->get_peserta_by_code_jadwal($kategori);
        } else {
            $data['data'] = array();
        }
        $this->load->view('admin2/admin2view/acaraView/showtablefilterpeserta', $data);
    }

}

?>
