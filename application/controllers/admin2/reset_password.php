<?php

class Reset_password extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library('auth');
        $this->auth->check_user_authentification();
        $this->load->model('model_admin');
        $this->load->library('form_validation');
    }

    function resetpassword($username){
        $data['username']=$username;
        $data['status']="";
        $this->load->view('admin2/header');
        $this->load->view('admin2/admin2view/freset',$data);
        $this->load->view('admin2/footer');
        
    }


    function reset() {
        
        $this->form_validation->set_rules('password', 'Password', 'trim|required|matches[cpassword]');
        $this->form_validation->set_rules('cpassword', 'Confirm Password', 'trim|required');
        if ($this->form_validation->run() == TRUE) {
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            $datarubah = array(
                'password' => $password
            );

            $this->model_admin->reset($username, $datarubah);

            redirect('login');
        } else {
            $data['username'] = $this->input->post('username');
            $data['status']="kedua password tidak sama atau tidak di isi.";
            $this->load->view('admin2/header');
            $this->load->view('admin2/admin2view/freset',$data);
            $this->load->view('admin2/footer');
        }
    }

}

?>
