<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

################################################
# Pagination Feature 
# Auth: phuc.duong
# Required: jquery, form_helper
################################################

if ( ! function_exists('currenturl'))
{
	function currenturl() {
                 $pageURL = 'http';
                 if (!empty($_SERVER["HTTPS"]) && $_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
                 $pageURL .= "://";
                 if ($_SERVER["SERVER_PORT"] != "80") {
                    $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
                 } else {
                $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
                }

                return $pageURL;
        }	
}