<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Customers extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model("Customers_model");
    }

    public function index() {
        $data['listCustomers'] = $this->Customers_model->getAll();
        $data['bodycontent'] = 'customers/index';
        $this->load->view("layouts/index", $data);
    }

    public function add() {
        if (ispost()) {
            if ($this->Customers_model->add($_POST)) {
                redirect(base_url() . "admin/index.php/customers", "location");
            }
        }
        $data['bodycontent'] = 'customers/add';
        $this->load->view("layouts/index", $data);
    }

    public function edit($id) {
        if (ispost()) {
            if ($this->Customers_model->edit($_POST, $id)) {
                redirect(base_url() . "admin/index.php/customers", "location");
            }
        }
        $data['customer'] = $this->Customers_model->getById($id);
        $data['bodycontent'] = 'customers/edit';
        $this->load->view("layouts/index", $data);
    }

    public function delete($id) {
        if ($this->Customers_model->delete($id)) {
            redirect(base_url() . "admin/index.php/customers", "location");
        }
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */