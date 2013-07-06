<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * @author Phuc Duong
 * @since 2013/06/16
 */
if (!function_exists('uploadFile')) {

    function uploadFile($filename, $path) {
        $CI = & get_instance();
        $CI->load->library('upload');
        $config['upload_path'] = $path;
        $config['allowed_types'] = $CI->config->item('allowed_types');
        $config['max_size'] = $CI->config->item('max_size');
        $CI->upload->initialize($config);

        if (!$CI->upload->do_upload($filename)) {
            $error = array($CI->upload->display_errors());
            return $error;
        } else {
            $image_logo = $CI->upload->data();
            return $image_logo;
        }
    }

    function removeFile($path) {
        if (file_exists($path)) {
            return unlink($path);
        }
        return FALSE;
    }

}
?>
