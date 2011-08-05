<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of login
 *
 * @author phepen
 */
class Login extends CI_Controller{
    //put your code here
    
    public function __construct() {
        parent::__construct();
    }
    
    function index(){
        $this->load->view('admin/headerLogin');
        $this->load->view('admin/adminView/login');
        $this->load->view('admin/footerlogin');
    }
    
    function forgot(){
        $this->load->view('admin/headerLogin');
        $this->load->view('admin/adminView/forgotpassword');
        $this->load->view('admin/footerlogin');
    }
}

?>
