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

$route['login'] = 'user/login';
$route['logout'] = 'user/logout';
//$route['admin/(:any)'] = 'admin/view/$1';
//$route['user'] = 'user';
//$route['user/myinfo'] = 'user/myinfo';
$route['forgotPassword'] = 'user/forgotPassword';
$route['employee/home'] = 'queue/viewEmployeeHome';
$route['employee/viewEmployeeList'] = 'employee/viewEmployeeList';
$route['employee/viewAddEmployee'] = 'employee/viewAddEmployee';
$route['employee/myinfo'] = 'employee/myinfo';
$route['employee/addEmployee'] = 'employee/addEmployee';
$route['employee/editEmployee'] = 'employee/editEmployee';
$route['employee/deleteEmployee'] = 'employee/deleteEmployee';
$route['admin/configure'] = 'admin/configure';
$route['admin/myinfo'] = 'admin/myinfo';
$route['logs/employee'] = 'log/viewEmployeeLogs';
$route['logs/admin'] = 'log/viewAdminLogs';
$route['logs/queue'] = 'log/viewQueueLogs';
$route['queue/getPriorityNumber'] = 'queue/getPriorityNumber';
//$route['employee/(:any)'] = 'employee/view/$1';
//$route['employee'] = 'employee';
//$route['(:any)'] = 'pages/view/$1';
$route['aboutTheCompany'] = 'queue/viewAboutTheCompany';
$route['help'] = 'queue/viewCustomerHelp';
$route['default_controller'] = 'queue/viewCustomerHome';


/* End of file routes.php */
/* Location: ./application/config/routes.php */