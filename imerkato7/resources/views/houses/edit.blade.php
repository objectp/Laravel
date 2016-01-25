@extends('masterHtml')


@section('content')

<h1>Edit {!! $house->title !!}</h1>

	{!! Form::model([$house, 'method' => 'PATCH', 'action' => ['HousesController@update', $house->id]]) !!}


		@include ('houses.form', ['submitButtonText' => 'Update House'])

	{!! Form::close() !!}
		
	@include('errors.list')
@stop