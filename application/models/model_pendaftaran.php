<?php

class Model_pendaftaran extends CI_Model {

    function __construct() {
        parent::__construct();
        }

        function add($data){
            $insert=$this->db->insert('pendaftaran',$data);
            return $insert;
        }
        
        function get_by_user($id){
            $this->db->where('codeuser',$id);
            $query=$this->db->get('pendaftaran');
            if($query->num_rows()>0){
                return $query->result();
            }else{
                return array();
            }
        }
        
        function get_by_jadwal_event($id){
            $this->db->where('codejadwalevent',$id);
            $query=$this->db->get('pendaftaran');
            if($query->num_rows()>0){
                return $query->result();
            }else{
                return array();
            }
        }
        
        function get_all(){
            $query = $this->db->get('pendaftaran');
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
