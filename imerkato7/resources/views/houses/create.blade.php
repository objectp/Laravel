@extends('masterHtml')


@section('content')

<h1>Insert new house</h1>

	
	{!! Form::open(['url' => 'houses']) !!}
		<div class="form-group">
			{!! Form::label('category', 'Category:') !!}
			{!! Form::text('category') !!}
		<div>
		<div class="form-group">
			{!! Form::label('type', 'Type:') !!}
			{!! Form::text('type') !!}
		<div>
		<div class="form-group">
			{!! Form::label('title', 'Title:') !!}
			{!! Form::text('title') !!}
		<div>
		<div class="form-group">
			{!! Form::label('price', 'Price:') !!}
			{!! Form::text('price') !!}
		<div>
		<div class="form-group">
			{!! Form::label('currencyType', 'Currency Type:') !!}
			{!! Form::text('currencyType') !!}
		<div>
		<div class="form-group">
			{!! Form::label('detail', 'Detail:') !!}
			{!! Form::textarea('detail') !!}
		<div>
		<div class="form-group">
			{!! Form::label('contactImerkato', 'Contact me by imerkato:') !!}
			{!! Form::text('contactImerkato') !!}
		<div>
		<div class="form-group">
			{!! Form::label('contactPhone', 'Contact me by my phone:') !!}
			{!! Form::text('contactPhone') !!}
		<div>
	
		<div class="form-group">
			{!! Form::submit('Add Article', ['class'=>'btn-primary form-control']) !!}
		<div>
	{!! Form::close() !!}


@stop


{{-- $table->increments('id');
            $table->integer('user_id');
            $table->string('user_username');
            $table->string('user_email');
            $table->string('country');
            $table->string('state');
            $table->string('city');

            $table->string('category');
            $table->string('type');
            $table->string('title');
            $table->decimal('price', 5,2);
            $table->string('currency_type');
            $table->text('detail');
            $table->string('contact_imerkato');
            $table->string('contact_phone');
            $table->string('image_path');

            $table->string('thumb_path');
            $table->timestamps(); --}}