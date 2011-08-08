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
class User extends CI_Controller {

    //put your code here
    public function __construct() {
        parent::__construct();
        if (!$this->ion_auth->logged_in()) {
            redirect('/login');
        } else {
            $this->load->model('model_user');
        }
    }

    function index() {
        if ($this->model_user->get_all() == FALSE) {
            $data['data'] = array();
        } else {
            $data['data'] = $this->model_user->get_all();
        }
        $this->load->view('admin2/header');
        $this->load->view('admin2/admin2view/fuser', $data);
        $this->load->view('admin2/footer');
    }

    function edit() {
        $this->load->view('admin2/header');
        $this->load->view('admin2/admin2view/masterView/fedittempat');
        $this->load->view('admin2/footer');
    }

}

?>
