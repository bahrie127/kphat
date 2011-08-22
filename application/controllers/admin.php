<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of admin
 *
 * @author phepen
 */
class Admin extends CI_Controller {

    //put your code here
    public function __construct() {
        parent::__construct();
        $this->load->model('model_admin');
        $this->load->library('form_validation');
        
        $this->load->library('email');
    }

    function index() {
        $this->load->view('admin2/header');
        $this->load->view('admin2/flogin');
        $this->load->view('admin2/footer');
    }

    function forgot() {
        $data['status'] = "";
        $this->load->view('admin2/header');
        $this->load->view('admin2/fforgotpass', $data);
        $this->load->view('admin2/footer');
    }

    function cek() {
        $this->form_validation->set_rules('email', 'email', 'required|xss_clean');

        if ($this->form_validation->run() == TRUE) {
            $email = $this->input->post('email');
            if ($this->model_admin->cari_email($email) == TRUE) {
                $data = $this->model_admin->cari_email($email);

                $this->sendMail($data['email']); 
               
               
                ////codingan kirim email ada disini
            } else {
                $data['status'] = "Email Tidak Tersedia";
                $this->load->view('admin2/header');
                $this->load->view('admin2/fforgotpass', $data);
                $this->load->view('admin2/footer');
            }
        } else {
            $data['status'] = "Email Tidak boleh kosong";
                $this->load->view('admin2/header');
                $this->load->view('admin2/fforgotpass', $data);
                $this->load->view('admin2/footer');
        }
    }
    
    function sendMail($to){
        
        
        $config['protocol'] = 'sendmail';
        $config['mailtype'] = 'text';
        $config['charset'] = 'utf-8';
        $config['wordwrap'] = TRUE;
        $this->email->initialize($config);
        $this->email->from('admin@hat.xcode.or.id', 'Forgotten Password');
        $this->email->to($to);

        $this->email->subject('Link to new password');
        $this->email->message("
            Lupa dengan password anda.\n
            Klik link dibawah ini dibawah ini : \n
            http://hat.xcode.or.id/index.php/reset/$to \n
            masukan password baru anda.
            
            ");

        $this->email->send();

    }

}

?>
