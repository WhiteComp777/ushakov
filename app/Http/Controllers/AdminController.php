<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class AdminController extends Controller
{
	function __construct(){
        $this->middleware('auth');
    }
    
    function main(){
    	return view('admin.main');
    }
}
