<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of email
 *
 * @author phepen
 */
class email extends CI_Controller {

    //put your code here
    public function __construct() {
        parent::__construct();
        $this->load->library('email');
    }

    function confirmmail() {

        echo "testing sending email with sendmail method" .
        $config['protocol'] = 'sendmail';
        $config['mailtype'] = 'text';
        $config['charset'] = 'utf-8';
        $config['wordwrap'] = TRUE;
        $this->email->initialize($config);
        $this->email->from('admin@hat.xcode.or.id', 'Konfirmasi pendaftaran');
        $this->email->to('fendithuk@gmail.com');

        $this->email->subject('Konfirmasi pendaftaran');
        $this->email->message('Thanks for your partipation in this event, segera lakukan
            pembayaran untuk segera mendapakat tempat karena tempat terbatas. klik link 
            http://hat.xcode.or.id/faq#bayar untuk mengetahui cari pembayaran...
            terima kasih
                admin');

        $this->email->send();

        echo $this->email->print_debugger();
    }

}

?>
