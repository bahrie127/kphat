<?php

class Model_pemasukan extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function get_pemasukan($date1, $date2) {
        $sql = "select sum(nilaimasuk) as masuk from pemasukan where tanggalmasuk between ? and ?";
        $query = $this->db->query($sql, array($date1, $date2));
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return FALSE;
        }
    }

    function get_data_pemasukan($date1,$date2){
        $sql = "select * from pemasukan where tanggalmasuk between ? and ?";
         $query = $this->db->query($sql, array($date1, $date2));
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return FALSE;
        }
    }
}

?>
