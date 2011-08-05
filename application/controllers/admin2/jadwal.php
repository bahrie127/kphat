<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of jadwal
 *
 * @author phepen
 */
class jadwal extends CI_Controller{
    //put your code here
    public function __construct() {
        parent::__construct();
        $this->load->model('model_tempat');
        $this->load->model('model_event');
        $this->load->model('model_pemateri');
        $this->load->model('model_jadwal_event');
        $this->load->model('model_join');
    }
    
    function index(){
        $data['event']=  $this->model_event->get_all();
        $data['tempat']=  $this->model_tempat->get_all();
        $data['pemateri']=  $this->model_pemateri->get_all();
        $data['data']=  $this->model_join->get_jadwal_event_admin();
        $this->load->view('admin2/header');
        $this->load->view('admin2/admin2view/fjadwal',$data);
        $this->load->view('admin2/footer');
        
    }
    
    function add(){
        $data=array(
            'codejadwalevent'=>  $this->input->post('codejadwal'),
            'codeevent'=>  $this->input->post('codeevent'),
            'tanggal'=>  $this->input->post('tanggal'),
            'waktu'=>  $this->input->post('waktu'),
            'codepemateri'=>  $this->input->post('codepemateri'),
            'codetempat'=>  $this->input->post('codetempat'),
            'harga'=>  $this->input->post('harga')
        );
        $this->model_jadwal_event->add($data);
    }
}

?>