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
class Pemateri extends CI_Controller {

    //put your code here
    public function __construct() {
        parent::__construct();
        $this->load->library('auth');
        $this->auth->check_user_authentification();
        $this->load->model('model_pemateri');
        $this->load->library('form_validation');
    }

    function index() {
        if ($this->model_pemateri->get_all() == FALSE) {
            $data['data'] = array();
        } else {
            $data['data'] = $this->model_pemateri->get_all();
        }

        $this->load->view('admin2/header');
        $this->load->view('admin2/admin2view/fpemateri', $data);
        $this->load->view('admin2/footer');
    }

    function edit() {
        $this->load->view('admin2/header');
        $this->load->view('admin2/admin2view/masterView/feditpemateri');
        $this->load->view('admin2/footer');
    }

    function add() {

        $this->form_validation->set_rules('code', 'Full Name', 'required|xss_clean');
        $this->form_validation->set_rules('nama', '-', 'required|xss_clean');
        $this->form_validation->set_rules('telepon', 'Full Name', 'required|xss_clean');
        $this->form_validation->set_rules('email', '-', 'required|xss_clean|valid_email');

        if ($this->form_validation->run() == TRUE) {

            $data = array(
                'codepemateri' => $this->input->post('code'),
                'nama' => $this->input->post('nama'),
                'telepon' => $this->input->post('telepon'),
                'email' => $this->input->post('email')
            );
            $this->model_pemateri->add($data);
            //$this->index();
        } else {
            redirect('admin2/pemateri');
        }
    }

    function update() {

        $this->form_validation->set_rules('code', 'Full Name', 'required|xss_clean');
        $this->form_validation->set_rules('nama', '-', 'required|xss_clean');
        $this->form_validation->set_rules('telepon', 'Full Name', 'required|xss_clean');
        $this->form_validation->set_rules('email', '-', 'required|xss_clean|valid_email');

        if ($this->form_validation->run() == TRUE) {

            $data = array(
                'nama' => $this->input->post('nama'),
                'telepon' => $this->input->post('telephone'),
                'email' => $this->input->post('email')
            );
            $id = $this->input->post('codepemateri');
            $this->model_pemateri->update_data($id, $data);
            $data['data'] = $this->model_pemateri->get_all();
            $this->load->view('admin2/admin2view/masterView/showtablepemateri', $data);
        } else {
            redirect('admin2/pemateri');
        }
    }

    function delete() {
        $this->form_validation->set_rules('id', 'Full Name', 'required|xss_clean');
        if ($this->form_validation->run() == TRUE) {
            $id = $this->input->post('id');
            $this->model_pemateri->delete_data($id);
            $data['data'] = $this->model_pemateri->get_all();

            $this->load->view('admin2/admin2view/masterView/showtablepemateri', $data);
        } else {
            redirect('admin2/pemateri');
        }
    }

}

?>
