<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Products extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model("Products_model");
        $this->load->model("Categories_model");
    }

    public function index() {       
        $data['listProducts'] = $this->Products_model->getAll();
        $data['bodycontent'] = 'products/index';
        $this->load->view("layouts/index", $data);
    }

    public function add() {
        if (ispost()) {
            if ($this->Products_model->add($_POST)) {
                redirect(base_url() . "admin/index.php/products", "location");
            }
        }
        $data['categories'] = $this->Categories_model->getCatForSelectBox();
        $data['bodycontent'] = 'products/add';
        $this->load->view("layouts/index", $data);
    }

    public function edit($id) {
        if (ispost()) {
            if ($this->Products_model->edit($_POST, $id)) {
                redirect(base_url() . "admin/index.php/products", "location");
            }
        }
        $data['categories'] = $this->Categories_model->getCatForSelectBox();
        $data['product'] = $this->Products_model->getById($id);
        $data['bodycontent'] = 'products/edit';
        $this->load->view("layouts/index", $data);
    }

    public function delete($id) {
        if ($this->Products_model->delete($id)) {
            redirect(base_url() . "admin/index.php/products", "location");
        }
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */