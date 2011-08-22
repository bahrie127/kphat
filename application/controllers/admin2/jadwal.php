<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of jadwal
 *
 * @author phepen
 */
class jadwal extends CI_Controller {

    //put your code here
    public function __construct() {
        parent::__construct();
        $this->load->library('auth');
        $this->auth->check_user_authentification();

        $this->load->library('form_validation');
        $this->load->model('model_tempat');
        $this->load->model('model_event');
        $this->load->model('model_pemateri');
        $this->load->model('model_jadwal_event');
        $this->load->model('model_join');
    }

    function index() {
        if ($this->model_event->get_all() == FALSE) {
            $data['event'] = array();

            if ($this->model_tempat->get_all() == FALSE) {

                $data['tempat'] = array();

                if ($this->model_pemateri->get_all() == FALSE) {

                    $data['pemateri'] = array();
                    if ($this->model_join->get_jadwal_event_admin() == FALSE) {
                        $data['data'] = array();
                    } else {
                        $data['data'] = $this->model_join->get_jadwal_event_admin();
                    }
                } else {
                    $data['pemateri'] = $this->model_pemateri->get_all();
                }
            } else {
                $data['tempat'] = $this->model_tempat->get_all();
                if ($this->model_pemateri->get_all() == FALSE) {

                    $data['pemateri'] = array();
                    if ($this->model_join->get_jadwal_event_admin() == FALSE) {
                        $data['data'] = array();
                    } else {
                        $data['data'] = $this->model_join->get_jadwal_event_admin();
                    }
                } else {
                    $data['pemateri'] = $this->model_pemateri->get_all();
                    if ($this->model_join->get_jadwal_event_admin() == FALSE) {
                        $data['data'] = array();
                    } else {
                        $data['data'] = $this->model_join->get_jadwal_event_admin();
                    }
                    $data['data'] = $this->model_join->get_jadwal_event_admin();
                }
                $data['pemateri'] = $this->model_pemateri->get_all();
            }
        } else {
            $data['event'] = $this->model_event->get_all();
            if ($this->model_tempat->get_all() == FALSE) {

                $data['tempat'] = array();

                if ($this->model_pemateri->get_all() == FALSE) {

                    $data['pemateri'] = array();
                    if ($this->model_join->get_jadwal_event_admin() == FALSE) {
                        $data['data'] = array();
                    } else {
                        $data['data'] = $this->model_join->get_jadwal_event_admin();
                    }
                } else {
                    $data['pemateri'] = $this->model_pemateri->get_all();
                }
            } else {
                $data['tempat'] = $this->model_tempat->get_all();
                if ($this->model_pemateri->get_all() == FALSE) {

                    $data['pemateri'] = array();
                    if ($this->model_join->get_jadwal_event_admin() == FALSE) {
                        $data['data'] = array();
                    } else {
                        $data['data'] = $this->model_join->get_jadwal_event_admin();
                    }
                } else {
                    $data['pemateri'] = $this->model_pemateri->get_all();
                    if ($this->model_join->get_jadwal_event_admin() == FALSE) {
                        $data['data'] = array();
                    } else {
                        $data['data'] = $this->model_join->get_jadwal_event_admin();
                    }
                }
            }
        }

        $this->load->view('admin2/header');
        $this->load->view('admin2/admin2view/fjadwal', $data);
        $this->load->view('admin2/footer');
    }

    function add() {

        $this->form_validation->set_rules('codejadwal', 'Full Name', 'required|xss_clean');
        $this->form_validation->set_rules('codeevent', 'Full Name', 'required|xss_clean');
        $this->form_validation->set_rules('tanggal', 'Full Name', 'required|xss_clean');
        $this->form_validation->set_rules('waktu', 'Full Name', 'required|xss_clean');
        $this->form_validation->set_rules('codepemateri', 'Full Name', 'required|xss_clean');
        $this->form_validation->set_rules('codetempat', 'Full Name', 'required|xss_clean');
        $this->form_validation->set_rules('harga', 'Full Name', 'required|xss_clean');

        if ($this->form_validation->run() == TRUE) {
            
            $data = array(
                'codejadwalevent' => $this->input->post('codejadwal'),
                'codenamaevent'=>  $this->input->post('codejadwal'),
                'codeevent' => $this->input->post('codeevent'),
                'tanggal' => $this->input->post('tanggal'),
                'waktu' => $this->input->post('waktu'),
                'codepemateri' => $this->input->post('codepemateri'),
                'codetempat' => $this->input->post('codetempat'),
                'harga' => $this->input->post('harga')
            );
            $this->model_jadwal_event->add($data);
        } else {
            redirect('admin2/jadwal');
        }
    }

    function update() {


        $this->form_validation->set_rules('codeevent', 'Full Name', 'required|xss_clean');
        $this->form_validation->set_rules('tanggal', 'Full Name', 'required|xss_clean');
        $this->form_validation->set_rules('waktu', 'Full Name', 'required|xss_clean');
        $this->form_validation->set_rules('codepemateri', 'Full Name', 'required|xss_clean');
        $this->form_validation->set_rules('codetempat', 'Full Name', 'required|xss_clean');
        $this->form_validation->set_rules('harga', 'Full Name', 'required|xss_clean');

        if ($this->form_validation->run() == TRUE) {

            $data = array(
                'codenamaevent'=>  $this->input->post('codenamaevent'),
                'codeevent' => $this->input->post('codeevent'),
                'codepemateri' => $this->input->post('codepemateri'),
                'codetempat' => $this->input->post('codetempat'),
                'waktu' => $this->input->post('waktu'),
                'tanggal' => $this->input->post('tanggal'),
                'harga' => $this->input->post('harga')
            );
            $id = $this->input->post('codejadwal');
            $this->model_jadwal_event->update_data($id, $data);
            $data['data'] = $this->model_join->get_jadwal_event_admin();
            $this->load->view('admin2/admin2view/acaraView/showtablejadwal', $data);
        } else {
            redirect('admin2/jadwal');
        }
    }

}

?>
