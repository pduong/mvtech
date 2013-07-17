<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Products extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model("Products_model");
        $this->load->model("Categories_model");
        $this->load->helper("pagination");
    }

    public function index() {
        $data['bodycontent'] = "products/cat_index";
        $data['listCats'] = $this->Categories_model->getAll(NULL, NULL);
        $this->load->view('layouts/index', $data);
    }

    public function detail($idStr) {
        $id = getIdFromStr($idStr);
        $data['product'] = $this->Products_model->getProductById($id);
        $data['bodycontent'] = "products/detail";
        $this->load->view('layouts/index', $data);
    }

    public function listproduct($strId) {
        $id = getIdFromStr($strId);
        $cat = $this->Categories_model->getCatById($id);
        $data['cat'] = $cat;              
        $url = '/products/listproduct/' . convertViToEn($cat['category_name_' . LANG], $id) . "/";
        $total = count($this->Products_model->getAllByCatId($id));
        $pagination = pagination($url, $total, PER_PAGE, 4, 4);
        $data['pagination'] = $pagination->create_links();
        
        $offset = $this->uri->segment(4, 0);
        $data['bodycontent'] = "products/index";
        $data['listProducts'] = $this->Products_model->getAllByCatId($id, $offset, 1);
        $this->load->view('layouts/index', $data);
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */