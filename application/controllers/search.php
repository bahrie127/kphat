<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Search extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('model_join');
    }

    public function index() {
        if ($this->model_join->get_jadwal_event() == FALSE) {
            $data['data'] = array();
        } else {
            $data['data'] = $this->model_join->get_jadwal_event();
        }

        $this->load->view('header');
        $this->load->view('utama/page');
        $this->load->view('utama/cont/search', $data);
        $this->load->view('footer');
    }

    function cari() {
        
        $id = $this->uri->segment(3); //diaktifkan jika sudah rampung semua....
        //$data['sertifikat'] = $this->model_join->get_data_by_no_sertifikat($id);

        $this->load->view('utama/cont/fsearch', $data);
    }

}