<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ArticlesController extends Controller
{
    public function index(){

    	$articles = Article::all();

    	return view('articles.index', compact('articles'));

    }

    public function show($id){

    	//$article = Article::find($id);
    	$article = Article::findOrFail($id);

    	/*if(is_null($article)){
    		abort(404);
    	}
        */
    	return view('articles.show', compact('article'));

    }
}