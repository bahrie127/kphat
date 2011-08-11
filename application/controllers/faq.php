<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Faq extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('model_join');
        $this->load->model('model_page');
    }

    public function index() {
        if ($this->model_join->get_jadwal_event() == FALSE) {
            $data['data'] = array();
        } else {
            $data['data'] = $this->model_join->get_jadwal_event();
            $data['page'] = $this->model_page->get_all_page();
        }
         
        $this->load->view('header');
        $this->load->view('utama/page');
        $this->load->view('utama/cont/FAQ',$data);
        $this->load->view('footer');
    }

}