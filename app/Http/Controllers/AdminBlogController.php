<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BlogPost;
use App\Http\Requests;

class AdminBlogController extends Controller
{
    //
    function index(){
    	$posts = BlogPost::all();
    	return view('admin.posts', compact('posts'));
    }
    function create(){
    	return view('admin.createBlogPost');
    }
    function show(BlogPost $post){
    	return view('admin.post', compact('post'));
    }
    function store(){
    	$post = BlogPost::create(request()->all());
    	return redirect('admin/post/'.$post->id);
    }
    function edit(BlogPost $post){
        return view('admin.createBlogPost', compact('post'));
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
