<?php

class Reset_password extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library('auth');
        $this->auth->check_user_authentification();
        $this->load->model('model_admin');
        $this->load->library('form_validation');
    }

    function reset() {
        $this->form_validation->set_rules('password', 'Password', 'trim|required|matches[cpassword]');
        $this->form_validation->set_rules('cpassword', 'Confirm Password', 'trim|required');
        if ($this->form_validation->run() == TRUE) {
            $email = $this->input->post('email');
            $password = $this->input->post('password');

            $datarubah = array(
                'password' => $password
            );

            $this->model_admin->reset($email, $datarubah);

            redirect('login');
        } else {
            $data['email'] = $this->input->post('email');
            $data['status']="kedua password tidak sama.";
            $this->load->view('');
        }
    }

}

?>
