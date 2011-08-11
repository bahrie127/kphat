<?php
class Model_page extends CI_Model {

    function __construct() {
        parent::__construct();
        }

        function get_data_by_id($id)
	{
		$this->db->where('group', $id);
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
}
?>
