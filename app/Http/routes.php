<?php
use App\Post;

Route::auth();

Route::get('/', function () {
    return view('main');
});
Route::resource('blog','PostController', ['only' => [
    'index', 'show'
]]);

Route::get('admin', "AdminController@main");
Route::resource('admin/post', 'AdminBlogController');
Route::get('admin/post/{post}/delete', 'AdminBlogController@delete');


Route::auth();

Route::get('/home', 'HomeController@index');
