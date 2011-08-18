<?php

class Model_pengeluaran extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function get_pengeluaran($date1, $date2) {
        $sql = "select sum(nilaikeluar) as keluar from pengeluaran where tanggalkeluar between ? and ?";
        $query = $this->db->query($sql, array($date1, $date2));
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return FALSE;
        }
    }

}

?>
