<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


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
Route::get('/', 'App\Http\Controllers\HomeController@home')->name('home');
Route::get('/about', 'App\Http\Controllers\HomeController@about')->name('about');
Route::get('/revies', 'App\Http\Controllers\HomeController@revies')->name('revies');
Route::post('/revies/check', 'App\Http\Controllers\HomeController@revies_check')->name('revies_check');
Route::get('/admin', 'App\Http\Controllers\HomeController@admin')->name('admin');
Route::post('/admin/home_admin', 'App\Http\Controllers\HomeController@home_admin')->name('home_admin');
//Route::get('/', 'HomeController@home');
//Route::get('/about', 'HomeController@about');