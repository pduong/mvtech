<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class StaticContent_model extends CI_Model {

    function __construct() {
        // Call the Model constructor
        parent::__construct();
        $this->load->helper("upload_helper");
    }   
    
    function getAll(){
        $query = $this->db->get('static_contents');
        return $query->result();
    }
    
    function getByCode($code){
        $this->db->where('code', $code);
        $query = $this->db->get("static_contents", 1);
        return $query->row_array();        
    }
    
    function edit($data, $code){
        $array = array();
        $array['content_en'] = $data['content_en'];
        $array['content_vi'] = $data['content_vi'];
        // upload image logo
        $image_logo = uploadFile("image", BASEPATH."../public/images/statics/");
        if(!empty($image_logo['file_name'])){
            $array['image'] = $image_logo['file_name'];
            removeFile(BASEPATH . "../public/images/statics/" . $_POST['old_image']);
        }
        return $this->db->update('static_contents', $array, array('code'=>$code));
    }

}

?>