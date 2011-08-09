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
        if (!$this->ion_auth->logged_in()) {
            redirect('/login', 'refresh');
        } else {
            $this->load->model('model_join');
        }
    }

    function index() {
        if ($this->model_join->get_pendaftar_admin() == FALSE) {
            $data['data'] = array();
        } else {
            $data['data'] = $this->model_join->get_pendaftar_admin();
        }

        $this->load->view('admin2/header');
        $this->load->view('admin2/admin2view/fpendaftaran', $data);
        $this->load->view('admin2/footer');
    }

}

?>
