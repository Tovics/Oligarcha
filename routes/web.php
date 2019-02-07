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


Route::get('insert', function(){

    DB::insert('insert into users(name, email, password) values(?, ?, ?)', ['User', 'user@gmail.com', 'user']);

});

Route::get('read/{id}', function($id){

    $result = DB::select('select * from users where id = ?', [$id]);

 // return var_dump($result);

 //   foreach ($result as $username)

 //       return $username->name;

  return $result;
});

Route::get('update', function (){

    $newname = 'new_name';
    // $updatedStuff = DB::update('update users set email = ' .$newname. ' where id = ?', [5]);
    $updatedStuff = DB::table('users')
        ->where('id', 5)
        ->update(['email' => $newname]);

 //   $updatedStuff = DB::update(DB::RAW('update users set name = ' .$newname. ' where id = ?', [5]));

    return $updatedStuff;
});

Route::get('delete/{id}', function ($id){

    $deleted = DB::delete('delete from users where id = ?', [$id]);

   // $deleted = DB::table('users')
   //     ->where('id', $id)
   //     ->delete;

    return $deleted;
});


Route::get('showall', function() {

    $users = User::find(8);

    return $users;

});


Route::get('basicinsert', function() {

    $user = new User;

    $user->name = 'basicinsert user';
    $user->password = 'basicinsertpassword';
    $user->email = 'basicinsert@email.com';

    $user->save();
});

Route::get('basicinsert2', function() {

    $user = User::find(8);

    $user->name = 'basicinsert user2';
    $user->password = 'basicinsertpassword2';
    $user->email = 'basicinsert@email.com2';

    $user->save();
});

Route::resource('debt', 'DebtsController');
Route::resource('payment', 'PaymentsController');
Route::resource('user', 'UsersController');