<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/register', function () {
    return view('register');
});

Route::resource('siswa', 'MuridController');
Route::resource('guru', 'GuruController');

// Route::get('/index', function () {
//     return view('index');
// });

// Route::get('/planning', function () {
//     return view('planning');
// });

// Route::get('/register', function () {
//     return view('register');
// });

// Route::resource('Murids', 'MuridController');

// Route::group(['prefix'=>'kbm'], function() {	
	
// 	Route::get('/pengajar_index', function() {
// 	return view('kbm.pengajar_input');
// 	});
// 	Route::get('profile', function() {
// 	return 'halaman dashboard > profile';
// 	});
// 	Route::get('inbox', function() {
// 	return 'halaman dashboard > inbox';
// 	});
// });