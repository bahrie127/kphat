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

class sertifikat extends CI_Controller {

    //put your code here

    public function __construct() {
        parent::__construct();
        $this->load->model('model_join');
        $this->load->model('model_sertifikat');
    }

    function index() {
        if ($this->model_join->get_all_sertifikat() == FALSE) {
            $data['data'] = array();
        } else {
            $data['data'] = $this->model_join->get_all_sertifikat();
        }
        $this->load->view('admin2/header');
        $this->load->view('admin2/admin2view/fsertifikat', $data);
        $this->load->view('admin2/footer');
    }
    
    function add(){
        $datasertifikat=array(
          'nosertifikat'=>  $this->input->post('nosertifikat'),
            'codeuser'=>  $this->input->post('codeuser'),
            'codejadwalevent'=>  $this->input->post('codejadwalevent')
        );
        
        $this->model_sertifikat->add($datasertifikat);
//         $data['data'] = $this->model_join->get_all_sertifikat();
//         $this->load->view('admin2/admin2view/acaraView/showtablesertifikat',$data);
        $this->index();
    }


}

?>
