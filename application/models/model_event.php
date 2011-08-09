<?php

class Model_event extends CI_Model {

    var $gallery_path;
    var $gallery_path_url;

    function __construct() {
        parent::__construct();
        $this->gallery_path = realpath(APPPATH . '../images');
        $this->gallery_path_url = base_url() . 'images/';
    }

    function add($data) {
        $insert = $this->db->insert('event', $data);
        return $insert;
    }

    function update_data($id, $data) {
        $this->db->where('codeivent', $id);
        $update = $this->db->update('event', $data);
        return $update;
    }

    function delete_data($id) {
        $this->db->where('codeevent', $id);
        $delete = $this->db->delete('event');
        return $delete;
    }

    function get_all() {
        $query = $this->db->get('event');
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return FALSE;
        }
    }

    function get_data_by_id($id) {
        $this->db->where('codeevent', $id);
        $query = $this->db->get('event');
        if ($query->num_rows() > 0) {
            return $query->row_array();
        } else {
            return FALSE;
        }
    }

    function get_data_by_name($name) {
        $this->db->where('namaevent', $name);
        $query = $this->db->get('event');
        if ($query->num_rows() > 0) {
            return $query->row_array();
        } else {
            return FALSE;
        }
    }
    
    function do_upload() {
		
		$config = array(
			'allowed_types' => 'jpg|jpeg|gif|png',
			'upload_path' => $this->gallery_path,
			'max_size' => 2000
		);
		
		$this->load->library('upload', $config);
		$this->upload->do_upload();
		$image_data = $this->upload->data();
		
		$config = array(
			'source_image' => $image_data['full_path'],
			'new_image' => $this->gallery_path . '/thumbs',
			'maintain_ration' => true,
			'width' => 150,
			'height' => 100
		);
		
		$this->load->library('image_lib', $config);
		$this->image_lib->resize();
		
	}

}

?>
