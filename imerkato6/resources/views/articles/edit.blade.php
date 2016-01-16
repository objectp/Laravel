@extends('htmlMasterPage')

@section('content')

	<h1>Edit: {!! $article->title !!}</h1>


	{!! Form::model($article, ['method' => 'PATCH', 'action' => ['ArticlesController@update', $article->id]]) !!}
		<div class="form-group">
		
		@include('articles.form', ['submitButtonText' => 'Update Article'])
	

	{!! Form::close() !!}

	@include('errors.list')

@stop