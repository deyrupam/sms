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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/test', 'TestController@index');


// student routes

Route::group(['prefix'=>'student'],function(){
    Route::get('/', 'backend\StudentController@index');
    Route::get('/add', 'backend\StudentController@add');
    Route::post('/add','backend\StudentController@store');
});

