<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of master
 *
 * @author phepen
 */
class Master extends CI_Controller{
    //put your code here
    public function __construct() {
        parent::__construct();
    }
    
    function index(){
        $this->load->view('admin/header');
        $this->load->view('admin/adminView/adminViewMaster/materi');
        $this->load->view('admin/footer');
    }
    
    function pemateri(){
        $this->load->view('admin/header');
        $this->load->view('admin/adminView/adminViewMaster/pemateri');
        $this->load->view('admin/footer');
    }
    
    function tempat(){
        $this->load->view('admin/header');
        $this->load->view('admin/adminView/adminViewMaster/tempat');
        $this->load->view('admin/footer');
    }
    
    function event(){
        $this->load->view('admin/header');
        $this->load->view('admin/adminView/adminViewMaster/event');
        $this->load->view('admin/footer');
    }
    
    function user(){
        $this->load->view('admin/header');
        $this->load->view('admin/adminView/adminViewMaster/user');
        $this->load->view('admin/footer');
    }
    
    function admin(){
        $this->load->view('admin/header');
        $this->load->view('admin/adminView/adminViewMaster/admin');
        $this->load->view('admin/footer');
    }
}

?>
