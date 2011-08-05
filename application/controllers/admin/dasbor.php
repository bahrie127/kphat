<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of dasbor
 *
 * @author phepen
 */
class Dasbor extends CI_Controller {
    //put your code here
    public function __construct() {
        parent::__construct();
    }
    
    function index(){
        $this->load->view('admin/header');
        $this->load->view('admin/adminView/dashbor');
        $this->load->view('admin/footer');
        
    }
}

?>
