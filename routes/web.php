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

Route::get('/nama', function () {
    return view('welcome');
})->middleware('namamiddleware');

Route::get('/home', function(Request $r) {
    echo "</h1> Ini home </h1>";
});
