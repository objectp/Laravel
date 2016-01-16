<?php

namespace App\Http\Controllers;



use App\Article;//imports the Article class 
use App\Http\Requests;
use App\Http\Requests\ArticleRequest;
use App\Http\Controllers\Controller;
use Request;



class ArticlesController extends Controller
{
    public function index(){
    	$articles = Article::all();//gets the articles in assending order
    	//$articles = Article::latest()->get();//order the articles in desending order
    	//$articles = Article::latest('published_at')->where('published_at', '<=' Carbon::now())->get()
    	//$articles = Article::latest('published_at')->published()->get();//the scope method found as scopePublished in Article class
    	//return $articles;
    	//return view('articles.index')->with('articles', $articles);
    	return view('articles.index', compact('articles'));
    }

    public function show($id){
    	
    	//$article = Article::find($id);
    	//dd($article); //dump and die
    	//return $article;

    	/*if(is_null($article)){
			abort(404);
    	}*/
    	$article = Article::findOrFail($id);

    	return view('articles.show', compact('article'));


    	
    }

    public function create(){

    	return view('articles.create');
    }

    public function store(ArticleRequest $request){

    	//$input = Request::get('title');
    	//$input = Request::get('body');
    	$input = Request::all();
    	//$article = new Article;
    	//$article->title = $input['title'];
    	//$article->body = $input['body'];
    	//$article = new Article(['title' => $input['title'], 'body' => $input['body']]);

    	//Article::create($input);
    	Article::create(Request::all());
    	//Article::create($request->all())

    	return redirect('articles');

    }

    public function edit($id){

    	$article = Article::findOrFail($id);

    	return view('articles.edit', compact('article'));
    }

    public function update(ArticleRequest $request, $id){
    	$article = Article::findOrFail($id);
    	$article->update($request->all());
    	return redirect('articles');
    }
}
