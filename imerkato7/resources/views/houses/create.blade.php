@extends('masterHtml')


@section('content')

<h1>Insert new house</h1>

	
	{!! Form::open(['url' => 'houses']) !!}
		
		@include ('houses.form', ['submitButtonText' => 'Add House'])

	{!! Form::close() !!}


	@include('errors.list')


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