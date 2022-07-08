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
Route::get('/','HomeController@hello')->name('hello');
Route::get('/form','HomeController@form')->name('form');
Route::post('/save','HomeController@save')->name('save.user');
Route::get('/table','HomeController@table')->name('table.user');
Route::get('delete-user/{id}','HomeController@deleteuser')->name('delete.user');
Route::get('edituser/{id}','HomeController@edituser')->name('edit.user');
Route::post('/updateuser','HomeController@updateuser')->name('update.user');
