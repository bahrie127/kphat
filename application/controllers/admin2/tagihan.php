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
class Tagihan extends CI_Controller {

    //put your code here
    public function __construct() {
        parent::__construct();
        if (!$this->ion_auth->logged_in()) {
            redirect('/login', 'refresh');
        } else {
            $this->load->model('model_join');
            $this->load->helper('date');
            $this->load->model('model_tagihan');
            $this->load->library('form_validation');
        }
    }

    function index() {
        if ($this->model_join->get_tagih_admin() == FALSE) {
            $data['data'] = array();
        } else {
            $data['data'] = $this->model_join->get_tagih_admin();
        }

        $this->load->view('admin2/header');
        $this->load->view('admin2/admin2view/ftagihan', $data);
        $this->load->view('admin2/footer');
    }

    function update() {

        $this->form_validation->set_rules('codejadwalevent', 'Full Name', 'required|xss_clean');
        if ($this->form_validation->run() == TRUE) {

            $datestring = "%Y-%m-%d";
            $time = time();
            $date = mdate($datestring, $time);
            $data = array(
                'status' => "bayar",
                'tanggal' => $date
            );
            $id = $this->input->post('id');
            $this->model_tagihan->update_data($id, $data);
            $data['data'] = $this->model_join->get_tagih_admin();
            $this->load->view('admin2/admin2view/acaraView/showtabletagihan', $data);
        } else {
            redirect('admin2/tagihan');
        }
    }

}

?>
