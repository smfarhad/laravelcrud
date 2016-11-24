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
Route::get('/', 'PagesController@index');
Route::get('profile', 'PagesController@profile');
Route::get('settings', 'PagesController@settings');
//Route::get('/', function () {
//    return realpath(base_path('resources/views'));
//    return view('welcome');
//});
Route::get('users', ['uses'=>'UsersController@index']);
Route::get('users/create', ['uses'=>'UsersController@create']);
Route::post('users', ['uses' => 'UsersController@store']);

//Route::get('users', function () {
//    $users = [
//            0=> ['first_name'=>'SM Farhad',
//                 'last_name'=>'Hossain',
//                 'location'=>'Bangladesh'],
//            1=> ['first_name'=>'Donald J',
//                 'last_name'=>'Trump',
//                 'location'=>'USA'],
//            2=> ['first_name'=>'Angela',
//                 'last_name'=>'Merkel',
//                 'location'=>'Germany']
//    ];
//    return $users;
//});

Auth::routes();

Route::get('/home', 'HomeController@index');
