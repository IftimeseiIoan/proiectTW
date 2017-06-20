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
    return view('pages.home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/test', 'TestController@test');
Route::get('/meniu', 'MeniuController@index');
Route::post('/edit/{id}','EditController@update');
Route::get('/edit','EditController@index');
Route::get('/delete','EditController@delete');
Route::get('/cumpara/{id}','CartController@add');
Route::get('/cart','CartController@show');
Route::get('/deleteFromCart/{id}','CartController@delete');
Route::get('/finalizare','CartController@finish');


//ex
Route::get('/comanda/alcool', function () {
    return response('Nu se poate!', 403)
                  ->header('Content-Type', 'text/plain');
});
