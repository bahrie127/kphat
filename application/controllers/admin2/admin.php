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
        if (!$this->ion_auth->logged_in())
		{
			redirect('/login', 'refresh');
		}else{
        $this->load->model('model_admin');
                }
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

    function add(){
        $dataadmin=array(
          'codeadmin'=>  $this->input->post('codeadmin'),
            'nama'=>  $this->input->post('nama'),
            'telepon'=>  $this->input->post('telepon'),
            'email'=>  $this->input->post('email'),
            'username'=>  $this->input->post('username'),
            'password'=>  $this->input->post('password')
        );
        $this->model_admin->add($dataadmin);
        $this->index();
    }
    
}

?>
