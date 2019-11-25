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

Route::get('/about', function () {
    return view('about');
});

Route::get('/service', function () {
    return view('service');
});

Route::get('/contact', function () {
    return view('contact');
});


Route::get('/Siswa/create', 'ShoeruController@create');
Route::resource('/siswas','ShoeruController');
Route::post('/Siswa', 'ShoeruController@store');
Route::resource('comments', 'CommentController');
Auth::routes();

Route::get('/auth', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/auth', 'HomeController@index')->name('home');
