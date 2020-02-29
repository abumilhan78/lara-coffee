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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('login', function () {
    return view('auth.login');
});

Route::get('index', function () {
    return view('index');
});

Route::get('/sejarah', function () {
    return view('sejarah');
});

Route::get('/jenis', function () {
    return view('jenis');
});

Route::get('/pembuatan', function () {
    return view('pembuatan');
});

Route::get('/efek', function () {
    return view('efek');
});

Route::get('/pengertian', function () {
    return view('pengertian');
});

Route::get('/manfaat', function () {
    return view('manfaat');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/', 'frontendController');
Route::resource('coffee', 'coffeeController');
Route::resource('pengolahan', 'pengolahanController');
Route::resource('kategori', 'kategoriController');
