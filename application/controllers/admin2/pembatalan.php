<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of pembatalan
 *
 * @author phepen
 */
class pembatalan extends CI_Controller {

    //put your code here
    public function __construct() {
        parent::__construct();
        if (!$this->ion_auth->logged_in()) {
            redirect('/login');
        } else {
            
        }
    }

    function index() {
        $this->load->view('admin2/header');
        $this->load->view('admin2/admin2view/fpembatalan');
        $this->load->view('admin2/footer');
    }

}

?>
