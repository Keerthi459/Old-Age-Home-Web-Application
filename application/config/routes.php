
<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'UserCon';
$route['404_override'] = 'AdminCon/notfound';
$route['translate_uri_dashes'] = FALSE;

########################### User Part ##################################

$route['index'] = 'UserCon';
$route['home'] = 'UserCon';
$route['about'] = 'UserCon/about';
$route['services'] = 'UserCon/services';
$route['event'] = 'UserCon/event';
$route['donation'] = 'UserCon/donation';
$route['facilities'] = 'UserCon/facilities';
$route['products'] = 'UserCon/products';
$route['product_package'] = 'UserCon/product_package';
$route['product_view'] = 'UserCon/product_view';
$route['faq'] = 'UserCon/faq';
$route['gallery'] = 'UserCon/gallery';
$route['videos'] = 'UserCon/videos';
$route['contact'] = 'UserCon/contact';


############################ Admin Part ################################
$route['admin'] = 'AdminCon';
$route['admin/adminindex']  ='AdminCon/index';
$route['admin/donations'] = 'AdminCon/donations';

$route['admin/newAcc'] = 'AdminCon/newAccount';
$route['admin/common']  ='AdminCon/AdminDashboard';
$route['admin/dashboard']  ='AdminCon/AdminDashboardMain';
// $route['admin/auto-mail']  ='AdminCon/auto_mail';
$route['admin/SuperadminDashboard']  ='AdminCon/SuperAdminDashboardMain';
$route['admin/UserList'] = 'AdminCon/UserList';
$route['admin/AddTour'] = 'AdminCon/AddTour';
$route['admin/EditTour'] = 'AdminCon/EditTour';
$route['admin/TourList'] = 'AdminCon/TourList';
$route['admin/AddService'] = 'AdminCon/AddService';
$route['admin/ServiceList'] = 'AdminCon/ServiceList';
$route['admin/AddReview'] = 'AdminCon/AddReview';
$route['admin/ReviewList'] = 'AdminCon/ReviewList';
$route['admin/AddPhotos'] = 'AdminCon/Addphotos';
$route['admin/PhotosList'] = 'AdminCon/Photoslist';
$route['admin/EnquiryList'] = 'AdminCon/Enquirylist';
$route['admin/AddVideo'] = 'AdminCon/AddVideo';
$route['admin/VideoList'] = 'AdminCon/Videolist';
$route['admin/edit-log'] = 'AdminCon/EditLog';
$route['admin/AddTask'] = 'AdminCon/AddTaskMethod';
$route['admin/edit-task'] = 'AdminCon/EditTaskMethod';
$route['admin/dailyTaskList'] = 'AdminCon/DailyTaskList';
$route['admin/dailyLogEmployees'] = 'AdminCon/dailyLogEmployeesMethod';
$route['admin/getLogDetails'] = 'AdminCon/GetLogsMethod';
$route['admin/under_construction'] = 'UnderConst/index';
$route['admin/logout'] = 'AdminCon/logout';

