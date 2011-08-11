<?php

class Model_detail_pembatalan extends CI_Model {

    function __construct() {
        parent::__construct();
        }

        function add($data){
            $insert=$this->db->insert('detailbatalpembayaran',$data);
            return $insert;
        }
}
?>
