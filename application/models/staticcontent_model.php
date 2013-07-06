<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class StaticContent_model extends Abstract_model {

    protected $_table;
    protected $_primary_key;

    function __construct() {
        // Call the Model constructor
        parent::__construct();
        $this->_table = "static_contents";
        $this->_primary_key = "id";
    }        
    
    function getByCode($code){
        if(empty($code)){
            return null;
        }
        $result = $this->fetchOneRow($this->_table, array('code'=>$code));
        return $result;
    }
}

?>