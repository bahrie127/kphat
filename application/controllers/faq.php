<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Faq extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->load->view('header');
        $this->load->view('utama/page');
        $this->load->view('utama/cont/FAQ');
        $this->load->view('footer');
    }

}