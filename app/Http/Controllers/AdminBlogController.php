<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BlogPost;
use App\Http\Requests;

class AdminBlogController extends Controller
{
    function __construct(){
        $this->middleware('auth');
    }
    function index(){
        // $posts = BlogPost::all();
        $posts = BlogPost::orderBy('id', 'desc')->get();
    	return view('admin.posts.items', compact('posts'));
    }
    function create(){
    	return view('admin.posts.create');
    }
    function show(BlogPost $post){
    	return view('admin.posts.create', compact('post'));
    }
    function store(){
    	$post = BlogPost::create(request()->all());
    	return redirect('admin/post/'.$post->id);
    }
    function edit(BlogPost $post){
        return view('admin.posts.create', compact('post'));
    }
    function update(BlogPost $post){
        $post->update(request()->all());
        return redirect('/admin/post/'.$post->id);
    }
    function delete(BlogPost $post){
        $post->delete();
        return redirect('/admin/post');
    }
}
