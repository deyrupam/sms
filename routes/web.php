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
    Route::get('/{id}','backend\StudentController@show');
    Route::get('/edit/{id}','backend\StudentController@edit');
    Route::post('/update/{id}','backend\StudentController@update');
});
Route::group(['prefix'=>'class'],function(){
    Route::get('/', 'backend\IClassController@index');
    Route::get('/add', 'backend\IClassController@add');
    Route::post('/add','backend\IClassController@store');
    Route::get('/{id}','backend\IClassController@show');
    Route::get('/edit/{id}','backend\IClassController@edit');
    Route::post('/update/{id}','backend\IClassController@update');
});

Route::group(['prefix'=>'academic_year'],function(){
    Route::get('edit/{id}', 'backend\AcademicController@edit');

});

