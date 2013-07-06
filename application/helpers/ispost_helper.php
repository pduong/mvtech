<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * @author Phuc Duong
 * @since 2013/06/16
 */
if ( ! function_exists('ispost')){
    function ispost(){
        if(count($_POST) > 0){
            return true;
        }
        return false;
    }
}
?>
