<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Customers extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model("Customers_model");
    }

    public function index() {
        $data['bodycontent'] = "customers/index";
        $data['listCustomers'] = $this->Customers_model->getAll();        
        $this->load->view('layouts/index', $data);
    }

    public function detail($idStr) {
        $id = getIdFromStr($idStr);
        $data['product'] = $this->Products_model->getProductById($id);
        $data['bodycontent'] = "partners/detail";
        $this->load->view('layouts/index', $data);
    }

    public function listproduct($strId) {
        $id = getIdFromStr($strId);
        $cat = $this->Categories_model->getCatById($id);
        $data['cat'] = $cat;
        $this->load->library('pagination');
        $config['base_url'] = '/products/listproduct/' . convertViToEn($cat['category_name_' . LANG], $id) . "/";
        $config['total_rows'] = count($this->Products_model->getAllByCatId($id));
        $config['per_page'] = 1;
        $config['uri_segment'] = 4;
        $config['num_links'] = 4;        
        $this->pagination->initialize($config);
        $data['pagination'] = $this->pagination->create_links();

        $offset = $this->uri->segment(4, 0);
        $data['bodycontent'] = "products/index";
        $data['listProducts'] = $this->Products_model->getAllByCatId($id, $offset, 1);
        $this->load->view('layouts/index', $data);
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */