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
    return redirect()->route('login');
})->name('home');


Route::get('login', 'AuthController@getLogin')->name('login');
Route::post('login', 'AuthController@postLogin')->name('do_login');
Route::get('logout', 'AuthController@logout')->name('logout');

Route::group(['prefix' => 'admin'], function () {
    Route::get('/', 'AdminController@index')->name('admin_dash');
    Route::get('create-lecturer', 'AdminController@create')->name('create_lecturer');
    Route::post('create-lecturer', 'AdminController@store')->name('create_admin');
    
});

Route::group(['prefix' => 'lecturer'], function () {
    Route::get('/', 'LecturerController@index')->name('lecturer_dash');
    Route::get('profile', 'LecturerController@edit')->name('edit_profile');
    
    Route::get('create-a-course', 'CourseController@create')->name('create_course');
    Route::post('create-a-course', 'CourseController@store')->name('store_course');
    
    Route::get('register-student', 'StudentController@create')->name('register_student');
    Route::post('register-student', 'StudentController@store')->name('create_student');
    
});

Route::group(['prefix' => 'student'], function () {
    Route::get('/', 'StudentController@index')->name('student_dash');
    
    Route::get('/student/activation/{email}/{activationCode}', 'StudentController@activate')->name('activate_student');
    Route::get('/student-registration', 'StudentController@studentRegistation')->name('student_registration');
    
    
});


