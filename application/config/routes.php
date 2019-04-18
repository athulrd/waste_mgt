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
$route['default_controller'] = 'indexController';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['indexroute'] = 'indexRoutingController';
$route['indexroute/login'] = 'indexRoutingController/login';
$route['indexroute/register'] = 'indexRoutingController/register';


$route['login'] = 'loginController';

$route['indexoption/login'] = 'indexoptionController/login';
$route['indexoption/register'] = 'indexoptionController/register';

$route['menu'] = 'menuController';

$route['menu/add_location'] = 'menuController/add_location';
$route['menu/add_new_bin'] = 'menuController/add_new_bin';
$route['menu/add_new_member'] = 'menuController/add_new_member';
$route['menu/bin_status'] = 'menuController/bin_status';
$route['menu/assign_bin_member'] = 'menuController/assign_bin_member';
$route['menu/addassignbinmember'] = 'menuController/addassignbinmember';
$route['menu/view_members'] = 'menuController/view_members';

$route['menu/invoice'] = 'menuController/invoice';
$route['menu/profile'] = 'menuController/profile';
$route['menu/login'] = 'menuController/login';
$route['menu/register'] = 'menuController/register';
$route['menu/f404'] = 'menuController/f404';
$route['menu/f500'] = 'menuController/f500';
$route['menu/blank'] = 'menuController/blank';
$route['menu/pace'] = 'menuController/pace';

$route['Menudata/add_location']= 'Menudata/add_location';
$route['Menudata/add_new_member']= 'Menudata/add_new_member';
$route['Menudata/addbin']= 'menuController/addbin';

$route['menu/trial'] = 'menuController/trial';
$route['datacollection/datatablegetconnectivitydata'] = 'menuController/datatablegetconnectivitydata';

$route['view/trial'] = 'viewController/trial';
$route['datacollection/bindatatablegetconnectivitydata'] = 'statusController/bindatatablegetconnectivitydata';


