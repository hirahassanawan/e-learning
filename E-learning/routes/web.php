<?php

use Illuminate\Support\Facades\Route;

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
    return view('index');
});
Route::get('/index', function () {
    return view('index');
});
Route::get('/charts', function () {
    return view('charts');
});
Route::get('/tables', function () {
    return view('tables');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/register', function () {
    return view('register');
});
Route::get('/forgot-password', function () {
    return view('forgot-password');
});
<<<<<<< HEAD
route::get('/do','Mailcontroller@data');
Route::get('/index', function () {
    return view('index');
=======
Route::get('/404', function () {
    return view('404');
>>>>>>> d18006fe358575534f672ba8fb50227274002cb0
});
Route::get('/blank', function () {
    return view('blank');
});
Route::get('/buttons', function () {
    return view('buttons');
});
Route::get('/cards', function () {
    return view('cards');
});
Route::get('/color', function () {
    return view('utilities-color');
});
Route::get('/border', function () {
    return view('utilities-border');
});
Route::get('/animation', function () {
    return view('utilities-animation');
});
Route::get('/other', function () {
    return view('utilities-other');
});