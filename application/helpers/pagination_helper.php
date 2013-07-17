<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
if ( ! function_exists('pagination'))
{
    function pagination($url, $total, $perPage, $uriSeg, $numLink){
        $CI = & get_instance();
        $CI->load->library('pagination');
        $config['base_url'] = $url;
        $config['total_rows'] = $total;
        $config['per_page'] = $perPage;
        $config['uri_segment'] = $uriSeg;
        $config['num_links'] = $numLink;     
        $config['full_tag_open'] = '<div class="pagination"><ul>';
        $config['full_tag_close'] = '</ul></div>';
        $config['num_tag_open'] = "<li>";
        $config['num_tag_close'] = "</li>";
        $config['cur_tag_open'] = "<li  class='active'><a href='#'>";
        $config['cur_tag_close'] = "</a></li>";
        $config['first_tag_open'] = "<li>";
        $config['first_tag_close'] = "</li>";
        $config['last_tag_open'] = "<li>";
        $config['last_tag_close'] = "</li>";
        $config['next_tag_open'] = "<li>";
        $config['next_tag_close'] = "</li>";
        $config['prev_tag_open'] = "<li>";
        $config['prev_tag_close'] = "</li>";        
        
        $CI->pagination->initialize($config);
        return $CI->pagination;
    }
}
