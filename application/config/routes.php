<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['about'] = 'welcome/about';

// Custom Routes and MyController
$route['blogs'] = 'BlogController/index';
$route['blogs/(:any)'] = 'BlogController/single_blog/$1';