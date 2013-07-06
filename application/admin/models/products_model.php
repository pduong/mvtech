<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Products_model extends CI_Model {

    function __construct() {
        // Call the Model constructor
        parent::__construct();
        $this->load->helper("upload_helper");
    }

    function getAll() {
        $this->db->select('products.id,category_id,product_name_en,product_name_vi,description_en,description_vi,product_image,category_name_en,category_name_en');
        $this->db->join('product_categories', "product_categories.id = products.category_id");
        $query = $this->db->get('products');
        return $query->result();
    }

    function getById($id) {
        $this->db->where('id', $id);
        $query = $this->db->get("products", 1);
        return $query->row_array();
    }

    function edit($data, $id) {
        unset($data['section']);
        unset($data['old_image']);
        
        // upload image logo
        $image = uploadFile("product_image", BASEPATH."../public/images/products/");
        if(!empty($image['file_name'])){
            $data['product_image'] = $image['file_name'];
            removeFile(BASEPATH . "../public/images/products/" . $_POST['old_image']);
        }
        return $this->db->update('products', $data, array('id' => $id));
    }

    function delete($id) {
        $customer = $this->getById($id);
        if (!empty($customer)) {            
            removeFile(BASEPATH . "../public/images/products/" . $customer['logo']);
            return $this->db->delete("products", array('id' => $id));
        }
        return FALSE;
    }

    function add($data){
        unset($data['section']);
        unset($data['old_image']);

        $data['createdby'] = USER_ID;
        // upload image logo
        $image = uploadFile("product_image", BASEPATH."../public/images/products/");
        if(!empty($image['file_name'])){
            $data['product_image'] = $image['file_name'];
        }
        return $this->db->insert("products", $data);
    }
}

?>