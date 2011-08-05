<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of tagihan
 *
 * @author phepen
 */
class tagihan extends CI_Controller{
    //put your code here
    public function __construct() {
        parent::__construct();
        $this->load->model('model_join');
    }
    
    function index(){
        $data['data']=  $this->model_join->get_tagih_admin();
        $this->load->view('admin2/header');
        $this->load->view('admin2/admin2view/ftagihan',$data);
        $this->load->view('admin2/footer');
        
    }
}

?>
