<?php
class Model_user extends CI_Model {

    function __construct() {
        parent::__construct();
        }

        function get_all(){
            return $this->db->get('user')->result();
        }

        function get_by_id($id){
            $q="select *from user where codeuser=?";
            return $this->db->query($q,$id)->result();
        }
        
        function add($data){
            $insert=$this->db->insert('user',$data);
            return $insert;
        }
        
        function get_by_name($name){
            $q="select *from user where nama=?";
            return $this->db->query($q,$name)->result();
        }
        
}

?>
