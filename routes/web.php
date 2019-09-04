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
Route::get('/login','LoginControllers@index');
Route::post('/signup','LoginControllers@store');
Route::get('/signin','LoginControllers@signin');
Route::get('/result/{id}','LoginControllers@result');
Route::get('/admin','AdminControllers@index');
Route::get('/email','AdminControllers@sendemail');
