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
        $data['masuk']=array();
        $data['keluar']=array();
        $this->load->view('admin2/header');
        $this->load->view('admin2/admin2view/flaporan',$data);
        $this->load->view('admin2/footer');
    }
}

?>
