@extends('masterHtml')


@section('content')

<h1>Write a New Article</h1>

	
	{!! Form::open(['url' => 'articles']) !!}
		<div class="form-group">
			{!! Form::label('title', 'Title:') !!}
			{!! Form::text('title', null, ['class'=>'form-control']) !!}
		<div>

		<div class="form-group">
			{!! Form::label('body', 'Body:') !!}
			{!! Form::textarea('body', null, ['class'=>'form-control']) !!}
		<div>

		{{-- <div class="form-group">
			{!! Form::label('published_at', 'Published On:') !!}
			{!! Form::input('date','published_at', null, ['class'=>'form-control']) !!}
		<div> --}}
		<div class="form-group">
			{!! Form::label('published_at', 'Published On:') !!}
			{!! Form::input('date','published_at', date('Y-m-d'), ['class'=>'form-control']) !!}
		<div> 

		<div class="form-group">
			{!! Form::submit('Add Article', ['class'=>'btn-primary form-control']) !!}
		<div>
	{!! Form::close() !!}


@stop