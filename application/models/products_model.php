<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Products_model extends Abstract_model {

    protected $_table;
    protected $_primary_key;

    function __construct() {
        // Call the Model constructor
        parent::__construct();
        $this->_table = "products";
        $this->_primary_key = "id";
    }
    
    function getAll($offset, $limit){
        $resutl = $this->fetchAll($this->_table, $offset, $limit);
        if($resutl){
            return $resutl;
        }
        return NULL;
    }
    
    function getProductById($id){
        if(empty($id)){
            return null;
        }
        $result = $this->fetchOneRow($this->_table, array('id'=>$id));
        return $result;
    }
    
    function getAllByCatId($catId, $offset = NULL, $limit = NULL) {
        $this->db->select('products.id,category_id,product_name_en,product_name_vi,description_en,description_vi,product_image,category_name_en,category_name_en');
        $this->db->join('product_categories', "product_categories.id = products.category_id");
        $this->db->where('category_id', $catId);        
        if (!empty($limit)) {
            $this->db->limit($limit, $offset);
        }
        $query = $this->db->get('products');
        return $query->result_array();
    }
}

?>