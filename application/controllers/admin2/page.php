<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of page
 *
 * @author phepen
 */
class page extends CI_Controller {

    //put your code here
    public function __construct() {
        parent::__construct();
        $this->load->model('model_page');
        $this->load->helper('date');
    }

    function index() {
        $data['data'] = $this->model_page->get_all_group();
        $this->load->view('admin2/header');
        $this->load->view('admin2/admin2view/fpage', $data);
        $this->load->view('admin2/footer');
    }
    
    function add(){

         $datestring = "%Y-%m-%d";
        $time = time();
        $date = mdate($datestring, $time);   
        $datapage=array(
            'judul' => $this->input->post('judul'),
            'isi' => $this->input->post('isi'),
            'tanggal' => $date,
            'codegroup' => $this->input->post('group')
        );
        
        $this->model_page->add($datapage);
        redirect('admin2/dashboar');
    }


}

?>
