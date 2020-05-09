<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


// authentication
$route['admin/login']['get'] = 'admin/AuthController/login';
$route['admin/login']['post'] = 'admin/AuthController/auth';
$route['admin/logout']['get'] = 'admin/AuthController/logout';


$route['admin/dashboard']['get'] = 'admin/DashboardController/index';

// TRAINING
$route['admin/training']['get'] = 'admin/TrainingController/index';
$route['admin/training/create']['get'] = 'admin/TrainingController/create';
$route['admin/training/create']['post'] = 'admin/TrainingController/store';
$route['admin/training/(:num)/show']['get'] = 'admin/TrainingController/show/$1';
$route['admin/training/(:num)/edit']['get'] = 'admin/TrainingController/edit/$1';
$route['admin/training/(:num)/edit']['post'] = 'admin/TrainingController/update/$1';

// topics
$route['admin/training/(:num)/topic/create']['get'] = 'admin/TopicController/create/$1';
$route['admin/training/(:num)/topic/create']['post'] = 'admin/TopicController/store/$1';
$route['admin/training/(:num)/topic/(:num)/edit']['get'] = 'admin/TopicController/edit/$1/$2';
$route['admin/training/(:num)/topic/(:num)/edit']['get'] = 'admin/TopicController/edit/$1/$2';
$route['admin/training/(:num)/topic/(:num)/delete']['get'] = 'admin/TopicController/delete/$1/$2';

// Speakers
$route['admin/speaker']['get'] = 'admin/SpeakerController/index';
$route['admin/speaker/create']['get'] = 'admin/SpeakerController/create';
$route['admin/speaker/create']['post'] = 'admin/SpeakerController/store';
$route['admin/speaker/(:num)/edit']['get'] = 'admin/SpeakerController/edit/$1';
$route['admin/speaker/(:num)/edit']['post'] = 'admin/SpeakerController/update/$1';
$route['admin/speaker/(:num)/delete']['get'] = 'admin/SpeakerController/delete/$1';


// participants
$route['admin/participant/(:num)/approve']['get'] = 'admin/ParticipateController/approve/$1';
$route['admin/participant/(:num)/disapprove']['get'] = 'admin/ParticipateController/disapprove/$1';




