<?php

use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/','App\Http\Controllers\HomeController@index' )->name('home');

Route::get('/create-post','App\Http\Controllers\PostController@index' )->name('create-post');
Route::post('/add-post','App\Http\Controllers\PostController@add_post' )->name('add_post');

Route::get('/details/{id}','App\Http\Controllers\DetailController@index' )->name('details');

Route::get('/list-post','App\Http\Controllers\PostController@lists' )->name('list-post');

Route::get('/delete-post/{id}','App\Http\Controllers\PostController@delete_post' )->name('delete-post');

Route::get('/update-post/{id}','App\Http\Controllers\PostController@update_post' )->name('update-post');

Route::post('/send_update-post/{id}','App\Http\Controllers\PostController@send_update_post' )->name('send-update-post');



