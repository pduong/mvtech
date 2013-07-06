<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Authenticate {

    var $CI;

    function __construct() {
        $this->CI = & get_instance();
    }

    // check authentication
    function isAuthen() {
        if (!$this->CI->session->userdata("users") && $this->CI->uri->uri_string != "users/login" && $this->CI->uri->uri_string != "users/forgotpassword") {
            redirect(base_url() . 'admin/index.php/users/login', 'location');
        }
        $info = $this->CI->session->userdata("users");
        if( !defined ( "USER_ID" ) ){
            define("USER_ID", $info['id']);
        }
    }

}

?>