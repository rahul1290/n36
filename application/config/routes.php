<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'news_ctrl';

$route['category/(:any)'] = 'news_ctrl/category';


$route['admin/login'] = 'admin/Admin_ctrl/admin_login';
$route['admin/dashboard'] = 'admin/Admin_ctrl/dashboard';


$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
