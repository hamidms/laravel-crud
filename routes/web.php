<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/student', 'StudentController@index');
Route::post('/student/create', 'StudentController@create');
Route::get('/student/{id}/edit', 'StudentController@edit');
Route::post('/student/{id}/update', 'StudentController@update');
Route::get('/student/{id}/delete', 'StudentController@delete');
