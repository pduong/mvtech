<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Contacts_model extends CI_Model {

    protected $_table;
    protected $_primary_key;
            function __construct() {
        // Call the Model constructor
        parent::__construct();
        $this->_table = "contacts";
        $this->_primary_key = "id";
        $this->load->helper("upload_helper");
        
    }    

    function getById($id) {
        $this->db->where('id', $id);
        $query = $this->db->get($this->_table, 1);
        return $query->row_array();
    }

    function edit($data, $id) {
        unset($data['section']);
        // upload image logo
        return $this->db->update($this->_table, $data, array('id' => $id));
    }    
}

?>