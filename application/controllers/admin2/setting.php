<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of setting
 *
 * @author phepen
 */
class Setting extends CI_Controller {

    //put your code here
    public function __construct() {
        parent::__construct();
        $this->load->library('auth');
        $this->auth->check_user_authentification();
        $this->load->model('model_admin');
    }

    function index() {
        $this->load->view('admin2/header');
        $this->load->view('admin2/admin2view/fsetting');
        $this->load->view('admin2/footer');
    }

    function update($id="") {
        if ($id) {
            $data['data'] = $this->model_admin->get_data_by_id($id);
            $this->load->view('admin2/header');
            $this->load->view('admin2/admin2view/fsetting', $data);
            $this->load->view('admin2/footer');
        }else{
            redirect('admin2/dashboar');
        }
    }

}

?>
