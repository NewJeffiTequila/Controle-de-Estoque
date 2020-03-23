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

Route::get('/','RedirectController@redirecionar');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/teste', 'TesteController@index')->name('teste');
Route::resource('/Produto', 'ProductController');

