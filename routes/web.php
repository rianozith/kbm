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

Route::get('/planning', function () {
    return view('planning');
});

Route::get('/register', function () {
    return view('register');
});

// Route::resource('siswa', 'MuridController');
// Route::resource('guru', 'GuruController');
// Route::resource('acara', 'KegiatanController');
// Route::resource('kelas', 'KelasController');
// Route::resource('prodi', 'ProdiController');
// Route::resource('program', 'StatProgramController');
// Route::resource('ruangan', 'RuanganController');
// Route::resource('kelompok', 'KelompokController');

Route::resource('class', 'ClassController');
Route::resource('siswa', 'StudentController');
Route::resource('siswadetail', 'StudentDetailsController');
Route::resource('teacher', 'TeacherController');
Route::resource('teacherDetail', 'TeacherDetailsController');
Route::resource('schedule', 'ScheduleController');
Route::resource('presence', 'PresenceController');
Route::resource('studyprogram', 'StudyProgramController'); //no crud
Route::resource('subjects', 'SubjectsController'); //no crud
Route::resource('sambung', 'SambungController'); //no crud
Route::resource('detailStudent', 'DetailStudentController');

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