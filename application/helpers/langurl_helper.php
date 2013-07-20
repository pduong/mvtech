<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * @author Phuc Duong
 * @since 2013/06/16
 */
if ( ! function_exists('langurl')){
    function langurl(){
        return (LANG == "vi")?LANG."/":"";
    }
}
?>
