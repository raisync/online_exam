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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::group(['middleware' => ['auth', 'admin']], function() {
	Route::get('/', 'ExamController@index')->name('index');
	Route::post('/store', 'ExamController@store')->name('store');
	Route::get('/edit/{id}', 'ExamController@edit')->name('edit');
	Route::get('/view/{id}', 'ExamController@show')->name('view');
	Route::get('/create', 'ExamController@create')->name('create');
	Route::put('/update/{id}', 'ExamController@update')->name('update');
	Route::delete('/delete/{id}', 'ExamController@destroy')->name('delete');
});

Route::group(['middleware' => ['auth']], function() {
    Route::get('/student', 'HomeController@student')->name('student');
    Route::get('/exam', 'HomeController@exam')->name('exam');
});