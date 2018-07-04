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


Route::get('/', 'WebsiteController@index');

//login
Route::get('/system-adminstration-login',[
	'uses' => 'WebsiteController@showLoginForm',
	'as'    => 'login'
]);

//signin
Route::post('/login', [
	'uses' => 'UserController@doLogin',
	'as'   => 'signIn'
]);


//home 

Route::get('/home', [
	'uses' => 'HomeController@home',
	'as'  => 'home'
]);


///////////////////////////////////////////////////////////
				// WEBSITE ROUTES
///////////////////////////////////////////////////////////
Route::get('/post-details/{id}', [
	'uses' => 'WebsiteController@post_details',
	'as'   => 'post_details'
]);	

Route::get('/list-announcements', [
	'uses' => 'WebsiteController@list_announcements',
	'as'   => 'list_announcements'
]);


Route::get('/course-details/{id}', [
	'uses' => 'WebsiteController@course_details',
	'as'   => 'course_details'
]);


///list course
Route::get('/courses', [
	'uses' => 'WebsiteController@list_courses_web',
	'as'   => 'list_courses_web'
]);

Route::get('/lecture-info/{id}', [
	'uses' =>'WebsiteController@lecture_details',
	'as'   => 'lectureDetails'
]);

//subscribe
Route::get('/subscribe', [
	'uses' => 'WebsiteController@subscribe',
	'as'   => 'subscribe'
]);


//register subscriber
Route::post('/subscriber-register',[
	'uses' => 'WebsiteController@subscriber_register',
	'as'  => 'subscriber_register' 
]);

//articles list
Route::get('/articles', [
	'uses' => 'WebsiteController@articles',
	'as'   => 'articles'
]);


//logout
Route::get('/logout', [
	'uses' => 'UserController@logout',
	'as'   => 'logout'
]);

///////////////////////////////////////////////////////////
				// User ROUTES
///////////////////////////////////////////////////////////

Route::get('/create-user', [
	'uses' => 'UserController@create',
	'as'   => 'create_user'
]);

Route::post('/save-user', [
	'uses' => 'UserController@save',
	'as'   => 'save_user'
]);

Route::get('/list-users', [
	'uses' => 'UserController@list',
	'as'   => 'list_users'
]);

Route::get('/user-delete/{id}', [
	'uses' => 'UserController@delete',
	'as'   =>'user_delete'
]);

Route::get('/update-user/{id}',[
	'uses' => 'UserController@update',
	'as'   =>'update_user'
]);


Route::post('/edit-user', [
	'uses' => 'UserController@edit',
	'as'   => 'edit_user'
]);

///////////////////////////////////////////////////////////
				// POST ROUTES
///////////////////////////////////////////////////////////

Route::get('/create-post', [
	'uses' => 'PostController@create',
	'as'   => 'create_post'
]);

Route::post('/save-post', [
	'uses' => 'PostController@save',
	'as'   => 'save_post'
]);

Route::get('/list-posts', [
	'uses' => 'PostController@list',
	'as'   => 'list_posts'
]);

Route::get('/post-delete/{id}', [
	'uses' => 'PostController@delete',
	'as'   =>'post_delete'
]);

Route::get('/update-post/{id}',[
	'uses' => 'PostController@update',
	'as'   =>'update_post'
]);


Route::post('/edit-post', [
	'uses' => 'PostController@edit',
	'as'   => 'edit_post'
]);



///////////////////////////////////////////////////////////
				// COURSE ROUTES
///////////////////////////////////////////////////////////

Route::get('/create-course', [
	'uses' => 'CourseController@create',
	'as'   => 'create_course'
]);

Route::post('/save-course', [
	'uses' => 'CourseController@save',
	'as'   => 'save_course'
]);

Route::get('/list-courses', [
	'uses' => 'CourseController@list',
	'as'   => 'list_courses'
]);

Route::get('/course-delete/{id}', [
	'uses' => 'CourseController@delete',
	'as'   =>'course_delete'
]);

Route::get('/update-course/{id}',[
	'uses' => 'CourseController@update',
	'as'   =>'update_course'
]);


Route::post('/edit-course', [
	'uses' => 'CourseController@edit',
	'as'   => 'edit_course'
]);




///////////////////////////////////////////////////////////
				// Lecture ROUTES
///////////////////////////////////////////////////////////

Route::get('/create-lecture', [
	'uses' => 'LectureController@create',
	'as'   => 'create_lecture'
]);

Route::post('/save-lecture', [
	'uses' => 'LectureController@save',
	'as'   => 'save_lecture'
]);

Route::get('/list-lectures/{id}', [
	'uses' => 'LectureController@list',
	'as'   => 'list_lectures'
]);

Route::get('/lecture-delete/{id}', [
	'uses' => 'LectureController@delete',
	'as'   =>'lecture_delete'
]);

Route::get('/update-lecture/{id}',[
	'uses' => 'LectureController@update',
	'as'   =>'update_lecture'
]);


Route::post('/edit-lecture', [
	'uses' => 'LectureController@edit',
	'as'   => 'edit_lecture'
]);


Route::get('/lecture-details/{id}', [
	'uses' => 'LectureController@show_details',
	'as'   => 'show_details'
]);


Route::post('/add-file', [
	'uses' => 'LectureController@add_file',
	'as'   => 'add_file'
]);




/////////////////////////////////////////////////////////
						// SUBSCRIBERS ROUTES
////////////////////////////////////////////////////////

Route::get('/list-subscribers',[
	'uses' => 'SubscriberController@list',
	'as'   => 'list_subscribers'
]);

Route::get('/subscriber-delete/{id}', [
	'uses' => 'SubscriberController@delete',
	'as'   =>'subscriber_delete'
]);

Route::get('/subscriber/send-email/{id}', [
	'uses' => 'SubscriberController@sendEmail',
	'as'   => 'send_email'
]);

//send email to subscriber
Route::post('/send_email_to_subscriber', [
	'uses' => 'SubscriberController@send_email_to_subscriber',
	'as'   => 'send_email_to_subscriber'
]);







///////////////////////////////////////////////////////////
				// API ROUTES
///////////////////////////////////////////////////////////

Route::get('/api/posts/{number}', [
	'uses' => 'ApiController@getPosts',
	'as'   => 'get_posts'
]);