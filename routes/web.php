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

Route::get('/pizzas','PizzaController@index')->middleware('auth');

Route::get('/pizzas/create','PizzaController@create');

Route::post('/pizzas/create','PizzaController@store')->middleware('auth');

Route::get('/pizzas/{id}','PizzaController@show')->middleware('auth');

Route::delete('/pizzas/{id}','PizzaController@destory')->middleware('auth');
