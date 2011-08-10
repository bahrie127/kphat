<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of pembatalan
 *
 * @author phepen
 */
class pembatalan extends CI_Controller {

    //put your code here
    public function __construct() {
        parent::__construct();
        if (!$this->ion_auth->logged_in()) {
            redirect('/login', 'refresh');
        } else {
             $this->load->model('model_join');
        }
    }

    function index() {
         if ($this->model_join->get_tagih_admin() == FALSE) {
            $data['data'] = array();
        } else {
            $data['data'] = $this->model_join->get_tagih_admin();
        }
        $this->load->view('admin2/header');
        $this->load->view('admin2/admin2view/fpembatalan',$data);
        $this->load->view('admin2/footer');
    }
    
    function batal(){
        $this->load->view('admin2/header');
        $this->load->view('admin2/admin2view/acaraView/feditpembatalan');
        $this->load->view('admin2/footer');
    }

    function add(){
        
    }
}

?>
