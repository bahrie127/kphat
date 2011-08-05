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
        $this->load->model('model_pemateri');
    }

    function index() {
        $data['data']=  $this->model_pemateri->get_all();
        $this->load->view('admin2/header');
        $this->load->view('admin2/admin2view/fpemateri',$data);
        $this->load->view('admin2/footer');
    }

    function edit() {
        $this->load->view('admin2/header');
        $this->load->view('admin2/admin2view/masterView/feditpemateri');
        $this->load->view('admin2/footer');
    }

    function add(){
        $data=array(
            'codepemateri'=>  $this->input->post('code'),
            'nama'=>  $this->input->post('nama'),
            'telepon'=>  $this->input->post('telepon'),
            'email'=>  $this->input->post('email')
        );
        $this->model_pemateri->add($data);
        //$this->index();
    }
    
    function update() {
        
        $data = array(
            'nama' => $this->input->post('nama'),
            'telepon' => $this->input->post('telephone'),
            'email' => $this->input->post('email')
            
        );
        $id = $this->input->post('codepemateri');
        $this->model_pemateri->update_data($id, $data);
        $data['data'] = $this->model_pemateri->get_all();
         $this->load->view('admin2/admin2view/masterView/showtablepemateri',$data);
        
        
    }
    
    function delete(){
        $id=$this->input->post('id');
        $this->model_pemateri->delete_data($id);
        $data['data'] = $this->model_pemateri->get_all();
        
        $this->load->view('admin2/admin2view/masterView/showtablepemateri',$data);
          
    }
}

?>
