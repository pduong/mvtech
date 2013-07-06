<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Customers_model extends CI_Model {

    function __construct() {
        // Call the Model constructor
        parent::__construct();
        $this->load->helper("upload_helper");
    }

    function getAll() {
        $query = $this->db->get('customers');
        return $query->result();
    }

    function getById($id) {
        $this->db->where('id', $id);
        $query = $this->db->get("customers", 1);
        return $query->row_array();
    }

    function edit($data, $id) {
        $array = array();
        $array['brand_vi'] = $data['brand_vi'];
        $array['brand_en'] = $data['brand_en'];
        // upload image logo
        $image_logo = uploadFile("logo", BASEPATH."../public/images/customers/");
        if(!empty($image_logo['file_name'])){
            $array['logo'] = $image_logo['file_name'];
            removeFile(BASEPATH . "../public/images/customers/" . $_POST['old_logo']);
        }
        return $this->db->update('customers', $array, array('id' => $id));
    }

    function delete($id) {
        $customer = $this->getById($id);
        if (!empty($customer)) {            
            removeFile(BASEPATH . "../public/images/customers/" . $customer['logo']);
            return $this->db->delete("customers", array('id' => $id));
        }
        return FALSE;
    }

    function add($data){
        $array = array();
        $array['brand_en'] = $data['brand_en'];
        $array['brand_vi'] = $data['brand_vi'];

        // upload image logo
        $image_logo = uploadFile("logo", BASEPATH."../public/images/customers/");
        if(!empty($image_logo['file_name'])){
            $array['logo'] = $image_logo['file_name'];
        }
        $array['createdby'] = USER_ID;
        return $this->db->insert("customers", $array);
    }
}

?>