<?php

class Model_setting_potongan extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function get_nominal_by_nama($nama) {
        $this->db->where('namapotongan', $nama);
        $query = $this->db->get('settingpotongan');
        if ($query->num_rows() > 0) {
            return $query->row_array();
        } else {
            return FALSE;
        }
    }

    function get_all(){
        $query=$this->db->get('settingpotongan');
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return FALSE;
        }
    }
    
     function update_data($id,$data)
	{
		$this->db->where('id', $id);
		$update = $this->db->update('settingpotongan', $data);
		return $update;
	}
    
    
}

?>
