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
class Event extends CI_Controller {

    //put your code here
    public function __construct() {
        parent::__construct();
    $this->load->model('model_event');
    }

    function index() {
        $data['data']=  $this->model_event->get_all();
        $this->load->view('admin2/header');
        $this->load->view('admin2/admin2view/fevent',$data);
        $this->load->view('admin2/footer');
    }

    function edit() {
        $this->load->view('admin2/header');
        $this->load->view('admin2/admin2view/masterView/feditevent');
        $this->load->view('admin2/footer');
    }
    
    function add(){
        $data=array(
            'codeivent'=>  $this->input->post('code'),
            'namaevent'=>  $this->input->post('nama'),
            'materi'=>  $this->input->post('materi'),
            'praktek'=>  $this->input->post('praktek')
        );
        $this->model_event->add($data);
       // $this->index();
    }

    function update() {
        
        $data = array(
            'namaevent' => $this->input->post('namaevent'),
            'materi' => $this->input->post('materi'),
            'praktek' => $this->input->post('praktek')
            
        );
        $id = $this->input->post('codeevent');
        $this->model_event->update_data($id, $data);
        $data['data'] = $this->model_event->get_all();
         $this->load->view('admin2/admin2view/masterView/showtableevent',$data);
        
        
    }
}

?>