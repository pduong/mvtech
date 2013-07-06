<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Test_model extends Abstract_model {

    protected $_table;
    protected $_primary_key;

    function __construct() {
        // Call the Model constructor
        parent::__construct();
        $this->_table = "users";
        $this->_primary_key = "id";
        $this->load->helper("phpmailer_helper");
    }

    function getAll() {
        $query = $this->db->get($this->_table);
        return $query->result();
    }

    function add($data) {
        unset($data['section']);
        if ($this->isEmailExist($data['email'])) {
            return array("error" => "Email is exist");
        }
        if ($this->isUserNameExist($data['username'])) {
            return array("error" => "Username is exist");
        }
        $data['createdby'] = USER_ID;
        return $this->db->insert($this->_table, $data);
    }

    function isEmailExist($email) {
        $this->db->where("email", $email);
        $query = $this->db->get($this->_table);
        $row = $query->row_array();
        if (!empty($row)) {
            return TRUE;
        }
        return FALSE;
    }

    function isEmailExistInEdit($email, $oldEmail) {
        $this->db->where("email !=", $oldEmail);
        $this->db->where("email", $email);
        $query = $this->db->get($this->_table);
        $row = $query->row_array();
        if (!empty($row)) {
            return TRUE;
        }
        return FALSE;
    }

    function isUserNameExist($username) {
        $this->db->where("username", $username);
        $query = $this->db->get($this->_table);
        $row = $query->row_array();
        if (!empty($row)) {
            return TRUE;
        }
        return FALSE;
    }

    function isUserNameExistInEdit($username, $oldUsername) {
        $this->db->where("username !=", $oldUsername);
        $this->db->where("username", $username);
        $query = $this->db->get($this->_table);
        $row = $query->row_array();
        if (!empty($row)) {
            return TRUE;
        }
        return FALSE;
    }

    function delete($id) {
        $user = $this->getById($id);
        $info = $this->session->userdata($this->_table);
        if (!empty($user) && $id != $info['id']) {
            return $this->db->delete($this->_table, array('id' => $id));
        }
        return FALSE;
    }

    function getById($id) {
        $this->db->where('id', $id);
        $query = $this->db->get($this->_table, 1);
        return $query->row_array();
    }

    function edit($data, $id) {
        if (empty($data['password'])) {
            unset($data['password']);
        } else {
            $data['password'] = md5($data['password']);
        }

        if ($this->isEmailExistInEdit($data['email'], $data['oldEmail'])) {
            return array("error" => "Email is exist");
        }
        if ($this->isUserNameExistInEdit($data['username'], $data['oldUsername'])) {
            return array("error" => "Username is exist");
        }
        unset($data['section']);
        unset($data['oldEmail']);
        unset($data['oldUsername']);
        return $this->db->update($this->_table, $data, array('id' => $id));
    }

    function forgotPassword($email, $message) {
        if (!empty($email) && $this->isEmailExist($email)) {
            $newPassword = "";
            $letter = array("a", "b", "c", "d", "e", "4", "3", "f", "l", "k", "m", "n", "o", "p", "1", "2");
            $max = count($letter) - 1;
            $min = 0;
            for ($i = 0; $i < 8; $i++) {
                $newPassword .= $letter[rand($min, $max)];
            }
            $this->db->where('email', $email);
            $query = $this->db->get($this->_table, 1);
            $result = $query->row_array();
            $message = "Your username is " . $result['username'] . "<br/>";
            $message .= "Your new password is " . $newPassword;
            $this->db->update($this->_table, array("password" => md5($newPassword)), array('email' => $email));
            return send_emailMailer($email, "info@mvtech.com.vn", "mvtech", "Reset Password", $message);
        }
        return array("error" => "Email is invaild");
    }

    function checkLogin($username, $password) {
        $this->db->where("username", $username);
        $this->db->where("password", md5($password));
        $query = $this->db->get($this->_table, 1);
        $result = $query->row_array();
        if (!empty($result)) {
            $this->session->set_userdata($this->_table, $result);
            return true;
        } else {
            return false;
        }
    }
}

?>