<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of sertifikat
 *
 * @author phepen
 */
class sertifikat extends CI_Controller{
    //put your code here
    
    public function __construct() {
        parent::__construct();
    }
    
    function index(){
        $this->load->view('admin2/header');
         $this->load->view('admin2/admin2view/fsertifikat');
         $this->load->view('admin2/footer');
    }
}

?>
