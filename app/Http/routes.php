<?php
use App\Post;

Route::auth();

Route::get('/', function () {
    return view('main');
});
Route::resource('blog','PostController', ['only' => [
    'index', 'show'
]]);
Route::resource('portfolio','PortfolioController', ['only' => [
    'index', 'show'
]]);

Route::get('admin', "AdminController@main");
Route::resource('admin/post', 'AdminBlogController');
Route::resource('admin/portfolio', 'AdminPortfolioController');
Route::get('admin/post/{post}/delete', 'AdminBlogController@delete');
Route::get('admin/portfolio/{portfolio}/delete', 'AdminPortfolioController@delete');
// Route::get('post/{post}/short', 'PostController@short');

Route::auth();

Route::get('/home', 'HomeController@index');
