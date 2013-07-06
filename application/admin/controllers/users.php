<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Users extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model("Users_model");        
    }

    public function index() {
        $data['listUsers'] = $this->Users_model->getAll();
        $data['bodycontent'] = 'users/index';
        $this->load->view("layouts/index", $data);
    }

    public function add() {
        if (ispost()) {
            $add = $this->Users_model->add($_POST);
            if ($add && empty($add['error'])) {
                redirect(base_url() . "admin/index.php/users", "location");
            } else {
                $data['error'] = $add;
                $data['info'] = $_POST;
            }
        }
        $data['bodycontent'] = 'users/add';
        $this->load->view("layouts/index", $data);
    }

    public function edit($id) {
        $data['user'] = $this->Users_model->getById($id);
        if (ispost()) {
            $_POST['oldEmail'] = $data['user']['email'];
            $_POST['oldUsername'] = $data['user']['username'];
            $edit = $this->Users_model->edit($_POST, $id);
            if ($edit && empty($edit['error'])) {
                redirect(base_url() . "admin/index.php/users", "location");
            } else {
                $data['error'] = $edit;
                $data['user'] = $_POST;
            }
        }
        $data['bodycontent'] = 'users/edit';
        $this->load->view("layouts/index", $data);
    }

    public function delete($id) {
        if ($this->Users_model->delete($id)) {
            redirect(base_url() . "admin/index.php/users", "location");
        }
    }

    public function forgotpassword(){
        $data['bodycontent'] = "users/forgotpassword";  
        if(ispost()){
             $result = $this->Users_model->forgotPassword($_POST['email'], "");
             if($result && empty($result['error'])){
                 $data['alert'] = "Please read email and login again!";
                 $data['success'] = 1;
             }else{
                 $data['alert'] = $result['error'];
             }
        }
        $this->load->view("layouts/login", $data);
    }
    
    public function login() {
        $data = array();
        $this->session->set_userdata("users", null);
        if (count($_POST) > 0) {
            $isSuccess = $this->Users_model->checkLogin($_POST['username'], $_POST['password']);
            if ($isSuccess) {
                redirect(base_url() . 'admin/index.php', 'location');
            }else{
                $data['login'] = $_POST;
                $data['alert'] = "The username or password you entered is invalid.";
            }
        }
        $data['bodycontent'] = "users/login";
        $this->load->view('layouts/login', $data);
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */