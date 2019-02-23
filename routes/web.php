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

Route::get('template', function () {
    return view('template');
});

Route::get('buildingA', function () {
    return view('buildingA');
});

Route::get('buildingB', function () {
    return view('buildingB');
});

Route::get('buildingC', function () {
    return view('buildingC');
});

// Route::get('roomA1', 'TestController@index');

Route::get('switchView', function () {
    return view('switchView');
});

Route::get('professorInput', function () {
    return view('professorInput');
});

Route::get('test', function () {
    return view('test');
});

Route::get('new', function () {
    return view('new');
});

Route::post('/home','mybuilding@insertBuilding');
Route::get('/home','mybuilding@showBuilding');

Route::post('/professorInput','NewClassController@requestNewClass');
Route::get('/professorInput','NewClassController@showRequestClass');

Route::post('/roomA1','assigned_roomController@insertClass');
Route::get('/roomA1','assigned_roomController@showRequest_and_AssignedClass');


// Route::get('/roomA1','request_classController@showClass');

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');


