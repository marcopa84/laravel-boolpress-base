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



Route::get('/', 'PostController@index')->name('home');


// Route::post('/photo/user', 'PhotoController@photo_user')->name('photo.photo_user');

Route::resource('posts', 'PostController');
Route::resource('photos', 'PhotoController');
Route::get('/photobyuser/{id}', 'PhotoController@photo_byuser')->name('photo_byuser');
Route::resource('users', 'UserController');
