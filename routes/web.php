<?php

use App\User;
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


Auth::routes(['verify' => true]);

Route::get('/user', 'UsersController@index');
Route::get('/user/{id}', 'UsersController@show');

Route::resource('debt', 'DebtsController');
Route::resource('payment', 'PaymentsController');
Route::resource('user', 'UsersController');
Route::resource('home', 'HomeController');

Route::get('/', function () {
    return view('layouts.app');
});

