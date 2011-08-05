<?php

class Model_batal extends CI_Model {

    function __construct() {
        parent::__construct();
        }

        function add(){
            $insert=$this->db->insert('batalpembayaran',$data);
            return $insert;
        }
        
}
?>
