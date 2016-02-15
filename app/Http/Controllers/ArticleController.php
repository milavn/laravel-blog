<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Article;

use Request;

use Cache;


class ArticleController extends Controller
{
    //
    public function index() {
    	
    	$data = "test";
    	
    	//return get_parent_class($article);
    	//return view('pages/contact', compact('data'));
    	$articles = Article::all();

    	return view('articles.articles', compact('articles'));
    }

    public function show($id) {

    	//$article = Article::find($id);
    	//return ($article);

    }

    public function create() {
        //return "create";

        Cache::put('mydata', 'string to cache', 10);

        echo Cache::get('mydata');

        echo Illuminate\Support\Facades\Request::class;

        //return view('articles.create');
    }

    public function store() {
    
        $input = Request::all();

        $input['published_at']= \Carbon\Carbon::now();

        Article::create($input);

        return redirect('articles');
    }
}
