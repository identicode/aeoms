<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


$route['admin/dashboard']['get'] = 'admin/DashboardController/index';


// TRAINING
$route['admin/training']['get'] = 'admin/TrainingController/index';
$route['admin/training/create']['get'] = 'admin/TrainingController/create';
$route['admin/training/create']['post'] = 'admin/TrainingController/store';
$route['admin/training/(:num)/show']['get'] = 'admin/TrainingController/show/$1';
$route['admin/training/(:num)/edit']['get'] = 'admin/TrainingController/edit/$1';
$route['admin/training/(:num)/edit']['post'] = 'admin/TrainingController/update/$1';


// Speakers
$route['admin/speaker']['get'] = 'admin/SpeakerController/index';
$route['admin/speaker/create']['get'] = 'admin/SpeakerController/create';


