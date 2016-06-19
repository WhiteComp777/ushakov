<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Http\Requests;

class AdminBlogController extends Controller
{
    //
    function index(){
    	$posts = Post::all();
    	return view('admin.posts', compact('posts'));
    }
    function create(){
    	return view('admin.createPost');
    }
    function show(Post $post){
    	return view('admin.post', compact('post'));
    }
    function store(){
    	$post = Post::create(request()->all());
    	return redirect('admin/post/'.$post->id);
    }
    function edit(Post $post){
        return view('admin.createPost', compact('post'));
    }
    function update(Post $post){
        $post->update(request()->all());
        return redirect('/admin/post/'.$post->id);
    }
    function delete(Post $post){
        $post->delete();
        return redirect('/admin/post');
    }
}
