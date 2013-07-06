<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class LoadDefault {

    var $CI;

    function __construct() {
        $this->CI = & get_instance();
    }

    // load lang
    function loadDataDefault() {
        $this->_getContact();
    }
    
    // check lang
    private function _getContact(){
        $this->CI->load->model("Contact_model");
        $contact = $this->CI->Contact_model->getById();
        $this->CI->session->set_userdata("contact", $contact);
    }

}

?>