<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Capcha_model extends CI_Model {

    protected $_table;
    protected $_primary_key;

    function __construct() {
        // Call the Model constructor
        parent::__construct();
        $this->_table = "captcha";
        $this->_primary_key = "id";
    }

    function createCapcha() {
        session_start();
        $this->deleteCapcha();
        $vals = array(
            'img_path' => BASEPATH . '../public/capchas/',
            'img_url' => base_url() . 'public/capchas/',
            'img_width'	 => '150',
            'img_height' => 35,
        );
        $cap = create_captcha($vals);
        $data = array(
            'captcha_time' => $cap['time'],
            'ip_address' => $_SERVER['REMOTE_ADDR'],
            'word' => strtolower($cap['word']),
            'session_id' => session_id()
        );
        $this->session->set_userdata("session_id", session_id());
        $query = $this->db->insert_string('captcha', $data);
        if ($this->db->query($query)) {
            return $cap;
        }
        return FALSE;
    }

    function checkCapcha() {
        $expiration = time() - 120; // Two munite limit
        $session_id = $this->session->userdata("session_id");
        // Then see if a captcha exists:
        $sql = "SELECT COUNT(*) AS count FROM captcha WHERE session_id = ? AND word = ? AND ip_address = ? AND captcha_time > ?";
        $binds = array($session_id, strtolower($_POST['captcha']), $_SERVER['REMOTE_ADDR'], $expiration);
        $query = $this->db->query($sql, $binds);
        $row = $query->row();
        
        if ($row->count == 0) {
            return FALSE;
        }
        return TRUE;
    }
    
    function deleteCapcha(){ 
        $session_id = $this->session->userdata("session_id");
        $capchas = $this->db->get_where($this->_table, array("session_id" => $session_id));
        $resutls = $capchas->result();
        $this->_deleteImageCaptcha($resutls);
        
        $expiration = time() - 7200; // Two munite limit
        $capcha_expires = $this->db->get_where($this->_table, array("captcha_time <" => $expiration));        
        $resutlexpires = $capcha_expires->result();
        $this->_deleteImageCaptcha($resutlexpires);        
    }
    
    private function _deleteImageCaptcha($resutls){        
        foreach ($resutls as $capcha){
            removeFile(BASEPATH . '../public/capchas/'.$capcha->captcha_time.".jpg");
            $this->db->delete($this->_table, array("captcha_id" => $capcha->captcha_id));
        }                
    }
}

?>