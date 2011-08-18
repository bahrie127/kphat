<?php

class Pemasukan extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library('auth');
        $this->auth->check_user_authentification();
        $this->load->model('model_pemasukan');
        $this->load->model('model_pengeluaran');
        }

        function index(){
            echo 'index';
        }
        function cari_pemasukan(){
            $date1=$this->input->post('startdate');
            $date2=$this->input->post('enddate');
//            echo $date1;
//            echo $date2;
//            exit;
            $data['masuk']=$this->model_pemasukan->get_pemasukan($date1,$date2);
            
            $data['keluar']=$this->model_pengeluaran->get_pengeluaran($date1,$date2);
            
            $this->load->view('admin2/admin2view/acaraView/total_pemasukan',$data);
            
        }
}
?>
