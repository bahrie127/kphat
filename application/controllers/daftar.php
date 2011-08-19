<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Daftar extends CI_Controller {

    var $codetagihan;
    var $codeuser;
    var $date;
    var $totalTagihan;

    function __construct() {
        parent::__construct();
        $this->load->helper('string');

        $this->load->helper('date');
        $this->load->library('form_validation');
        $this->load->model('model_user');
        $this->load->model('model_pendaftaran');
        $this->load->model('model_tagihan');
        $this->load->model('model_detail_tagihan');
        $this->load->model('model_join');
        $this->load->model('model_jadwal_event');
        $this->load->library('email');
        $codetagihan = random_string('alnum', 8);
        $codeuser = random_string('numeric', 8);
    }

    public function index() {
        $data['data'] = $this->model_join->get_jadwal_event();
        $data['cek'] = "";
        $this->load->view('header');
        $this->load->view('utama/page');
        $this->load->view('utama/cont/daftarpeserta', $data);
        $this->load->view('footer');
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
            $this->konfirmasi();
            $this->sendmail();
        } else {
            redirect('daftar');
        }
//       
    }

    function hitungHarga($code) {
        $dataHarga = $this->model_jadwal_event->get_harga($code);

        $this->totalTagihan += end($dataHarga);
    }

    function konfirmasi() {
        $data['data'] = $this->totalTagihan;
        $data['cek'] = "";
        $this->load->view('header');
        $this->load->view('utama/page');
        $this->load->view('utama/cont/confirmPendaftaran', $data);
        $this->load->view('footer');
    }
    
    function sendmail(){
        $to = $this->input->post('email');
        
        $config['protocol'] = 'sendmail';
        $config['mailtype'] = 'text';
        $config['charset'] = 'utf-8';
        $config['wordwrap'] = TRUE;
        $this->email->initialize($config);
        $this->email->from('admin@hat.xcode.or.id', 'Konfirmasi pendaftaran');
        $this->email->to($to);

        $this->email->subject('Konfirmasi pendaftaran');
        $this->email->message('
            Thanks for your participation in this event.\n\n
            Segera lakukan pembayaran untuk segera mendapatka tempat, karena tempat terbatas.\n
            Silahkan membayar uang pendaftaran sejumlah:\n
            Biaya Pendaftaran + 2 digit nomor identitas\n
            Contoh\n
            Biaya pendaftaran : 120.000\n
            Nomor identitas : 32.7103.030888.00 03\n
            Jumlah yang ditransfer : 120.003\n   
            BANK MANDIRI\n
            Nomor Rekening : 137 00 0677934 8\n
            Kantor Cabang : KCP Yogyakarta UGM\n
            Atas Nama : Novizul Evendi\n
            BANK BCA\n
            Nomor Rekening : 1260556670\n
            Kantor Cabang : KCP Mangkubumi Yogyakarta\n
            Atas Nama : Novizul Evendi\n\n
             
            terima kasih\n\n
                admin');

        $this->email->send();

    }

}