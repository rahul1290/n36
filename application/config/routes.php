<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'news_ctrl';
$route['about-us'] = 'news_ctrl/about_us';
$route['category/(:any)'] = 'news_ctrl/category';
$route['news/(:any)'] = 'news_ctrl/newsDetailPage/$1'; 
$route['admin'] = 'admin/Admin_ctrl/admin_login';
$route['admin/dashboard'] = 'admin/Admin_ctrl/dashboard';
$route['admin/news'] = 'admin/News_ctrl/newslist';
$route['admin/news/create'] = 'admin/News_ctrl/create';
$route['admin/news/edit/(:any)'] = 'admin/News_ctrl/news_edit/$1';
$route['admin/video'] = 'admin/Videos_ctrl/index';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
