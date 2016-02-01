<?php

namespace App\Http\Controllers;


use App\Article;
//use Illuminate\Http\Request;
//use Carbon\Carbon;

use App\Http\Requests;
use App\Http\Requests\CreateArticleRequest;
use Illuminate\HttpResponse;
//use App\Http\Controllers\Controller;
//use Request;
//use Illuminate\Http\Request\CreateArticleRequest;
use Illuminate\Support\Facades\Auth;


class ArticlesController extends Controller
{
    public function index(){

        //return \Auth::user()->name;

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

     public function store(CreateArticleRequest $request){
     	/* Option 1
        Article::create(Request::all());
        $input = Request::all();
        $input['published_at'] = Carbon::now();

        Article::create($input);*/

        /* Option 2, doesn't include user_id
        Article::create($request->all());
        */
        /*Option 3, includes user id*/
        $article = new Article($request->all());

        Auth::user()->articles()->save($article);

        return redirect('articles');

    }

    public function edit($id){
    	$article = Article::findOrFail($id);
    	return view('articles.edit', compact('article'));
    }

    public function update($id, CreateArticleRequest $request){
    	$article = Article::findOrFail($id);

    	$article->update($request->all());

        return redirect('articles');
    }
}
