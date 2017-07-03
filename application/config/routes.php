<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['order']='pages/order';
$route['assets/(:any)'] = 'assets/$1';
$route['default_controller'] = 'pages';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
