<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Authen {
    private $_noCheckLogin = array('user' => array('login'));
    
    public function checkLogin(){
        $CI = & get_instance();
        $segments = $CI->router->uri->segments;       
        if(!$this->_inResourceNoCheck($segments)){
            /*$CI->load->library('session');
            $userLoginId =  $CI->session->userdata('admin_UserId');
            if(empty($userLoginId)){
               redirect(base_url().'user/login'); 
            }*/
            $userLoginId = get_cookie('admin_UserId');
            if(empty($userLoginId)){
               redirect(base_url().'user/login'); 
            }
        }
    }
    
    /**
     * Check in resource no
     * @author tien.nguyen
     */
    private function _inResourceNoCheck($segments){
        foreach($this->_noCheckLogin as $key => $item){
            if(isset($segments[1]) && $key == $segments[1]){
                if(isset($segments[2])){           	 
                    if(is_array($item)){
                        if(in_array($segments[2], $item)){
                            return true;
                        }
                    }else{
                        return true;
                    }
                }
            }
        }    
        return false;        
    }
}
?>