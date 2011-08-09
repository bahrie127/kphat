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
        if (!$this->ion_auth->logged_in()) {
            redirect('/login', 'refresh');
        } else {
            $this->load->model('model_tempat');
            $this->load->model('model_event');
            $this->load->model('model_pemateri');
            $this->load->model('model_jadwal_event');
            $this->load->model('model_join');
        }
    }

    function index() {
        if ($this->model_event->get_all() == FALSE) {
            $data['data'] = array();
        } else {
            $data['event'] = $this->model_event->get_all();
        }

        $data['tempat'] = $this->model_tempat->get_all();
        $data['pemateri'] = $this->model_pemateri->get_all();
        $data['data'] = $this->model_join->get_jadwal_event_admin();

        $this->load->view('admin2/header');
        $this->load->view('admin2/admin2view/fjadwal', $data);
        $this->load->view('admin2/footer');
    }

    function add() {
        $data = array(
            'codejadwalevent' => $this->input->post('codejadwal'),
            'codeevent' => $this->input->post('codeevent'),
            'tanggal' => $this->input->post('tanggal'),
            'waktu' => $this->input->post('waktu'),
            'codepemateri' => $this->input->post('codepemateri'),
            'codetempat' => $this->input->post('codetempat'),
            'harga' => $this->input->post('harga')
        );
        $this->model_jadwal_event->add($data);
    }

    function update() {

        $data = array(
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
    }

}

?>
