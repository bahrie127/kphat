<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of diskon
 *
 * @author phepen
 */
class diskon extends CI_Controller{
    //put your code here
    public function __construct() {
        parent::__construct();
    }
    
    function index(){
        $this->load->view('admin2/header');
        $this->load->view('admin2/admin2view/fdiskon');
        $this->load->view('admin2/footer');
    }
}

?>
