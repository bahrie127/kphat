<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of pendaftaran
 *
 * @author phepen
 */
class pendaftaran extends CI_Controller {

    
    var $codetagihan;
    var $codeuser;
    var $date;
    var $totalTagihan;
    //put your code here
    public function __construct() {
        parent::__construct();
        $this->load->library('auth');
        $this->auth->check_user_authentification();
       
        
        $this->load->helper('string');

        $this->load->helper('date');
        $this->load->library('form_validation');
        $this->load->model('model_user');
        $this->load->model('model_pendaftaran');
        $this->load->model('model_tagihan');
        $this->load->model('model_detail_tagihan');
        $this->load->model('model_join');
        $this->load->model('model_jadwal_event');
        $codetagihan = random_string('alnum', 8);
        $codeuser = random_string('numeric', 8);
    }

    function index() {
        if ($this->model_join->get_all_peserta() == FALSE) {

            $data['data'] = array();
        } else {
            $data['event'] = $this->model_join->get_jadwal_event();
            $data['cek'] = array();
            $data['kategori'] = array();
            $data['data'] = $this->model_join->get_all_peserta();
        }

        $this->load->view('admin2/header');
        $this->load->view('admin2/admin2view/fpendaftaran', $data);
        $this->load->view('admin2/footer');
    }

    function get_by_event() {
        $kategori = $this->input->post('kategori');
        if ($this->model_join->get_peserta_by_code_jadwal($kategori) == TRUE) {
            $data['data'] = $this->model_join->get_peserta_by_code_jadwal($kategori);
        } else {
            $data['data'] = array();
        }
        $this->load->view('admin2/admin2view/acaraView/showtablefilterpeserta', $data);
    }

    function add() {

        $this->form_validation->set_rules('name', 'Full Name', 'required|xss_clean');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|xss_clean');
        $this->form_validation->set_rules('ck', 'Jenis Kelamin', 'required|xss_clean');
        $this->form_validation->set_rules('telp', 'Telepon', 'required|xss_clean|max_length[14]');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('tempatlahir', 'Tempat Lahir', 'required|xss_clean');
        $this->form_validation->set_rules('pekerjaan', 'Pekerjaan', 'required|xss_clean');
        $this->form_validation->set_rules('instansi', 'Instansi', 'required|xss_clean');

        if ($this->form_validation->run() == TRUE) {
        
            $this->codeuser = random_string('numeric', 8);
            $this->codetagihan = random_string('alnum', 8);
            $datestring = "%Y-%m-%d";
            $time = time();
            $date = mdate($datestring, $time);
            $tahunlahir = $this->input->post('tahun');
            $bulanlahir = $this->input->post('bulan');
            $tanggallahir = $this->input->post('tanggal');
            $lahir = "$tahunlahir-$bulanlahir-$tanggallahir";


            $dataUser = array(
                'codeuser' => $this->codeuser,
                'nama' => $this->input->post('name'),
                'alamat' => $this->input->post('alamat'),
                'jeniskelamin' => $this->input->post('ck'),
                'telepon' => $this->input->post('telp'),
                'email' => $this->input->post('email'),
                'tempatlahir' => $this->input->post('tempatlahir'),
                'tanggallahir' => $lahir,
                'pekerjaan' => $this->input->post('pekerjaan'),
                'instansi' => $this->input->post('instansi')
            );
            $this->model_user->add($dataUser);


            foreach ($this->input->post('event') as $row) {
                $this->hitungHarga($row);
                $dataPendaftaran = array(
                    'codeuser' => $this->codeuser,
                    'codejadwalevent' => $row,
                    'tanggal' => $date
                );
                $this->model_pendaftaran->add($dataPendaftaran);
            }

            $dataTagihan = array(
                'codepembayaran' => $this->codetagihan,
                'codeuser' => $this->codeuser,
                'status' => "belum",
                'jumlahharga' => $this->totalTagihan
            );


            $this->model_tagihan->add($dataTagihan);
            foreach ($this->input->post('event') as $row) {
                $dataDetailTagihan = array(
                    'codepembayaran' => $this->codetagihan,
                    'codejadwalevent' => $row
                );
                $this->model_detail_tagihan->add($dataDetailTagihan);
            }
            // 
            $this->index();
        } else {
            redirect('admin2/pendaftaran');
        }
//       
    }
    
    function hitungHarga($code) {
        $dataHarga = $this->model_jadwal_event->get_harga($code);

        $this->totalTagihan += end($dataHarga);
    }

}

?>
