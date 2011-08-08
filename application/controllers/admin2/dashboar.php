<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of dashboar
 *
 * @author phepen
 */
class Dashboar extends CI_Controller{
    //put your code here
    public function __construct() {
        parent::__construct();
        if (!$this->ion_auth->logged_in())
		{
			redirect('/login');
		}
    }
    
    function index(){
        $this->load->view('admin2/header');
        $this->load->view('admin2/admin2view/fdashboar');
        $this->load->view('admin2/footer');
    }
}

?>
