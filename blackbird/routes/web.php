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
    return view('welcome');
});

Route::get('/blackbird','ProductosController@listado');

Route::get('/product/{id}', 'ProductosController@detalle');

Route::get('/addProd', function () {
    return view('addProd');
});

Route::post('/addProd', 'ProductosController@agregar');

Route::get('/faq', function () {
    return view('faq');
});

Route::get('/register', function () {
    return view('welcome');
});

Route::post('/register', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/contacto', function () {
    return view('contacto');
});

Route::post('/profile', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
