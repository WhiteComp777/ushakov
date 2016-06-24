<?php

namespace App;
use Sunra\PhpSimple\HtmlDomParser;
use Illuminate\Database\Eloquent\Model;

class BlogPost extends Model
{
    //
    protected $table = 'posts';
    protected $guarded = ['created_at', 'updated_at'];

    function short(){
	$dom = HtmlDomParser::str_get_html( $this->content );
	$elems = $dom->find('p');
	// dd($elems);

	if(count($elems)>0){
    	$first = $elems[0];
    	foreach ($first->find('img') as $img) {
    		$img->outertext = '';
    	}
    	return $first->outertext;
    }
    return $this->content;
    }
}
