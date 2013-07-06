<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

################################################
# Pagination Feature 
# Auth: phuc.duong
# Required: jquery, form_helper
################################################

if ( ! function_exists('getid'))
{
	function getid($strUrl){
		$id = explode(".",$strUrl);		
		return $id[count($id)-2];	
	}	
}