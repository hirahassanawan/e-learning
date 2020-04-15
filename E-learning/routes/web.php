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

 Route::get('/', function () {
     return view('welcome');
 });

Route::get('/buttons', function () {
    return view('buttons');
});

Route::get('/charts', function () {
    return view('charts');
});
Route::get('/forgot-password', function () {
    return view('forgot-password');
});

Route::get('/index', function () {
    return view('index');
});
Route::get('/tables', function () {
    return view('tables');
});
Route::get('/animation', function () {
    return view('utilities-animation');
});
Route::get('/border', function () {
    return view('utilities-border');
});
Route::get('/color', function () {
    return view('utilities-color');
});
Route::get('/cards', function () {
    return view('cards');
});
Route::get('/register1', function () {
    return view('register1');
});


 Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::post('store', 'TeacherController@store')->name('store');
Route::get('profile', 'TeacherController@index');
Route::post('update', 'TeacherController@update')->name('update');
Route::get('course', 'CourseController@index');
Route::post('newcourse', 'CourseController@store')->name('newcourse');
Route::get('addcourse', 'CourseController@show')->name('show');
Route::post('subcatshow', 'CourseController@subcatshow')->name('subcatshow');
Route::post('prdshow', 'CourseController@prdshow')->name('prdshow');
Route::post('delete', 'CourseController@destroy')->name('delete');
Route::get('detail', 'CourseController@detail')->name('detail');
Route::get('assignment', 'CourseController@assignment')->name('assignment');
Route::get('topicshow', 'CourseController@topicshow')->name('topicshow');
Route::post('storeassign', 'CourseController@storeassign')->name('storeassign');
Route::get('review', 'TeacherController@review')->name('review');
Route::get('delassign', 'CourseController@delassign')->name('delassign');
Route::get('dash', 'TeacherController@dash')->name('dash');
Route::post('storecontent', 'CourseContentController@store')->name('chapterstore');
Route::get('topic', 'CourseContentController@index')->name('topic');
Route::post('storevideo', 'CourseContentController@storevideo')->name('storevideo');



