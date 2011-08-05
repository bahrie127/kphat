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
class Admin extends CI_Controller {

    //put your code here
    public function __construct() {
        parent::__construct();
        $this->load->model('model_admin');
    }

    function index() {
        $data['data']=  $this->model_admin->get_all();
        $this->load->view('admin2/header');
        $this->load->view('admin2/admin2view/fadmin',$data);
        $this->load->view('admin2/footer');
    }

    function edit() {
        $this->load->view('admin2/header');
        $this->load->view('admin2/admin2view/masterView/fedittempat');
        $this->load->view('admin2/footer');
    }

}

?>
