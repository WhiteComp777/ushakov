<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BlogPost;
use App\Http\Requests;
use Sunra\PhpSimple\HtmlDomParser;

class PostController extends Controller
{

    public function index()
    {
        $posts =BlogPost::where('active', 1)->orderBy('id', 'desc')->get();
        $r = []; 
        foreach ($posts as $post) {
            $r[] = [
            'id'=>$post->id,
            'content' => $post->short(),
            'title' => $post->title,
            'subtitle' => $post->subtitle,
            // 'short'=>
            ];
        }
        return $r; 
    }

    public function show($id)
    {
        return BlogPost::find($id);
    }

    function short($id){
    	$post =  BlogPost::find($id);
        return $post->short();
    	// $dom = HtmlDomParser::str_get_html( $post->content );
    }

}
