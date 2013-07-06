<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Staticcontent extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model("StaticContent_model");
    }

    public function index($code) {
        $data['bodycontent'] = "static_content/index";
        $data['content'] = $this->StaticContent_model->getByCode($code);
        $this->load->view('layouts/index', $data);
    }
    
    public function detail($idStr){
        $id = getIdFromStr($idStr);
        $data['product'] = $this->Products_model->getProductById($id);
        $data['bodycontent'] = "products/detail";
        $this->load->view('layouts/index', $data);
    }
    
    public function listproduct($strId){
        $id = getIdFromStr($strId);
        $data['bodycontent'] = "products/index";
        $data['listProducts'] = $this->Products_model->getAllByCatId($id, 0, ITEM_PRODUCT_HOME);
        $this->load->view('layouts/index', $data);
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */