<?php

class Model_tempat extends CI_Model {

    function __construct() {
        parent::__construct();
        }

          function add($data){
            $insert=$this->db->insert('tempat',$data);
            return $insert;
        }
        
         function update_data($id,$data)
	{
		$this->db->where('codetempat', $id);
		$update = $this->db->update('tempat', $data);
		return $update;
	}

	function delete_data($id){
		$this->db->where('codetempat', $id);
		$delete = $this->db->delete('tempat');
		return $delete;
	}
        
        function get_all(){
            $query = $this->db->get('tempat');
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
		$this->db->where('codetempat', $id);
		$query = $this->db->get('tempat');
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
		$this->db->where('namatempat', $name);
		$query = $this->db->get('tempat');
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
