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

//Route::resource('/post','PostController');
Route::get('/Siswa/create', 'ShoeruController@create');
Route::resource('/siswas','ShoeruController');
Route::post('/Siswa', 'ShoeruController@store');
// Route::delete('/siswas/{siswa}', 'ShoeruController@destroy');
// Route::get('/siswas/{siswa}/edit', 'ShoeruController@edit');
// Route::patch('/siswas/{siswa}', 'ShoeruController@update');
