<?php

class Model_pembatalan extends CI_Model {

    function __construct() {
        parent::__construct();
        }

        function add($data){
            $insert=$this->db->insert('batalpembayaran',$data);
            return $insert;
        }
        
        function change_status($id,$data){
            $this->db->where('codepembayaran',$id);
            $update=$this->db->update('tagihan',$data);
            return $update;
        }
}
?>
