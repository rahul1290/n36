<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'news_ctrl';

$route['category/(:any)'] = 'news_ctrl/category';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
