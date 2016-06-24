<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Portfolio;
use App\Http\Requests;

class AdminPortfolioController extends Controller
{
    function __construct(){
        $this->middleware('auth');
    }
    function index(){
        // $portfolios = Portfolio::all();
        $portfolios = Portfolio::orderBy('id', 'desc')->get();
    	return view('admin.portfolios.items', compact('portfolios'));
    }
    function create(){
    	return view('admin.portfolios.create');
    }
    function show(Portfolio $portfolio){
    	return view('admin.portfolios.create', compact('portfolio'));
    }
    function store(){
    	$portfolio = Portfolio::create(request()->all());
    	return redirect('admin/portfolio/'.$portfolio->id);
    }
    function edit(Portfolio $portfolio){
        return view('admin.portfolios.create', compact('portfolio'));
    }
    function update(Portfolio $portfolio){
        $portfolio->update(request()->all());
        return redirect('/admin/portfolio/'.$portfolio->id);
    }
    function delete(Portfolio $portfolio){
        $portfolio->delete();
        return redirect('/admin/portfolio');
    }
}
