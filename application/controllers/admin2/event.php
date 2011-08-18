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
        $this->load->library('auth');
        $this->auth->check_user_authentification();

        $this->load->model('model_event');
        $this->load->library('form_validation');
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

    function edit($id="") {
        if ($this->model_event->get_data_by_id($id) == FALSE) {
            $data['data'] = array();
            redirect('admin2/event');
        } else {
            $data['data'] = $this->model_event->get_data_by_id($id);
            $this->load->view('admin2/header');
            $this->load->view('admin2/admin2view/masterView/feditevent', $data);
            $this->load->view('admin2/footer');
        }
    }

    function add() {

        $this->form_validation->set_rules('codeevent', 'Full Name', 'required|xss_clean');
        $this->form_validation->set_rules('namaevent', 'Full Name', 'required|xss_clean');
        // $this->form_validation->set_rules('gambar', 'Full Name', 'required|xss_clean');
        $this->form_validation->set_rules('materi', 'Full Name', 'required|xss_clean');
        $this->form_validation->set_rules('praktek', 'Full Name', 'required|xss_clean');
        
        if ($this->form_validation->run() == TRUE) {

            $config['upload_path'] = './uploads';
            $config['allowed_types'] = 'jpg|jpeg|gif|png|JPG';
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

            //$this->index();
            redirect('admin2/event');
        } else {
            redirect('admin2/event');
        }
    }

    function update() {

        $this->form_validation->set_rules('codeevent', 'Full Name', 'required|xss_clean');
        $this->form_validation->set_rules('namaevent', 'Full Name', 'required|xss_clean');
        // $this->form_validation->set_rules('gambar', 'Full Name', 'required|xss_clean');
        $this->form_validation->set_rules('materi', 'Full Name', 'required|xss_clean');
        $this->form_validation->set_rules('praktek', 'Full Name', 'required|xss_clean');

        if ($this->form_validation->run() == TRUE) {
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
            if ($uploadedFiles == "") {
                $uploadedFiles = $this->input->post('gambar2');
            }

            $data = array(
                'namaevent' => $this->input->post('namaevent'),
                'gambar' => $uploadedFiles,
                'materi' => $this->input->post('materi'),
                'praktek' => $this->input->post('praktek')
            );
            $id = $this->input->post('codeevent');
            $this->model_event->update_data($id, $data);

            redirect('/admin2/event');
        } else {
            redirect('/admin2/event');
        }
    }

}

?>
