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
    return view('index.index');
});
Route::get('/product', function () {
    return view('product.product');
});


Route::get('/team', function () {
    return view('team.intro');
});

Route::get('/team/pm', function () {
    return view('team.pm');
});
Route::get('/team/op', function () {
    return view('team.op');
});
Route::get('/team/ui', function () {
    return view('team.ui');
});
Route::get('/team/dev', function () {
    return view('team.dev');
});
Route::get('/team/bd', function () {
    return view('team.bd');
});
Route::get('/team/volunteer', function () {
    return view('team.volunteer');
});

Route::get('/aboutus', function () {
    return view('aboutus.aboutus');
});

Route::get('/publish', function () {
    return view('publish.scan');
});