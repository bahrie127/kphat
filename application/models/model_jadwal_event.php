<?php

class Model_jadwal_event extends CI_Model {

    function __construct() {
        parent::__construct();
        }

        function add($data){
            $insert=$this->db->insert('jadwalevent',$data);
            return $insert;
        }
        
        function get_all(){
            $query = $this->db->get('jadwalevent');
		if ($query->num_rows() > 0)
		{
			return $query->result();
		}
		else
		{
			return FALSE;
		}
        }
        
}
?>
