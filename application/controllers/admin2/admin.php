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
        if (!$this->ion_auth->logged_in()) {
            redirect('/login', 'refresh');
        } else {
            $this->load->model('model_admin');
            $this->load->library('form_validation');
        }
    }

    function index() {
        $data['data'] = $this->model_admin->get_all();
        $this->load->view('admin2/header');
        $this->load->view('admin2/admin2view/fadmin', $data);
        $this->load->view('admin2/footer');
    }

    function edit() {
        $this->load->view('admin2/header');
        $this->load->view('admin2/admin2view/masterView/fedittempat');
        $this->load->view('admin2/footer');
    }

    function add() {

        $this->form_validation->set_rules('nama', 'Full Name', 'required|xss_clean');
        $this->form_validation->set_rules('telepon', 'Full Name', 'required|xss_clean');
        $this->form_validation->set_rules('email', 'Full Name', 'required|xss_clean|valid_email');
        $this->form_validation->set_rules('username', 'Full Name', 'required|xss_clean');
        $this->form_validation->set_rules('password', 'Full Name', 'required|xss_clean');

        if ($this->form_validation->run() == TRUE) {

            $dataadmin = array(
                'nama' => $this->input->post('nama'),
                'telepon' => $this->input->post('telepon'),
                'email' => $this->input->post('email'),
                'username' => $this->input->post('username'),
                'password' => $this->input->post('password')
            );
            $this->model_admin->add($dataadmin);
            //$this->index();
            redirect('admin2/admin');
        } else {
            redirect('admin2/admin');
        }
    }

}

?>
