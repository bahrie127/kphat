<?php

class Model_admin extends CI_Model {

    function __construct() {
        parent::__construct();
        }

        function validate_login($username, $password)
	{
		$this->db->where('username', $username);
		$this->db->where('password', md5($password));
		
		$query = $this->db->get('admin');
		
		return $query;
	}
        
        function add($data){
            $insert=$this->db->insert('admin',$data);
            return $insert;
        }
        
        function check_username($id = '')
	{
		$this->db->where('username', $data['username']);
		
		if($id != '') $this->db->where('codeadmin !=', $id);
		$query = $this->db->get('admin');

		if ($query->num_rows() > 0)
		{
			return FALSE;
		}
		else
		{
			return TRUE;
		}
	}
        
        function update_data($id,$data)
	{
		$this->db->where('codeadmin', $id);
		$update = $this->db->update('admin', $data);
		return $update;
	}

	function delete_data($id){
		$this->db->where('codeadmin', $id);
		$delete = $this->db->delete('admin');
		return $delete;
	}
        
        function get_all(){
            $query = $this->db->get('admin');
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
		$this->db->where('codeadmin', $id);
		$query = $this->db->get('admin');
		if ($query->num_rows() > 0)
		{
			return $query->result();
		}
		else
		{
			return FALSE;
		}
	}
        
        function get_data_by_name($name)
	{
		$this->db->where('nama', $name);
		$query = $this->db->get('admin');
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
