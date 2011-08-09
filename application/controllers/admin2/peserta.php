<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of peserta
 *
 * @author phepen
 */
class peserta extends CI_Controller {

    //put your code here
    public function __construct() {
        parent::__construct();
        $this->load->model('model_join');
    }

    function index() {
        $data['data'] = $this->model_join->get_jadwal_event();
        $this->load->view('admin2/header');
        $this->load->view('admin2/admin2view/fpeserta',$data);
        $this->load->view('admin2/footer');
    }

}

?>
