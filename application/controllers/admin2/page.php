<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of page
 *
 * @author phepen
 */
class page extends CI_Controller{
    //put your code here
    public function __construct() {
        parent::__construct();
    }
    
    function index(){
        $this->load->view('admin2/header');
        $this->load->view('admin2/admin2view/fpage');
        $this->load->view('admin2/footer');
    }
    
    function add(){
        $this->load->view('admin2/header');
        $this->load->view('admin2/admin2view/masterView/faddpage');
        $this->load->view('admin2/footer');
    }
    
    function edit(){
        $this->load->view('admin2/header');
        $this->load->view('admin2/admin2view/masterView/feditpage');
        $this->load->view('admin2/footer');
    }
}

?>
