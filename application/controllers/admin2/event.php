<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of master
 *
 * @author phepen
 */
class Event extends CI_Controller {

//put your code here
    public function __construct() {
        parent::__construct();
        if (!$this->ion_auth->logged_in()) {
            redirect('/login', 'refresh');
        } else {
            $this->load->model('model_event');
        }
    }

    function index() {
        if ($this->model_event->get_all() == FALSE) {
            $data['data'] = array();
        } else {
            $data['data'] = $this->model_event->get_all();
        }

        $this->load->view('admin2/header');
        $this->load->view('admin2/admin2view/fevent', $data);
        $this->load->view('admin2/footer');
    }

    function edit() {
        $this->load->view('admin2/header');
        $this->load->view('admin2/admin2view/masterView/feditevent');
        $this->load->view('admin2/footer');
    }

    function add() {


        $config['upload_path'] = './uploads';
        $config['allowed_types'] = 'jpg|jpeg|gif|png';
        $config['max_size'] = '4000';
        $config['max_width'] = '2000';
        $config['max_height'] = '2000';
        $config['remove_spaces'] = TRUE;

        $this->load->library('upload', $config);
        $data = $this->upload->do_upload('gambar');
        $file = $this->upload->data();
        $uploadedFiles = $file['file_name'];
        
        $data = array(
            'codeivent' => $this->input->post('codeevent'),
            'namaevent' => $this->input->post('namaevent'),

            'gambar' => $uploadedFiles,

            
            'materi' => $this->input->post('materi'),
            'praktek' => $this->input->post('praktek')
        );
        $this->model_event->add($data);

        $this->index();

    }

    function update() {

        $data = array(
            'namaevent' => $this->input->post('namaevent'),
            'materi' => $this->input->post('materi'),
            'praktek' => $this->input->post('praktek')
        );
        $id = $this->input->post('codeevent');
        $this->model_event->update_data($id, $data);
        $data['data'] = $this->model_event->get_all();
        $this->load->view('admin2/admin2view/masterView/showtableevent', $data);
    }

}

?>
