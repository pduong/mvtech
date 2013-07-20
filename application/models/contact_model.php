<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Contact_model extends Abstract_model {

    protected $_table;
    protected $_primary_key;

    function __construct() {
        // Call the Model constructor
        parent::__construct();
        $this->_table = "contacts";
        $this->_primary_key = "id";
    }        
    
    // get data contact
    function getById($id = NULL){
        if(empty($id)){
            $result = $this->fetchOneRow($this->_table);
        }else{
            $result = $this->fetchOneRow($this->_table, array('id'=>$id));
        }
        return $result;
    }
    
    function sendEmail(){        
        $contact  = $this->getById();
        $sender   = $this->input->post("email");
        $name     = $this->input->post("name");
        $subject  = $this->input->post("name")." from contact MTech";
        $message  = "<b>Name:</b> ".$this->input->post("name")." <br/>";
        $message .= "<b>Company:</b> ".$this->input->post("Company")." <br/>";
        $message .= "<b>Phone:</b> ".$this->input->post("phone")." <br/>";
        $message .= "<b>Email:</b> ".$this->input->post("email")." <br/>";
        $message .= "<b>Content:</b> ".$this->input->post("contents")." <br/>";
        return send_emailMailer($contact['email'], $sender, $name, $subject, $message);
    }
}

?>