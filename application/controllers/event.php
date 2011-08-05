<?php


class Event extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('model_join');
    }

    function index() {
        
        $data['data'] = $this->model_join->get_jadwal_event();
        
        $this->load->view('header');
        $this->load->view('utama/page');
        $this->load->view('utama/cont/eventcontent',$data);
        $this->load->view('footer');
    }

}

?>