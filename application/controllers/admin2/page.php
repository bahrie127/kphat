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
        if (!$this->ion_auth->logged_in()) {
            redirect('/login', 'refresh');
        } else {
            $this->load->model('model_page');
            $this->load->helper('date');
            $this->load->library('form_validation');
        }
    }

    function index() {
        $data['kategori'] = $this->model_page->get_all_group();
        $data['data'] = $this->model_page->get_all_page();
        $this->load->view('admin2/header');
        $this->load->view('admin2/admin2view/fpage', $data);
        $this->load->view('admin2/footer');
    }

    function add() {

        $this->form_validation->set_rules('judul', 'Full Name', 'required|xss_clean');
        $this->form_validation->set_rules('isi', 'Full Name', 'required|xss_clean');
        $this->form_validation->set_rules('kategori', 'Full Name', 'required|xss_clean');

        if ($this->form_validation->run() == TRUE) {

            $datestring = "%Y-%m-%d";
            $time = time();
            $date = mdate($datestring, $time);
            $datapage = array(
                'judul' => $this->input->post('judul'),
                'isi' => $this->input->post('isi'),
                'tanggal' => $date,
                'codegroup' => $this->input->post('kategori')
            );

            $this->model_page->add($datapage);
            redirect('admin2/page');
        } else {
            redirect('admin2/page');
        }
    }

    function edit($id="") {
        if ($this->model_page->get_page_by_id($id) == FALSE) {
            $data['data'] = array();
            redirect('admin2/page');
        } else {
            $data['data'] = $this->model_page->get_page_by_id($id);
            $data['kategori'] = $this->model_page->get_all_group();
            $this->load->view('admin2/header');
            $this->load->view('admin2/admin2view/masterView/feditpage', $data);
            $this->load->view('admin2/footer');
        }
    }

}

?>
