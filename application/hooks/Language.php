<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Language {

    var $CI;

    function __construct() {
        $this->CI = & get_instance();
    }

    // load lang
    function loadLang() {
        $url = $this->CI->uri->uri_string; 
        if($this->_checkLangVi($url)){
            $this->CI->lang->load('templates', 'vietnamese');
            define("LANG", "vi");
        }else{
            $this->CI->lang->load('templates', 'english');
            define("LANG", "en");
        }
        
    }
    
    // check lang
    private function _checkLangVi($url){
        $arr_lang = explode("/", $url);
        if(!empty($arr_lang[0]) && $arr_lang[0] == 'vi'){
            return TRUE;
        }
        return FALSE;
        
    }

}

?>