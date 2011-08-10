<?php

class Model_sertifikat extends CI_Model {

    function __construct() {
        parent::__construct();
        }

          function add($data){
            $insert=$this->db->insert('sertifikat',$data);
            return $insert;
        }
        
         function update_data($id,$data)
	{
		$this->db->where('codesertifikat', $id);
		$update = $this->db->update('sertifikat', $data);
		return $update;
	}

	function delete_data($id){
		$this->db->where('codesertifikat', $id);
		$delete = $this->db->delete('sertifikat');
		return $delete;
	}
        
        function get_all(){
            $query = $this->db->get('sertifikat');
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
		$this->db->where('codesertifikat', $id);
		$query = $this->db->get('sertifikat');
		if ($query->num_rows() > 0)
		{
			return $query->row_array();
		}
		else
		{
			return FALSE;
		}
	}
        
        function get_data_by_id_user($id)
	{
		$this->db->where('codeuser', $id);
		$query = $this->db->get('sertifikat');
		if ($query->num_rows() > 0)
		{
			return $query->result();
		}
		else
		{
			return FALSE;
		}
	}

        function get_data_by_no_sertifikat($no){
            $this->db->select('sertifikat.nosertifikat as sertifikat_nosertifikat, user.nama as user_nama, user.alamat as user_alamat, user.jeniskelamin as user_jeniskelamin, user.email as user_email,user.tempatlahir as user_tempatlahir, user.tanggallahir as user_tanggallahir');
		$this->db->from('user');
		$this->db->join('sertifikat', 'user.codeuser=sertifikat.codeuser', 'INNER');
                $query = $this->db->get();
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
