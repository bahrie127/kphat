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
            $data['data'] = $this->model_join->get_all_peserta();
        }

        $this->load->view('admin2/header');
        $this->load->view('admin2/admin2view/fpendaftaran', $data);
        $this->load->view('admin2/footer');
    }

}

?>
