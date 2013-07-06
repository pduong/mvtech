<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/
$route['default_controller'] = "products";

$route['vi'] = $route['default_controller'];
$route['en'] = $route['default_controller'];
$route['vi/(:any)'] = "$1";
$route['en/(:any)'] = "$1";

// static content
$route['solutions']    = "staticcontent/index/SOLUTION";
$route['news']         = "staticcontent/index/NEWS";
$route['careers']      = "staticcontent/index/CAREERS";
$route['services']     = "staticcontent/index/SERVICE";
$route['white-papers'] = "staticcontent/index/WHITE_PAPER";
$route['about-us']     = "staticcontent/index/ABOUT_US";

$route['vi/solutions']       = "staticcontent/index/SOLUTION";
$route['vi/news']            = "staticcontent/index/NEWS";
$route['vi/careers']         = "staticcontent/index/CAREERS";
$route['vi/services']        = "staticcontent/index/SERVICE";
$route['vi/white-papers']    = "staticcontent/index/WHITE_PAPER";
$route['vi/about-us']        = "staticcontent/index/ABOUT_US";

$route['en/solutions']       = "staticcontent/index/SOLUTION";
$route['en/news']            = "staticcontent/index/NEWS";
$route['en/careers']         = "staticcontent/index/CAREERS";
$route['en/services']        = "staticcontent/index/SERVICE";
$route['en/white-papers']    = "staticcontent/index/WHITE_PAPER";
$route['en/about-us']        = "staticcontent/index/ABOUT_US";

$route['404_override'] = '';

/* End of file routes.php */
/* Location: ./application/config/routes.php */