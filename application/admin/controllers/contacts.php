<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Contacts extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model("Contacts_model");
    }

    public function index() {       
        $id = 1;        
        if (ispost()) {
            if ($this->Contacts_model->edit($_POST, $id)) {
                $data["alert"] = "Edit successful";
            }
        }
        $data['contact'] = $this->Contacts_model->getById($id);
        $data['bodycontent'] = 'contacts/edit';        
        $this->load->view("layouts/index", $data);
    }    
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */