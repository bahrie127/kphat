<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of diskon
 *
 * @author phepen
 */
class diskon extends CI_Controller {

    //put your code here
    public function __construct() {
        parent::__construct();
        $this->load->library('auth');
        $this->auth->check_user_authentification();
        $this->load->model('model_setting_potongan');
        $this->load->library('form_validation');
    }

    function index() {
        if ($this->model_setting_potongan->get_all()) {
            $data['data'] = $this->model_setting_potongan->get_all();
        } else {
            $data['data'] = array();
        }
        $this->load->view('admin2/header');
        $this->load->view('admin2/admin2view/fdiskon', $data);
        $this->load->view('admin2/footer');
    }

    function edit() {
        $id = $this->input->post('id');
        $this->form_validation->set_rules('id', 'Full Name', 'required|xss_clean');
        if ($this->form_validation->run() == TRUE) {

            $dataubah = array(
                'nominal' => $this->input->post('nominal')
            );
           

            $this->model_setting_potongan->update_data($id, $dataubah);
           
            $data['data'] = $this->model_setting_potongan->get_all();
            $this->load->view('admin2/admin2view/masterView/ftablediskon', $data);
        } else {
            redirect('/admin2/diskon');
        }
    }

}

?>
