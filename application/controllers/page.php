<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Page extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->load->view('header');
        $this->load->view('utama/page');
        $this->load->view('utama/cont/salahlogin');
        $this->load->view('footer');
    }

    function getByMenu($menu) {
        $this->load->view('header');
        $this->load->view('utama/page');
        if ($menu == 'Event') {
            $this->load->view('utama/cont/eventcontent');
        }else if($menu=='FAQ'){
            $this->load->view('utama/cont/FAQ');
        }else if($menu=='ContactUs'){
            $this->load->view('utama/cont/contact');
        }else if($menu=='Search'){
            $this->load->view('utama/cont/contact');
        }else if($menu=='Daftar'){
            $this->load->view('utama/cont/daftarpeserta');
        }

        $this->load->view('footer');
    }

}