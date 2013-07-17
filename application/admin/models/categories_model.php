<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Categories_model extends CI_Model {

    function __construct() {
        // Call the Model constructor
        parent::__construct();
        $this->load->helper("upload_helper");
    }

    function getAll() {
        $query = $this->db->get('product_categories');
        return $query->result();
    }

    function getCatForSelectBox(){
        $cats = array(""=>"--Select--");
        $listCats = $this->getAll();
        foreach ($listCats as $cat){
            $cats[$cat->id] = $cat->category_name_en."-".$cat->category_name_vi;
        }
        return $cats;
    }
            
    function getById($id) {
        $this->db->where('id', $id);
        $query = $this->db->get("product_categories", 1);
        return $query->row_array();
    }

    function edit($data, $id) {
        $array = array();        
        $array['category_name_vi'] = $data['category_name_vi'];
        $array['category_name_en'] = $data['category_name_en'];
        
        // upload image logo
        $image = uploadFile("image", BASEPATH."../public/images/products/"); 
        if(!empty($image['file_name'])){
            $array['image'] = $image['file_name'];
            removeFile(BASEPATH . "../public/images/products/" . $_POST['old_image']);
        }
        return $this->db->update('product_categories', $array, array('id' => $id));
    }

    function delete($id) {
        $cat = $this->getById($id);
        if (!empty($cat)) {            
            removeFile(BASEPATH . "../public/images/products/" . $cat['image']);
            return $this->db->delete("product_categories", array('id' => $id));
        }
        return FALSE;
    }

    function add($data){
        $array = array();        
        $array['category_name_vi'] = $data['category_name_vi'];
        $array['category_name_en'] = $data['category_name_en'];
        $array['createdby'] = USER_ID;
        
        // upload image logo
        $image = uploadFile("image", BASEPATH."../public/images/products/");
        if(!empty($image['file_name'])){
            $array['image'] = $image['file_name'];
        }
        return $this->db->insert("product_categories", $array);
    }
}

?>