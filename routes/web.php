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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/cennik', 'PriceListController@index')->name('price');

Route::get('/kontakt', 'ContactController@index')->name('contact');

Route::post('/kontakt', 'ContactController@index')->name('contact');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/profil', 'ProfilController@index')->name('edit');

Route::post('/profil', 'ProfilController@store');

Route::get('/wizyta', 'VisitController@index')->name('visitform');

Route::post('/potwierdz', 'VisitController@store');

Route::get('/historia/{userId}', 'VisitController@show')->name('history');
