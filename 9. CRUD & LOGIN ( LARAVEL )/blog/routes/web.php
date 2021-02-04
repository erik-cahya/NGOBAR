<?php

use Illuminate\Support\Facades\Auth;
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
    return view('/auth/login');
});

Route::get('about', function () {
    return view('about');
});

Route::get('produk', function () {
    return view('produk');
});

Route::get('profile', function () {
    return view('tentangkami');
});






// ------------------- Route untuk crud system

// Show Data
Route::get('/crud/index', 'FoodsController@index');
// Create
Route::get('/crud/create', 'FoodsController@create');
// Save Data
Route::post('/foods', 'FoodsController@store');
// delete
Route::delete('/foods/{food}', 'FoodsController@destroy');
// Edit
Route::get('/{food}/edit', 'FoodsController@edit');
// Saving data edit
Route::patch('/foods/{food}', 'FoodsController@update');




// Login Auth
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
