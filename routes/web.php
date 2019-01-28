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


Route::get('example/{id}/{name}', function($id, $name) {

    return 'hello example'.' '.$id.' '.$name;
});



Route::get('somerouth/{id}/{name}', array('as'=>'somerouth.home', function($id, $name) {

    return 'hello somerouth'.' '.$id.' '.$name;
}));


Route::resource('debt', 'DebtsController');
Route::resource('payment', 'PaymentsController');
Route::resource('user', 'UsersController');