@extends('masterHtml')


@section('content')


<h1>Edit {!! $article->title !!}</h1>
	{{-- form model binding is used to bind elequent with form so it auto fill the form change open to model--}}
	{{--{!! Form::open(['method' => 'PATCH', 'action' => ['ArticlesController@update', $article->id]]) !!} --}}
	{!! Form::model($article, ['method' => 'PATCH', 'action' => ['ArticlesController@update', $article->id]]) !!}

		@include ('articles.form', ['submitButtonText' => 'Update Article'])


	{!! Form::close() !!}


	@include('errors.list')

@stop