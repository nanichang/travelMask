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
Route::post('login', 'AuthController@doLogin')->name('do_login');
Route::get('logout', 'AuthController@logout')->name('logout');

Route::group(['prefix' => 'admin'], function () {
    Route::get('/', 'AdminController@index')->name('admin_dash');
    Route::get('create-lecturer', 'AdminController@create')->name('create_lecturer');
});

Route::group(['prefix' => 'lecturer'], function () {
    Route::get('/', 'LecturerController@index')->name('lecturer_dash');
});

Route::group(['prefix' => 'student'], function () {
    Route::get('/', 'StudentController@index')->name('student_dash');
});


