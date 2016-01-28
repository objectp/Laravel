@extends('layouts.app')

@section('content')
	<div class="container spark-screen">
	    <div class="row">
	        <div class="col-md-10 col-md-offset-1">
	            <div class="panel panel-default">
	                <div class="panel-heading">Articles</div>

	                {{-- <div class="panel-body">
	                    Your Application's Landing Page.
	                    <h1>Articles</h1>
	                </div> --}}

		@foreach ($articles as $article)
			<article>
			    {{-- three options two pass value through href --}}

				{{-- <h2><a href="/articles/{{ $article->id }}"> {{ $article->title }} </a></h2> --}}
				{{-- <h2><a href="{{ action('ArticlesController@show', [$article->id])}}"> {{ $article->title }} </a></h2> --}}
				<h2><a href="{{ url('/articles', $article->id)}}"> {{ $article->title }} </a></h2>

				<div class="body">{{ $article->body }}</div>
			</article>
		@endforeach
	                </div>
	            </div>
	        </div>
	    </div>
	</div>
@endsection