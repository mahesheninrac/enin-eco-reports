<?php
defined('BASEPATH') or exit('No direct script access allowed');

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
|	https://codeigniter.com/userguide3/general/routing.html
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
$route['default_controller'] = 'Ecosystem';
$route['404_override'] = 'Default_Controler/error404';
$route['translate_uri_dashes'] = FALSE;
$route["product_page"] = 'Ecosystem/product';
$route["custom_page"] = 'Ecosystem/custom';
$route["contact_us"] = 'Ecosystem/contact';
$route["login"] = 'Ecosystem/login';
$route["event"] = 'Ecosystem/event';
$route["reports"] = 'Ecosystem/reports';
$route["market-sizing-ev-market"] = 'Ecosystem/ev_market';
$route["market-sizing-ev-tyer-market"] = 'Ecosystem/ev_tyer_market';
$route["market-sizing-ev-transmission-market"] = 'Ecosystem/ev_transmission_market';
$route["market-sizing-ev-evci-market"] = 'Ecosystem/ev_evci_market';
$route["survey"] = 'Ecosystem/survey';
$route["membership"] = 'Ecosystem/membership';
$route["test"] = 'Ecosystem/test';
$route["test2"] = 'Ecosystem/test2';
$route["landing_menu"] = 'Ecosystem/landing_menu';

// backend routes
$route['backend-dashboard'] = 'backend/panel';
$route['backend-dashboard/autho/(:any)'] = 'backend/autho/$1';
$route['(:any)'] = 'Omnicore/page/$1';
