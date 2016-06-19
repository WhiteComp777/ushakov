<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BlogPost extends Model
{
    //
    protected $table = 'posts';
    protected $guarded = ['created_at', 'updated_at'];
}
