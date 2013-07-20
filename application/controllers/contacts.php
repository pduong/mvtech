<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Contacts extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model("Contact_model");
    }

    public function index() {
        $data['bodycontent'] = "contacts/index";
        if (ispost()) {
            if($this->Contact_model->sendEmail()){
                $data['msg'] = "Ok";
            }else{
                $data['msg'] = "Fail";
            }
        }
        $this->load->view('layouts/index', $data);
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */