<?php
defined('BASEPATH') OR exit('No direct script access allowed');

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
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/

$route['default_controller'] = 'front/front';

$route['forgotpassword'] = 'front/front/forgotpassword';
$route['reset_password'] = 'front/front/reset_password';
$route['email/verify/(:any)'] = 'front/register/verify_email/$1';
$route['user/(:any)/(:any)'] = 'front/user/$1/$2';
$route['user/(:any)'] = 'front/user/$1';
$route['register/(:any)'] = 'front/register/$1';
$route['userregister'] = 'front/register/register_user';

$route['emailven/verify/(:any)'] = 'front/register/verify_emailven/$1';
$route['vendor/(:any)'] = 'front/vendor/$1';

$route['product_view/(:any)'] = 'front/front/product_view/$1';
$route['product_view/(:any)/(:any)'] = 'front/front/product_view/$1/$1';


$route['style/(:any)'] = 'front/front/style/$1';
$route['style/(:any)/(:any)'] = 'front/front/style/$1/$1';

$route['categories/(:any)'] = 'front/front/categories/$1';
$route['categories/(:any)/(:any)'] = 'front/front/categories/$1/$1';

$route['free_plans/(:any)'] = 'front/front/free_plans/$1';
$route['free_plans/(:any)/(:any)'] = 'front/front/free_plans/$1/$1';

$route['blog'] = 'front/blog';
$route['blog/(:num)'] = 'front/blog';
$route['blog/category/(:any)'] = 'front/blog/blogcategory/$1';
$route['blog/category/(:any)/(:any)'] = 'front/blog/blogcategory/$1/$2';
$route['blog/(:any)'] = 'front/blog/blogdetails/$1';

$route['(:any)'] = 'front/front/$1';

// $route['register/(:any)/(:any)'] = 'front/register/$1/$2';
//$route['rkradmin/dashboard'] = 'admin/dashboard';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
