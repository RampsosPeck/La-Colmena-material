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

Route::get('/catalogo', function () {
    return view('layouts.master');
});

Route::get('/master', function () {
    return view('layouts.mastercompleto');
});

Route::get('/producto', function () {
    return view('layouts.producto');
});

//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
Route::get('{path}',"HomeController@index")->where('path','[\/\w\.-]*');