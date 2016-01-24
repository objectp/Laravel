<?php

namespace App\Http\Controllers;

use App\Article;
//use Illuminate\Http\Request;
//use Carbon\Carbon;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Request;

class ArticlesController extends Controller
{
    public function index(){

    	//$articles = Article::all();//order articles the oldest first
    	$articles = Article::latest()->get();//order articles newst first
    	//$articles = Article::oldest()->get();//order articles newst first
    	//$articles = Article::order_by('published_at', 'desc')->get();//get() fetch the result 
    	//$articles = Article::latest('published_at')->where('published_at', '<=', Carbon::now())->get();
    	//$articles = Article::latest('published_at')->published()->get();
    	return view('articles.index', compact('articles'));

    }

    public function show($id){

    	//$article = Article::find($id);
    	$article = Article::findOrFail($id);

    	/*if(is_null($article)){
    		abort(404);
    	}
        */
        //dd($article->created_at);
        //dd($article->created_at->addDays(8));
        //dd($article->created_at->addDays(8)->format('Y-m-d'));
        //dd($article->created_at->addDays(8)->diffForHumans());
        //dd($article->created_at->year);
    	return view('articles.show', compact('article'));

    }

    public function create(){
        return view('articles.create');

    }

     public function store(){
     	//Article::create(Request::all());
        $input = Request::all();
        //$input['published_at'] = Carbon::now();

        Article::create($input);

        return redirect('articles');

    }
}
