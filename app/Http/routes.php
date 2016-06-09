<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('main');
});
Route::get('about', function () {
    return view('main');
});
Route::get('blog', function () {
    return view('main');
});
Route::get('portfolio', function () {
    return view('main');
});
Route::get('hell', function () {
    return view('main');
});
Route::get('contacts', function () {
    return view('main');
});


