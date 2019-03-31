<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|

*/
Route::get('/d', function () {
    return view('dashboard.pages.extend');
});
Route::get('/', 'BasicController@welcome');
Route::get('welcome', 'BasicController@welcome');
/*
Route::get('/','DashboardController@try');
Route::get('trytest/{id}','BasicController@trytest');

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/d', function () {
    return view('extend');
});


Route::get('/d', function () {
    return view('index');
});

Route::get('/login', function () {
    return view('try');
});

Route::get('/signup', function () {
    return view('try2');
});
*/
Route::get('logout', 'BasicController@logout');
/*
Route::get('login', 'BasicController@login');
Route::get('signup', 'BasicController@signup');
*/
Route::post('loginStore', 'BasicController@loginStore');
Route::post('signupStore','BasicController@signupStore');

Route::get('about','BasicController@about');

Route::group(['middleware' => 'checkloggedin'], function(){


	Route::get('eventlog','BasicController@eventlog');

	Route::get('user', 'DashboardController@dashboard');
	Route::get('create-an-event','DashboardController@createanevent');
	Route::get('draft', 'DashboardController@draft');
	Route::get('dashboard-event-draft', 'DashboardController@eventdraft');
	Route::get('delete-event/{id}', 'DashboardController@deleteevent');
	Route::get('booked/{id}', 'DashboardController@booked');
	Route::get('my-event', 'DashboardController@myevent');
	Route::get('myprofile', 'DashboardController@myprofile');
	Route::get('edit-profile', 'DashboardController@editprofile');
	Route::post('updateinfo/{$id}','DashboardController@updateinfo');
	Route::get('calender', 'DashboardController@calender');
	Route::post('eventStore','DashboardController@eventStore');

	Route::get('admin', 'Admin\AdminController@home');

	Route::get('alladmin', 'Admin\AccessController@alladmin');
	Route::get('alluser', 'Admin\AccessController@alluser');

	Route::get('all-services','Admin\ServiceController@allservice');
	Route::post('service-store','Admin\ServiceController@servicestore');
	Route::get('service-delete/{id}', 'Admin\ServiceController@servicedelete');

	Route::get('event-overview','Admin\ServiceController@eventoverview');
	Route::get('event-overview-add','Admin\ServiceController@eventoverviewadd');
	Route::post('overview-store','Admin\ServiceController@overviewstore');
	Route::get('overview-edit/{id}','Admin\ServiceController@overviewedit');
	Route::post('overview-update/{id}','Admin\ServiceController@overviewupdate');
	Route::get('overview-delete/{id}','Admin\ServiceController@overviewdelete');

	Route::get('event-new-request', 'Admin\EventController@eventnewrequest');
	Route::post('payamount/{id}','Admin\EventController@payamount');
	Route::get('delete-event-by-admin/{id}', 'Admin\EventController@deleteeventbyadmin');
	Route::get('event-in-progress', 'Admin\EventController@eventinprogress');
	Route::get('accomplished/{id}','Admin\EventController@accomplished');
	Route::get('event-history', 'Admin\EventController@eventhistory');

	Route::get('alladmin-add', 'Admin\AccessController@alladminadd');
	Route::post('alladmin-store', 'Admin\AccessController@alladminstore');
	Route::get('alladmin-edit/{id}', 'Admin\AccessController@alladminrewrite');
	Route::post('alladmin-update/{id}', 'Admin\AccessController@alladminupdates');
	Route::get('alladmin-delete/{id}', 'Admin\AccessController@alladmindeletes');

	Route::get('alluser-delete/{id}', 'Admin\AccessController@alluserdeletes');

	Route::get('rules', 'Admin\RuleController@index');
	Route::get('rule-add', 'Admin\RuleController@add');
	Route::post('rule-store', 'Admin\RuleController@store');
	Route::get('rule-edit/{id}', 'Admin\RuleController@rewrite');
	Route::post('rule-update/{id}', 'Admin\RuleController@updates');
	Route::get('rule-delete/{id}', 'Admin\RuleController@deletes');


	Route::get('requirements', 'Admin\CreateEventController@index');
	Route::get('requirements-add', 'Admin\CreateEventController@add');
	Route::post('requirements-store', 'Admin\CreateEventController@store');
	Route::get('requirements-edit/{id}', 'Admin\CreateEventController@rewrite');
	Route::post('requirements-update/{id}', 'Admin\CreateEventController@updates');
	Route::get('requirements-delete/{id}', 'Admin\CreateEventController@deletes');


	Route::get('eventtype', 'Admin\CreateEventController@eventtype');
	Route::post('eventtype_store', 'Admin\CreateEventController@eventtype_store');
	Route::get('eventtype-delete/{id}', 'Admin\CreateEventController@eventtype_delete');


	Route::get('eventguestmenu', 'Admin\CreateEventController@eventguestmenu');
	Route::post('eventguestmenu_store', 'Admin\CreateEventController@eventguestmenu_store');
	Route::get('eventguestmenu-delete/{id}', 'Admin\CreateEventController@eventguestmenu_delete');
});





