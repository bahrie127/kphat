<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of admin
 *
 * @author phepen
 */
class Admin extends CI_Controller{
    //put your code here
    public function __construct() {
        parent::__construct();
    }
    
    function index(){
        $this->load->view('admin2/header');
        $this->load->view('admin2/flogin');
        $this->load->view('admin2/footer');
    }
    
    function forgot(){
        $this->load->view('admin2/header');
        $this->load->view('admin2/fforgotpass');
        $this->load->view('admin2/footer');
    }
}

?>
