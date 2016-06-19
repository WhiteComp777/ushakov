<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BlogPost;
use App\Http\Requests;

class PostController extends Controller
{

    public function index()
    {
        return BlogPost::all(); 
    }

    public function show($id)
    {
    	// dd(BlogPost::find($id));
        return BlogPost::find($id);
    }


}
