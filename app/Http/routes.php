<?php
use App\Post;

Route::get('/2', function(){
	return view('main2');
});

Route::get('/', function () {
    return view('main2');
});
Route::resource('blog','PostController', ['only' => [
    'index', 'show'
]]);

Route::get('admin', "AdminController@main");
Route::resource('admin/post', 'AdminBlogController');
Route::get('admin/post/{post}/delete', 'AdminBlogController@delete');

