<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of acara
 *
 * @author phepen
 */
class Acara  extends CI_Controller{
    //put your code here
    
    public function __construct() {
        parent::__construct();
    }
    
    function index(){
        $this->load->view('admin/header');
        $this->load->view('admin/adminView/adminViewAcara/jadwal');
        $this->load->view('admin/footer');
    }
    
    function pendaftaran(){
        $this->load->view('admin/header');
        $this->load->view('admin/adminView/adminViewAcara/pendaftaran');
        $this->load->view('admin/footer');
    }
    
    function tagihan(){
        $this->load->view('admin/header');
        $this->load->view('admin/adminView/adminViewAcara/tagihan');
        $this->load->view('admin/footer');
    }
    
    function pembatalan(){
        $this->load->view('admin/header');
        $this->load->view('admin/adminView/adminViewAcara/pembatalan');
        $this->load->view('admin/footer');
    }
    
    function peserta(){
        $this->load->view('admin/header');
        $this->load->view('admin/adminView/adminViewAcara/peserta');
        $this->load->view('admin/footer');
    }
}

?>
