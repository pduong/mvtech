<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Partners_model extends CI_Model {

    function __construct() {
        // Call the Model constructor
        parent::__construct();
        $this->load->helper("upload_helper");
    }

    function getAll() {
        $query = $this->db->get('partners');
        return $query->result();
    }

    function getById($id) {
        $this->db->where('id', $id);
        $query = $this->db->get("partners", 1);
        return $query->row_array();
    }

    function edit($data, $id) { 
        unset($data['section']);
        unset($data['old_logo']);
        // upload image logo
        $image_logo = uploadFile("logo", BASEPATH."../public/images/partners/");
        if(!empty($image_logo['file_name'])){
            $data['logo'] = $image_logo['file_name'];
            removeFile(BASEPATH . "../public/images/partners/" . $_POST['old_logo']);
        }
        return $this->db->update('partners', $data, array('id' => $id));
    }

    function delete($id) {
        $partner = $this->getById($id);
        if (!empty($partner)) {            
            removeFile(BASEPATH . "../public/images/partners/" . $partner['logo']);
            return $this->db->delete("partners", array('id' => $id));
        }
        return FALSE;
    }

    function add($data){
        unset($data['section']);
        // upload image logo
        $image_logo = uploadFile("logo", BASEPATH."../public/images/partners/");
        if(!empty($image_logo['file_name'])){
            $data['logo'] = $image_logo['file_name'];
        }
        $data['createdby'] = USER_ID;
        return $this->db->insert("partners", $data);
    }
}

?>