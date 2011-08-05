<?php

class Eventhat extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('model_join');
    }

    function index() {
        echo 'hello';
    }

}

?>
