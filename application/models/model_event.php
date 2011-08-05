<?php

class Model_event extends CI_Model {

    function __construct() {
        parent::__construct();
        }

          function add($data){
            $insert=$this->db->insert('event',$data);
            return $insert;
        }
        
         function update_data($id,$data)
	{
		$this->db->where('codeivent', $id);
		$update = $this->db->update('event', $data);
		return $update;
	}

	function delete_data($id){
		$this->db->where('codeevent', $id);
		$delete = $this->db->delete('event');
		return $delete;
	}
        
        function get_all(){
            $query = $this->db->get('event');
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
		$this->db->where('codeevent', $id);
		$query = $this->db->get('event');
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
		$this->db->where('namaevent', $name);
		$query = $this->db->get('event');
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
