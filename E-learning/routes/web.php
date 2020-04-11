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

Route::get('/addcourse', function () {
    return view('addcourse');
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
Route::get('/other', function () {
    return view('utilities-other');
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
Route::post('newcourse', 'CourseController@store')->name('store');

