<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of sertifikat
 *
 * @author phepen
 */
class sertifikat extends CI_Controller {

    //put your code here

    public function __construct() {
        parent::__construct();

        if (!$this->ion_auth->logged_in()) {
            redirect('/login', 'refresh');
        } else {
            $this->load->model('model_join');
            $this->load->model('model_sertifikat');
            $this->load->library('form_validation');
        }

    }

    function index() {
        if ($this->model_join->get_all_sertifikat() == FALSE) {
            $data['data'] = array();
        } else {
            $data['data'] = $this->model_join->get_all_sertifikat();
        }


        if ($this->model_join->get_all_peserta() == FALSE) {
            $data['cari'] = array();
        } else {
            $data['cari'] = $this->model_join->get_all_peserta();
        }
        $this->load->view('admin2/header');
        $this->load->view('admin2/admin2view/fsertifikat', $data);
        $this->load->view('admin2/footer');
    }

    function add() {


        $this->form_validation->set_rules('nosertifikat', 'Full Name', 'required|xss_clean');
        $this->form_validation->set_rules('codeuser', '-', 'required|xss_clean');
        $this->form_validation->set_rules('codejadwalevent', 'Full Name', 'required|xss_clean');

        if ($this->form_validation->run() == TRUE) {

            $datasertifikat = array(
                'nosertifikat' => $this->input->post('nosertifikat'),
                'codeuser' => $this->input->post('codeuser'),
                'codejadwalevent' => $this->input->post('codejadwalevent')
            );

            $this->model_sertifikat->add($datasertifikat);
//      
            redirect('admin2/sertifikat');
        } else {
            redirect('admin2/sertifikat');
        }

    }

    function findNama() {
         $id = $this->uri->segment(3); //diaktifkan jika sudah rampung semua....
         $data['nama'] = $this->model_join->get_data_by_no_sertifikat($id);


        $this->load->view('admin2/admin2view/acaraView/findnama',$data);
    }

}

?>
