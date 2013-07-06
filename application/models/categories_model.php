<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Categories_model extends Abstract_model {

    protected $_table;
    protected $_primary_key;

    function __construct() {
        // Call the Model constructor
        parent::__construct();
        $this->_table = "product_categories";
        $this->_primary_key = "id";
    }
    
    function getAll($offset, $limit){
        $resutl = $this->fetchAll($this->_table, $offset, $limit);
        if($resutl){
            return $resutl;
        }
        return NULL;
    }
    
    function getCatById($id){
        if(empty($id)){
            return null;
        }
        $result = $this->fetchOneRow($this->_table, array('id'=>$id));
        return $result;
    }
}

?>