<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of laporan
 *
 * @author phepen
 */
class laporan extends CI_Controller{
    //put your code here
    public function __construct() {
        parent::__construct();
    }
    
    function index(){
        $this->load->view('admin2/header');
        $this->load->view('admin2/admin2view/flaporan');
        $this->load->view('admin2/footer');
    }
}

?>
