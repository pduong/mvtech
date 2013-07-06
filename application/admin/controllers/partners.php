<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Partners extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model("Partners_model");
    }

    public function index() {
        $data['listPartners'] = $this->Partners_model->getAll();
        $data['bodycontent'] = 'partners/index';
        $this->load->view("layouts/index", $data);
    }

    public function add() {
        if (ispost()) {
            if ($this->Partners_model->add($_POST)) {
                redirect(base_url() . "admin/index.php/partners", "location");
            }
        }
        $data['bodycontent'] = 'partners/add';
        $this->load->view("layouts/index", $data);
    }

    public function edit($id) {
        if (ispost()) {
            if ($this->Partners_model->edit($_POST, $id)) {
                redirect(base_url() . "admin/index.php/partners", "location");
            }
        }
        $data['partner'] = $this->Partners_model->getById($id);
        $data['bodycontent'] = 'partners/edit';
        $this->load->view("layouts/index", $data);
    }

    public function delete($id) {
        if ($this->Partners_model->delete($id)) {
            redirect(base_url() . "admin/index.php/partners", "location");
        }
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */