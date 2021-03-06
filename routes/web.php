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

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/verify/{token}', ['uses' => 'VerifyController@verify'])->name('verify');


Route::get('/profile', ['uses' => 'HomeController@profile'])->name('profile');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

