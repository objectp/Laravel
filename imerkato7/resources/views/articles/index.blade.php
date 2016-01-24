@extends('masterHtml')


@section('content')

<h1>Articles</h1>

	@foreach ($articles as $article)
		<article>
		    {{-- three options two pass value through href --}}

			{{-- <h2><a href="/articles/{{ $article->id }}"> {{ $article->title }} </a></h2> --}}
			{{-- <h2><a href="{{ action('ArticlesController@show', [$article->id])}}"> {{ $article->title }} </a></h2> --}}
			<h2><a href="{{ url('/articles', $article->id)}}"> {{ $article->title }} </a></h2>

			<div class="body">{{ $article->body }}</div>
		</article>
	@endforeach

@stop