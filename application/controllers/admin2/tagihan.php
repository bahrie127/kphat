<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of tagihan
 *
 * @author phepen
 */
class Tagihan extends CI_Controller{
    //put your code here
    public function __construct() {
        parent::__construct();
        $this->load->model('model_join');
        $this->load->helper('date');
        $this->load->model('model_tagihan');
    }
    
    function index(){
        $data['data']=  $this->model_join->get_tagih_admin();
        $this->load->view('admin2/header');
        $this->load->view('admin2/admin2view/ftagihan',$data);
        $this->load->view('admin2/footer');
        
    }
    
    function update(){
        $datestring = "%Y-%m-%d";
        $time = time();
        $date = mdate($datestring, $time);
        $data=array(
            'status'=>"bayar",
            'tanggal'=>$date
        );
        $id=$this->input->post('id');
        $this->model_tagihan->update_data($id,$data);
        $data['data']=  $this->model_join->get_tagih_admin();
        $this->load->view('admin2/admin2view/acaraView/showtabletagihan',$data);
    }
}

?>
