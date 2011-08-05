<?php

class Model_detail_tagihan extends CI_Model {

    function __construct() {
        parent::__construct();
        }

        function add($data){
            $insert=$this->db->insert('detailtagihan',$data);
            return $insert;
        }
        
       
}
?>
