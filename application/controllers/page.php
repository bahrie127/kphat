<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Page extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('model_join');
    }

    public function index() {
        $this->load->view('header');
        $this->load->view('utama/page');
        $this->load->view('utama/cont/salahlogin');
        $this->load->view('footer');
    }

    function getByMenu($menu) {
        $data['data'] = $this->model_join->get_jadwal_event();
        $this->load->view('header');
        $this->load->view('utama/page');
        if ($menu == 'Event') {
            $this->load->view('utama/cont/eventcontent');
        } else if ($menu == 'FAQ') {
            $this->load->view('utama/cont/FAQ');
        } else if ($menu == 'ContactUs') {
            $this->load->view('utama/cont/contact');
        } else if ($menu == 'peserta') {
            $this->load->view('utama/cont/lihat');
        } else if ($menu == 'Daftar') {
            $this->load->view('utama/cont/daftarpeserta', $data);
        }

        $this->load->view('footer');
    }

    function peserta($id) {
        if ($this->model_join->get_peserta($id) == FALSE) {
            $data['data'] = array();
        } else {
            $data['data'] = $this->model_join->get_peserta($id);
        }
        
        if ($this->model_join->get_jadwal_event() == FALSE) {
            $data['event'] = array();
        } else {
            $data['event'] = $this->model_join->get_jadwal_event();
        }
        $this->load->view('header');
        $this->load->view('utama/page');
        $this->load->view('utama/cont/lihat', $data);
        $this->load->view('footer');
    }

    function daftar($event="") {
        $data['data'] = $this->model_join->get_jadwal_event();
        $data['cek'] = $event;
        $this->load->view('header');
        $this->load->view('utama/page');
        $this->load->view('utama/cont/daftarpeserta', $data);
        $this->load->view('footer');
    }

}