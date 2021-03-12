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

Route::resource('book','BookController');
Route::get('/', function () {
    return view('welcome');

});Route::resource('BookTypeModel','BookTypeModelController');
Route::get('/', function () {
    return view('welcome');
});

Route::resource('bookType','BookTypeController');
Route::get('/', function () {
    return view('welcome');
});

Route::resource('member','MemberController');
Route::get('/', function () {
    return view('welcome');
});

Route::resource('orderConfirmation','OrderConfirmationController');
Route::get('/', function () {
    return view('welcome');
});

Route::resource('orderDetail','OrderDetailController');
Route::get('/', function () {
    return view('welcome');
});

Route::resource('users','UsersController');
Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', 'HomeController@index')->name('home');