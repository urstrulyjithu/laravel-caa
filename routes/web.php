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

Route::get('/', 'pagesController@index');

Route::get('/about', 'pagesController@about');

Route::get('/services', 'pagesController@services');

Route::get('/about', function () {
    return view('about');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/lesson', function () {
    return view('lesson');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/lesson#playvideo', function () {
    return view('playvideo');
});

Route::get('/question', function () {
    return view('question');
});

Route::get('/validation', function () {
    return view('validation');
});

Route::get('/viewpdf', function () {
    return view('viewpdf');
});

Route::get('/admin/home', function () {
    return view('admin.home');
});

Route::get('/admin/index', function () {
    return view('admin.index');
});

Route::get('/admin/login', function () {
    return view('admin.login');
});

Route::get('/admin/logout', function () {
    return view('admin.logput');
});

Route::get('/admin/sidebar', function () {
    return view('admin.sidebar');
});


