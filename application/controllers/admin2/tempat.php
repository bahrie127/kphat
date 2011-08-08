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
class Tempat extends CI_Controller {

    //put your code here
    public function __construct() {
        parent::__construct();
        $this->load->model('model_tempat');
    }

    function index() {
        if($this->model_tempat->get_all()==FALSE){
            $data['data']=array();
        }else{
        $data['data']=  $this->model_tempat->get_all();
        }
        
        $this->load->view('admin2/header');
        $this->load->view('admin2/admin2view/ftempat', $data);
        $this->load->view('admin2/footer');
    }

    function edit() {
        $this->load->view('admin2/header');
        $this->load->view('admin2/admin2view/masterView/fedittempat');
        $this->load->view('admin2/footer');
    }

    function add() {
        $data = array(
            'codetempat' => $this->input->post('code'),
            'namatempat' => $this->input->post('nama'),
            'alamat' => $this->input->post('alamat'),
            'telepon' => $this->input->post('telepon'),
            'linkpeta' => $this->input->post('peta')
        );
        $this->model_tempat->add($data);
        $this->index();
    }

    function update() {
        
        $data = array(
            'namatempat' => $this->input->post('namatempat'),
            'alamat' => $this->input->post('alamat'),
            'telepon' => $this->input->post('telephone'),
            'linkpeta' => $this->input->post('linkpeta')
        );
        $id = $this->input->post('codetempat');
        $this->model_tempat->update_data($id, $data);
        $data['data'] = $this->model_tempat->get_all();
         $this->load->view('admin2/admin2view/masterView/showtabletempat',$data);
        
        
    }

    function submit() {
        if ($this->input->post('ajax')) {
            if ($this->input->post('id')) {
                $this->MDaily->update();
                $data['query'] = $this->MDaily->getAll();
                $this->load->view('daily/show', $data);
            } else {
                $this->MDaily->save();
                $data['query'] = $this->MDaily->getAll();
                $this->load->view('daily/show', $data);
            }
        } else {
            if ($this->input->post('submit')) {
                if ($this->input->post('id')) {
                    $this->MDaily->update();
                    redirect('daily/index');
                } else {
                    $this->MDaily->save();
                    redirect('daily/index');
                }
            }
        }
    }
    
    function delete(){
        $id=$this->input->post('id');
        $this->model_tempat->delete_data($id);
        $data['data'] = $this->model_tempat->get_all();
        
        $this->load->view('admin2/admin2view/masterView/showtabletempat',$data);
          
    }

}

?>
