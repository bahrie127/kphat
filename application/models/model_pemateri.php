<?php

class Model_pemateri extends CI_Model {

    function __construct() {
        parent::__construct();
        }

        function add($data){
            $insert=$this->db->insert('pemateri',$data);
            return $insert;
        }
        
         function update_data($id,$data)
	{
		$this->db->where('codepemateri', $id);
		$update = $this->db->update('pemateri', $data);
		return $update;
	}

	function delete_data($id){
		$this->db->where('codepemateri', $id);
		$delete = $this->db->delete('pemateri');
		return $delete;
	}
        
        function get_all(){
            $query = $this->db->get('pemateri');
		if ($query->num_rows() > 0)
		{
			return $query->result();
		}
		else
		{
			return FALSE;
		}
        }
        
        function get_data_by_id($id)
	{
		$this->db->where('codepemateri', $id);
		$query = $this->db->get('pemateri');
		if ($query->num_rows() > 0)
		{
			return $query->row_array();
		}
		else
		{
			return FALSE;
		}
	}
        
        function get_data_by_name($name)
	{
		$this->db->where('nama', $name);
		$query = $this->db->get('pemateri');
		if ($query->num_rows() > 0)
		{
			return $query->row_array();
		}
		else
		{
			return FALSE;
		}
	}
        
}
?>
