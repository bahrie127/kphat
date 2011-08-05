<?php

class Model_halaman extends CI_Model {

    function __construct() {
        parent::__construct();
        }

          function add(){
            $insert=$this->db->insert('halaman',$data);
            return $insert;
        }
        
         function update_data($id)
	{
		$this->db->where('codehalaman', $id);
		$update = $this->db->update('halaman', $data);
		return $update;
	}

	function delete_data($id){
		$this->db->where('codehalaman', $id);
		$delete = $this->db->delete('halaman');
		return $delete;
	}
        
        function get_all(){
            $query = $this->db->get('halaman');
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
		$this->db->where('codehalaman', $id);
		$query = $this->db->get('halaman');
		if ($query->num_rows() > 0)
		{
			return $query->row_array();
		}
		else
		{
			return FALSE;
		}
	}

        function get_data_by_judul($judul)
	{
		$this->db->where('judul', $judul);
		$query = $this->db->get('halaman');
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
