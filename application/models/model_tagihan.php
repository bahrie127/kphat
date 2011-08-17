<?php

class Model_tagihan extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function add($data) {
        $insert = $this->db->insert('tagihan', $data);
        return $insert;
    }

    function update_data($id, $data) {
        $this->db->where('codepembayaran', $id);
        $this->db->update('tagihan', $data);
    }

    function get_all() {
        $query = $this->db->get('tagihan');
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return FALSE;
        }
    }

    function insert_to_pemasukan($data) {
        $insert = $this->db->insert('pemasukan', $data);
        return $insert;
    }

    

}

?>
