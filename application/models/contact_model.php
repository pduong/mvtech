<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Contact_model extends Abstract_model {

    protected $_table;
    protected $_primary_key;

    function __construct() {
        // Call the Model constructor
        parent::__construct();
        $this->_table = "contacts";
        $this->_primary_key = "id";
    }        
    
    function getById($id = NULL){
        if(empty($id)){
            $result = $this->fetchOneRow($this->_table);
        }else{
            $result = $this->fetchOneRow($this->_table, array('id'=>$id));
        }
        return $result;
    }
}

?>