<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Staticcontents extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model("StaticContent_model");
    }

    public function index(){
        $data['listStatics'] = $this->StaticContent_model->getAll();
        $data['bodycontent'] = 'staticcontents/index';
        $this->load->view("layouts/index", $data);
    }
    
    public function edit($code){        
        if(ispost()){
            if($this->StaticContent_model->edit($_POST, $code)){                
                redirect(base_url()."admin/index.php/staticcontents", "location");
            }
        }
        $data['static'] = $this->StaticContent_model->getByCode($code);
        $data['bodycontent'] = 'staticcontents/edit';
        $this->load->view("layouts/index", $data);
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */