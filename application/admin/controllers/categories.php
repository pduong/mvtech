<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Categories extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model("Categories_model");
    }

    public function index() {
        $data['listCats'] = $this->Categories_model->getAll();
        $data['bodycontent'] = 'categories/index';
        $this->load->view("layouts/index", $data);
    }

    public function add() {
        if (ispost()) {
            if ($this->Categories_model->add($_POST)) {
                redirect(base_url() . "admin/index.php/categories", "location");
            }
        }
        $data['bodycontent'] = 'categories/add';
        $this->load->view("layouts/index", $data);
    }

    public function edit($id) {
        if (ispost()) {
            if ($this->Categories_model->edit($_POST, $id)) {
                redirect(base_url() . "admin/index.php/categories", "location");
            }
        }
        $data['cat'] = $this->Categories_model->getById($id);
        $data['bodycontent'] = 'categories/edit';
        $this->load->view("layouts/index", $data);
    }

    public function delete($id) {
        if ($this->Categories_model->delete($id)) {
            redirect(base_url() . "admin/index.php/categories", "location");
        }
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */