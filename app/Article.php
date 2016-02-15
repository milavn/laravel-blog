<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    // public $title;
    // public $body;
    // public $published_at;
    // public $excerpt;

    protected $fillable = [
    	'title',
    	'body',
    	'published_at',

    ];
}
