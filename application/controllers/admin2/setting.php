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
        $this->load->library('form_validation');
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
        } else {
            redirect('admin2/dashboar');
        }
    }

    function edit() {
        $this->form_validation->set_rules('nama', 'Full Name', 'required|xss_clean');
//        $this->form_validation->set_rules('telepon', 'Full Name', 'required|xss_clean');
//        $this->form_validation->set_rules('email', 'Full Name', 'required|xss_clean|valid_email');
//        $this->form_validation->set_rules('username', 'Full Name', 'required|xss_clean');

        if ($this->form_validation->run() == TRUE) {

            $password = $this->input->post('password');
            $code = $this->input->post('codeadmin');
            if (!$password == "") {
                $this->form_validation->set_rules('password', 'Password', 'trim|required|matches[cpassword]');
                $this->form_validation->set_rules('cpassword', 'Confirm Password', 'trim|required');
                if ($this->form_validation->run() == TRUE) {
                    $dataUbah = array(
                        'nama' => $this->input->post('nama'),
                        'telepon' => $this->input->post('telepon'),
                        'username' => $this->input->post('username'),
                        'email' => $this->input->post('email'),
                        'password' => md5($password)
                    );
                    $this->model_admin->update_data($code, $dataUbah);
                    redirect('admin2/dashboar');
                } else {
                    $this->session->set_userdata('ERRMSG_ARR', validation_errors());
                    $this->update($code);
                }
            } else {

                $dataUbah = array(
                    'nama' => $this->input->post('nama'),
                    'telepon' => $this->input->post('telepon'),
                    'username' => $this->input->post('username'),
                    'email' => $this->input->post('email')
                );
                $this->model_admin->update_data($code, $dataUbah);
                redirect('admin2/dashboar');
            }
        } else {
            redirect('admin2/dashboar');
        }
    }

}

?>
