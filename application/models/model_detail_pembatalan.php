<?php

class Model_detail_pembatalan extends CI_Model {

    function __construct() {
        parent::__construct();
        }

        function add($data){
            $insert=$this->db->insert('detailbatalpembayaran',$data);
            return $insert;
        }
        
        function change_status_detail_tagih($codepembayaran,$codejadwal,$data){
            $this->db->where('codepembayaran', $codepembayaran);
            $this->db->where('codejadwalevent', $codejadwal);
		$update = $this->db->update('detailtagihan', $data);
		return $update;
        }
}
?>
