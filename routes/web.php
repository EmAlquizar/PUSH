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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', 'LoginController@login')->name('login');
Route::post('/login', 'LoginController@authenticate');
Route::get('/logout', 'LoginController@logout');

Route::middleware('auth')->group(function() {
	Route::get('/subjects', 'SubjectsController@index')->middleware('auth');
	Route::get('/subjects/add', 'SubjectsController@create');
	Route::post('/subjects/store', 'SubjectsController@store');

	Route::get('/strands', 'StrandsController@index');
	Route::get('/strands/add', 'StrandsController@create');
	Route::post('/strands/store', 'StrandsController@store');

	Route::get('/teachers', 'TeachersController@index');
	Route::get('/teachers/{teacher}/edit', 'TeachersController@edit');
	Route::post('/teachers/{teacher}/update', 'TeachersController@update');
	Route::get('/teachers/add', 'TeachersController@create');
	Route::post('/teachers/store', 'TeachersController@store');

	Route::get('/sections', 'SectionsController@index');
	Route::get('/sections/add', 'SectionsController@create');
	Route::post('/sections/store', 'SectionsController@store');

	Route::get('/subject-strands', 'SubjectStrandsController@index');
	Route::get('/subject-strands/add', 'SubjectStrandsController@create');
	Route::get('/subject-strands/{subject_strand}/edit', 'SubjectStrandsController@edit');
	Route::post('/subject-strands/{subject_strand}/update', 'SubjectStrandsController@update');
	Route::post('/subject-strands/store', 'SubjectStrandsController@store');
});



