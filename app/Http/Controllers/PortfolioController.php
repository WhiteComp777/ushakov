<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Portfolio;
use App\Http\Requests;
use Sunra\PhpSimple\HtmlDomParser;

class PortfolioController extends Controller
{

    public function index()
    {
        $portfolios =Portfolio::orderBy('id', 'desc')->get();
        $r = []; 
        foreach ($portfolios as $portfolio) {
            $r[] = [
            'id'=>$portfolio->id,
            'image' => $portfolio->image,
            'name' => $portfolio->name,
            // 'short'=>
            ];
        }
        return $r; 
    }

    public function show($id)
    {
        return Portfolio::find($id);
    }


}
