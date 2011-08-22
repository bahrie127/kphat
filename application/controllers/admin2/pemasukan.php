<?php

class Pemasukan extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library('auth');
        $this->auth->check_user_authentification();
        $this->load->model('model_pemasukan');
        $this->load->model('model_pengeluaran');
        $this->load->library('form_validation');
    }

    function index() {
        echo 'index';
    }

    function cari_pemasukan() {
        $this->form_validation->set_rules('startdate', 'Full Name', 'required|xss_clean');
        $this->form_validation->set_rules('enddate', 'Full Name', 'required|xss_clean');
        if ($this->form_validation->run() == TRUE) {
            $date1 = $this->input->post('startdate');
            $date2 = $this->input->post('enddate');
//          
            if ($this->model_pemasukan->get_pemasukan($date1, $date2) == TRUE) {
                $data['masuk'] = $this->model_pemasukan->get_pemasukan($date1, $date2);

                $data['keluar'] = $this->model_pengeluaran->get_pengeluaran($date1, $date2);

                $data['datamasuk'] = $this->model_pemasukan->get_data_pemasukan($date1, $date2);

                $data['datakeluar'] = $this->model_pengeluaran->get_data_pengeluaran($date1, $date2);
            } else {
                $data['masuk'] = array();
                $data['keluar'] = array();
                $data['datamasuk'] = array();
                $data['datakeluar'] = array();
            }
            $this->load->view('admin2/admin2view/acaraView/total_pemasukan', $data);
        }else{
            $this->load->view('admin2/admin2view/acaraView/tidak_boleh_kosong');
        }
    }

}

?>
