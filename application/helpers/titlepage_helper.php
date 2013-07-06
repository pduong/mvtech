<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

################################################
# Pagination Feature 
# Auth: phuc.duong
# Required: jquery, form_helper
################################################

if ( ! function_exists('titlepage'))
{
	function titlepage($page = NULL, $perpage = NULL){
		$currentPage = 1;
		if($page != NULL && $perpage != NULL){
			$currentPage = $page/$perpage + 1;
		}
		if ($currentPage > 1){
			return " | Page ".$currentPage;
		}
		return "";	 
	}	
}